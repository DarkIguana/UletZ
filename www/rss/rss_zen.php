<?php

/* Подключаемся к базе данных*/

include_once '../../config/db.php'; 
global $db;
 // делаем выборку всех записей таблицы и сортируем ее по дате добавления новости AND `date` >= DATE_SUB(CURRENT_DATE, INTERVAL 3 day)
$sql ="SELECT articles.*, menu.url_cat_name 
            FROM `articles` 
            LEFT JOIN `menu` 
            ON articles.category_id=menu.id 
            WHERE articles.status='1' 
            
            ORDER BY date DESC ";

$rs_result = mysqli_query($db, $sql);

$all_item=null;
mysqli_close($db);


while ($row = mysqli_fetch_assoc($rs_result)) { 

$data_dob = date(DATE_RFC822, strtotime($row['date'])); // переводим дату в нужный для RSS формат

$id =  $row['id']; // ид записи (новости)
$title =  $row['name']; // заголовок новости
$des =  strip_tags($row['teaser']); // описание новости, удаляем все html теги
$image =  $row['image']; // картинка новости (превью)
$text =  $row['text']; // текст новости (в тексте новости могут быть лишние теги, картинки которые с относительными путями к рисункам, а они должны быть абсолютными)

// преобразуем пути картинок, т.е вместо /img_news/image.jpg должно быть https://seolik.ru/img_news/image.jpg
$text = str_ireplace("/images/articles/", "http://uletaemzimovat.ru/images/articles/", $text);

// ищем все картинки в новости и добавляем их в описании публикации
$doc = new DOMDocument();
@$doc->loadHTML($text);

$tags = $doc->getElementsByTagName('img');

foreach ($tags as $tag) {
$enclosure .= '<enclosure url="'.$tag->getAttribute('src').'" type="image/jpeg"/>'.PHP_EOL;
}


// удаляем все атрибуты style
$text = preg_replace('/(<[^>]+) style=".*?"/iu', '$1', $text);


// все рисунки помещаем в тег <figure>
$text = preg_replace('/(<img.+?>)/iu','<figure>$1</figure>', $text);

// Преобразует все HTML-сущности в соответствующие символы 
$text = html_entity_decode($text); 

// Удаляем все html теги кроме нужных нам в разметке
$text =  strip_tags($text, '<p><a><img><figure>');


// ПЕРЕМЕННАЯ превью картинки. Первое изображение в статье, размеченное этим элементом, отображается на карточке в ленте Дзена
$image_first = '<figure><img src="https://seolik.ru'.$image.'"></figure>';

// добавляем элементы item rss для Дзен https://yandex.ru/support/zen/publishers/rss-modify.html#publication
$all_item = $all_item.'
<item>
    <title>'.$title.'</title>
    <link>http://uletaemzimovat.ru/'.$row['url_cat_name'].'/articles/about-'.$row['name_url'].'/</link>
    <pdalink>http://uletaemzimovat.ru/'.$row['url_cat_name'].'/articles/about-'.$row['name_url'].'/</pdalink>
    <media:rating scheme="urn:simple">nonadult</media:rating>
    <pubDate>'.$data_dob.'</pubDate>
    <author>Анна Гросс</author>
    <category>Путешествия</category>
    <enclosure url="http://uletaemzimovat.ru/images/articles/'.$row['url_cat_name'].'/'.$image.'" type="image/jpeg"/>
  
	'.$enclosure.'
    <description>
        <![CDATA[
http://uletaemzimovat.ru/images/articles/'.$row['url_cat_name'].'/'.$image.'
'.$des.'
        ]]>
    </description>
    <content:encoded>
        <![CDATA[
       '.$text.'
        ]]>
    </content:encoded>
</item>';
$enclosure=null;
}


// начало описание источника https://yandex.ru/support/zen/publishers/rss-modify.html#source
$channel = '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:dc="http://purl.org/dc/elements/1.1/"
xmlns:media="http://search.yahoo.com/mrss/"
xmlns:atom="http://www.w3.org/2005/Atom"
xmlns:georss="http://www.georss.org/georss">
<channel>
<title>Улетаем зимовать</title>
<link>http://uletaemzimovat.ru</link>
<description>Статьи об Aзии. Интересные места для путешествий, культура и традиции, национальная еда.</description>
<language>ru</language>';

// окончание описания источника
$channel_end = '</channel></rss>';

// записываем готовый rss в файл
$gotovo = $channel.$all_item.$channel_end;
$file = $_SERVER['DOCUMENT_ROOT'].'/rss/feed/zen-news.xml';
file_put_contents($file, $gotovo);

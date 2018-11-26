<?php

/* Подключаемся к базе данных*/

include_once '../../config/db.php'; 

/* Показываем браузеру, что это xml-документ */

header("content-type:text/xml");

/* Выводим название и описание канала*/

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<rss version=\"2.0\">

<channel>

<title>Улетаем зимовать</title>

<link>http://uletaemzimovat.ru</link>

<description>Статьи об азии</description>

<language>ru</language>";

/* В цикле выводим все заметки из базы данных 
из таблицы articles (у Вас будет другая таблица)*/
global $db;
$sql ="SELECT articles.*, menu.url_cat_name
            FROM `articles` 
            LEFT JOIN `menu` 
            ON articles.category_id=menu.id 
            WHERE articles.status='1' 
            ORDER BY date DESC ";

$result = mysqli_query($db, $sql);


if  (mysqli_num_rows($result) > 0){

   while ($myrow = mysqli_fetch_array($result)){;

      echo "<item>".

      "<title>".strip_tags($myrow['name'])."</title>".
      
      "<link>http://uletaemzimovat.ru/".$myrow['url_cat_name']."/articles/about-".$myrow['name_url']."/</link>".

      "<description><![CDATA[".$myrow['teaser']."]]></description>".
      "<content:encoded><![CDATA[".$myrow['text']."]]></content:encoded>".
              "<pubDate>".date(DATE_RSS, strtotime($myrow['date']))."</pubDate>".
      "<author>Анна Гросс</author>".
      "<enclosure url='/images/articles/".$myrow['url_cat_name']."/".$myrow['image']."' type='image/jpeg'/>".
      "<guid>http://uletaemzimovat.ru/".$myrow['url_cat_name']."/articles/about-".$myrow['name_url']."/</guid>".

      "</item>";
   }
}

echo "</channel></rss>";

?>

<?php

/* Подключаемся к базе данных*/

include_once '../../config/db.php'; 



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

   while ($myrow = mysqli_fetch_array($result)){

    echo 
      '<title>'.strip_tags($myrow['name']).'</title>'.
      
      '<link>http://uletaemzimovat.ru/'.$myrow['url_cat_name'].'/articles/about-'.$myrow['name_url'].'/</link>'.

      '<description><![CDATA['.$myrow['teaser'].']]></description>'.
      '<content:encoded><![CDATA['.$myrow['text'].']]></content:encoded>'.
      '<pubDate>".date(DATE_RSS, strtotime('.$myrow['date'].'))."</pubDate>'.
      '<author>Анна Гросс</author>'.
      '<figure><enclosure url="http://uletaemzimovat.ru/images/articles/'.$myrow['url_cat_name'].'/'.$myrow['image'].'" type="image/jpeg"/></figure>'.
      '<guid>http://uletaemzimovat.ru/'.$myrow['url_cat_name'].'/articles/about-'.$myrow['name_url'].'/</guid>'
;
   }
}



?>

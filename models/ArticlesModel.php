<?php

/* 
 * модель для таблицы статей (articles)
 * 
 */

function getArticles($limit = null){
    global $db;
    $sql = 'SELECT *
                            FROM `articles`
                            ORDER BY id DESC';
                 if ($limit){
                $sql.=" LIMIT {$limit}";
        }
  $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

 /*
 * получить список всех статей по стране
 * 
 */

function getArticlesByCat($countryId){
     global $db;
    $sql = "SELECT * 
                              FROM articles 
                              WHERE category_id='{$countryId}'"; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }


 /*
 * список статей с именем категории
 */

function getArticlesAndCatName(){
    global $db;
    $sql = 'SELECT art.*, cat.cat_name 
                    FROM `articles`AS `art` 
                    LEFT JOIN `menu`AS `cat` 
                    ON art.category_id=cat.id 
                    ORDER BY id';
   $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}

/*
 * получить статю с именем категории по ID
 */

function getArticleById($articleId){
    global $db;
    $articleId = intval($articleId);
            $sql = "SELECT art.*, m.cat_name 
                FROM `articles`AS `art` 
                LEFT JOIN `menu`AS `m` ON art.category_id=m.id 
                WHERE art.id='{$articleId}' ";
        $rs= mysqli_query($db, $sql);
          return createSmartyRsArray($rs);
                
       
}

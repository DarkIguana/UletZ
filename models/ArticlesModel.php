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

/*
 * обновление главной фотографии стати
 * 
 */

function updateArticleImage($itemId, $newFileName){
    
    $rs = updateArticleInDb($itemId, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $newFileName);
    
    return $rs;
    
}

/*
 * обновление данных стати
 * 
 */
               
 function updateArticleInDb($itemId, $itemName, $itemDate, $itemStatus, 
         $itemTeaser, $itemText, $itemCat, $itemTeg, $newFileName = null){
     global $db;                                                                                    
     $set = array();
     
     if ($itemName){
         $set[]="`name`='{$itemName}'";
          }
     
    if ($itemDate >0 ){
         $set[]="`date`='{$itemDate}'";
          }
    if ($itemStatus !==null){
         $set[]="`status`='{$itemStatus}'";
          }
    if ($itemTeg !==null){
         $set[]="`teg`='{$itemTeg}'";
          }
     if ($itemDescShort){
         $set[]="`teaser`='{$itemTeaser}'";
          }
     if ($itemDesc){
         $set[]="`text`='{$itemText}'";
          }
     if ($itemCat){
         $set[]="`category_id`='{$itemCat}'";
          }
    if ($newFileName){
         $set[]="`image`='{$newFileName}'";
          }
          
   $setStr = implode($set, ",");
   
   $sql = "UPDATE `articles` 
                    SET {$setStr}
                    WHERE id = '{$itemId}' ";
                    
   $rs = mysqli_query($db, $sql);
    return $rs;
}
<?php

/**
 * модель для таблицы Points
 * 
 **/

 /**
 * получить список всех Points по категории
 * 
 **/

function getPoints (){
     global $db;
    $sql = 'SELECT * 
                              FROM excursions 
                              ORDER BY category_id'; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }

  /**
 * получить список всех Points по категории (стране)
 * 
 **/
function getHeadPointsByCat($countryId){
     global $db;
    $sql = "SELECT id, name, status, image
                              FROM points 
                              WHERE category_id='{$countryId}'
                              ORDER BY id ASC"; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }
 
 
  /**
 * получить список заголовков всех активных points по категории (стране)
 * 
 **/

function getActivePointsByCat($countryId){
     global $db;
    $sql = " SELECT id, name, description_short, image
                FROM `points` 
                WHERE `category_id`='{$countryId}' 
                AND `status`='1'
                ORDER BY `id` ASC"; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }

 
 /**
 * список экскурсий с именем категории
 **/

function getExcursionsAndCatName(){
    global $db;
    $sql = 'SELECT exc.*, cat.cat_name 
                    FROM `excursions`AS `exc` 
                    LEFT JOIN `menu`AS `cat` 
                    ON exc.category_id=cat.id 
                    ORDER BY id';
   $rs = mysqli_query($db, $sql);
    return createSmartyRsArray($rs);
}
 
 /**
  * добавляем новую экскурсию
  * 
 **/
 
 function insertExcursion($itemName, $itemPrice,$itemDescShort, $itemDesc, $itemCat, $itemStatus){
     global $db;
     
   $sql = "INSERT INTO `excursions`
                  SET
                       `name`='{$itemName}',    
                        `price`='{$itemPrice}',  
     `description_short` ='{$itemDescShort}',
               `description`='{$itemDesc}',   
                      `status`='{$itemStatus}',
              `category_id`='{$itemCat}'   " ; 
   
  $rs = mysqli_query($db, $sql);
  return $rs;
 }
 
 /**
 * обновление данных экскурсий
 * 
 **/
 
 function updateProduct ($itemId, $itemName, $itemPrice, $itemStatus, 
         $itemDescShort, $itemDesc, $itemCat, $newFileName = null){
     global $db;                                                                                    
     $set = array();
     
     if ($itemName){
         $set[]="`name`='{$itemName}'";
          }
     
    if ($itemPrice >0 ){
         $set[]="`price`='{$itemPrice}'";
          }
    if ($itemStatus !==null){
         $set[]="`status`='{$itemStatus}'";
          }
     if ($itemDescShort){
         $set[]="`description_short`='{$itemDescShort}'";
          }
     if ($itemDesc){
         $set[]="`description`='{$itemDesc}'";
          }
     if ($itemCat){
         $set[]="`category_id`='{$itemCat}'";
          }
    if ($newFileName){
         $set[]="`image`='{$newFileName}'";
          }
          
   $setStr = implode($set, ",");
   
   $sql = "UPDATE `excursions` 
                    SET {$setStr}
                    WHERE id = '{$itemId}' ";
                    
   $rs = mysqli_query($db, $sql);
    return $rs;
}
 
/**
 * обновление фотографии экскурсий
 * 
 **/

function updateProductImage($itemId, $newFileName){
    
    $rs = updateProduct($itemId, NULL, NULL, NULL, NULL, NULL, NULL, $newFileName);
    
    return $rs;
    
}

/**
 * получить экскурсию с именем категории по ID
 **/

function getPointById($pointId){
    global $db;
    $pointId = intval($pointId);
            $sql = "SELECT exc.*, m.cat_name 
                FROM `points`AS `exc` 
                LEFT JOIN `menu`AS `m` ON exc.category_id=m.id 
                WHERE exc.id='{$pointId}' ";
        $rs= mysqli_query($db, $sql);
          return createSmartyRsArray($rs);
                
       
}

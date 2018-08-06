<?php

/* 
 * модель для таблицы экскурсий (Excursions)
 * 
 */

 /*
 * получить список всех экскурсий по категории
 * 
 */

function getExcursions (){
     global $db;
    $sql = 'SELECT * 
                              FROM excursions 
                              ORDER BY category_id'; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }

  /*
 * получить список всех экскурсий по категории (стране)
 * 
 */

function getExcursionsByCat($countryId){
     global $db;
    $sql = "SELECT * 
                              FROM excursions 
                              WHERE category_id='{$countryId}'"; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }

 
 /*
 * список экскурсий с именем категории
 */

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
 
 /*
  * добавляем новую экскурсию
  * 
  */
 
 function insertProduct ($itemName, $itemPrice,$itemDescShort, $itemDesc, $itemCat){
     global $db;
     
   $sql = "INSERT INTO `excursions`
                  SET
                       `name`='{$itemName}',    
                        `price`='{$itemPrice}',  
     `description_short` ='{$itemDescShort}',
               `description`='{$itemDesc}',   
              `category_id`='{$itemCat}'   " ; 
   
  $rs = mysqli_query($db, $sql);
  return $rs;
 }
 
 /*
 * обновление данных экскурсий
 * 
 */
 
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
 
/*
 * обновление фотографии экскурсий
 * 
 */

function updateProductImage($itemId, $newFileName){
    
    $rs = updateProduct($itemId, NULL, NULL, NULL, NULL, NULL, NULL, $newFileName);
    
    return $rs;
    
}

/*
 * получить экскурсию с именем категории по ID
 */

function getExcursionById($excursionId){
    global $db;
    $excursionId = intval($excursionId);
            $sql = "SELECT exc.*, m.cat_name 
                FROM `excursions`AS `exc` 
                LEFT JOIN `menu`AS `m` ON exc.category_id=m.id 
                WHERE exc.id='{$excursionId}' ";
        $rs= mysqli_query($db, $sql);
          return createSmartyRsArray($rs);
                
       
}

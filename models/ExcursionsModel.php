<?php

/**
 * модель для таблицы экскурсий (Excursions)
 * 
 **/

 /**
 * получить список всех экскурсий по категории
 * 
 **/

function getExcursions (){
     global $db;
    $sql = 'SELECT * 
                              FROM excursions 
                              ORDER BY category_id'; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }

  /**
 * получить список всех экскурсий по категории (стране)
 * 
 **/
function getHeadExcursionsByCat($countryId){
     global $db;
    $sql = "SELECT id, name, status, image
                              FROM excursions 
                              WHERE category_id='{$countryId}'
                              ORDER BY id ASC"; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }
 
 /**
 * получить список заголовков всех экскурсий по сране
 * 
 **/

function getExcursionsByCat($countryId){
     global $db;
    $sql = "SELECT * 
                              FROM excursions 
                              WHERE category_id='{$countryId}'
                              ORDER BY id ASC"; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }
 
  /**
 * получить список всех активных экскурсий по категории (стране)
 * 
 **/

function getActiveExcursionsByCat($countryId){
     global $db;
    $sql = " SELECT id, name, name_url, description_short, price, image
                FROM `excursions` 
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
 function updateProduct ($itemId, $itemName, $itemNameUrl, $itemDescriptionTag, 
         $itemKeywordTag, $itemPrice, $itemStatus, $itemDescShort, $itemDesc, $itemCat, 
         $newFileName = null){
     global $db;                                                                                    
     $set = array();
     
     if ($itemName){
         $set[]="`name`='{$itemName}'";
          }
      
     if ($itemNameUrl){
         $set[]="`name_url`='{$itemNameUrl}'";
          }
     if ($itemDescriptionTag){
         $set[]="`description_tag`='{$itemDescriptionTag}'";
          }
     if ($itemKeywordTag){
         $set[]="`keywords_tag`='{$itemKeywordTag}'";
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

/**
 * получить экскурсию с именем категории по name_url
 **/

function getExcursionByName($excursionName){
    global $db;
           //$excursionName = string($excursionName);
            $sql = "SELECT exc.*, m.cat_name 
                FROM `excursions`AS `exc` 
                LEFT JOIN `menu`AS `m` ON exc.category_id=m.id 
                WHERE exc.name_url='{$excursionName}' ";
        $rs= mysqli_query($db, $sql);
          return createSmartyRsArray($rs);   
}
/**
 * получить intro (по стране)
 * 
 **/
function getIntro($countryId){
     global $db;
    $sql = "SELECT * 
                              FROM general 
                              WHERE category_id='{$countryId}'"; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }

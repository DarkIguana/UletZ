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
    $sql = " SELECT id, name, name_url, description_short, image
                FROM `points` 
                WHERE `category_id`='{$countryId}' 
                AND `status`='1'
                ORDER BY `id` ASC"; 
  $rs = mysqli_query($db, $sql);
  return createSmartyRsArray($rs);
 }

 
 /**
 * список Points с именем категории
 **/

function getPointsAndCatName(){
    global $db;
    $sql = 'SELECT exc.*, cat.cat_name 
                    FROM `points`AS `exc` 
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
 
 function insertPoint($itemNameUrl, $itemDescriptionTag, $itemitemKeywordTag, $itemName, $itemDescShort, $itemDesc, $itemCat, $itemStatus){
     global $db;
     
   $sql = "INSERT INTO `points`
                  SET
                       `name`='{$itemName}',    
     `description_short` ='{$itemDescShort}',
               `description`='{$itemDesc}',   
                      `status`='{$itemStatus}',
              `category_id`='{$itemCat}',  
                 `name_url`= '{$itemNameUrl}',
        `description_tag`= '{$itemDescriptionTag}',
          `keywords_tag`=  '{$itemitemKeywordTag}' " ; 

  $rs = mysqli_query($db, $sql);
  return $rs;
 }
 
 /**
 * обновление данных Point
 * 
 **/
 
 function updatePoint ($itemId, $itemName, $itemNameUrl, $itemPageTitle, $itemDescriptionTag, 
             $itemKeywordTag, $itemStatus, $itemDescShort, $itemDesc, $itemCat, 
         $newFileName = null){
                
     global $db;                                                                                    
     $set = array();
     
     if ($itemName){
         $set[]="`name`='{$itemName}'";
          }
      if ($itemNameUrl){
         $set[]="`name_url`='{$itemNameUrl}'";
          }
           if ($itemPageTitle){
         $set[]="`page_title`='{$itemPageTitle}'";
          }
     if ($itemDescriptionTag){
         $set[]="`description_tag`='{$itemDescriptionTag}'";
          }
     if ($itemKeywordTag){
         $set[]="`keywords_tag`='{$itemKeywordTag}'";
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
   
   $sql = "UPDATE `points` 
                    SET {$setStr}
                    WHERE id = '{$itemId}' ";
                    
   $rs = mysqli_query($db, $sql);
    return $rs;
}
 
/**
 * обновление фотографии point
 * 
 **/

function updatePointImage($itemId, $newFileName){
    
    $rs = updatePoint($itemId, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $newFileName);
       
    return $rs;
    
}

/**
 * получить Point с именем категории по ID
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
/**
 * получить Point по name
 **/

function getPointByName($namePoint){
    global $db;
        $sql = "SELECT *
                FROM `points` 
                WHERE name_url='{$namePoint}' ";
        $rs= mysqli_query($db, $sql);
          return createSmartyRsArray($rs);
}

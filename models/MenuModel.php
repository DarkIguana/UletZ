<?php

/* 
 * модель для таблицы категорий (Menu)
 * 
 */
 
 /*
 * получить подкатегории заданной категории
 */

function getMenuChildrenForCat($catId){
    global $db;
    $sql = "SELECT * 
                              FROM menu 
                              WHERE 
                              parent_id= '{$catId}' ";
                              
        $rs = mysqli_query($db, $sql);
        return createSmartyRsArray($rs);
}

/* 
 *  получить все категории и подкатегории
 * 
 */

function getMenuAllMainCutWithChildren(){
    global $db;
    $sql = 'SELECT * 
                              FROM menu 
                              WHERE parent_id=0'; 
  $rs = mysqli_query($db, $sql);
 
  $smartyRs = array();
  
 while ($row = mysqli_fetch_assoc($rs)){
     $rsMenuChildren = getMenuChildrenForCat($row['id']);
     if($rsMenuChildren){
         $row['menuChildren']=$rsMenuChildren;
     }
     
     $smartyRs[]=$row;
  }
    return $smartyRs;
}
  
/* 
 *  
 * получить все главные категории
 */

function getMainCutMenu(){
    global $db;
    $sql = 'SELECT * 
                              FROM menu 
                              WHERE parent_id=0'; 
    $rs = mysqli_query($db, $sql);
  
     return createSmartyRsArray($rs);
}

/* 
 *  
 * получить название страны по ID
 */

function getCountryId($rsCountry){
    global $db;
 
    $sql = "SELECT `id`
                              FROM menu 
                              WHERE url_cat_name='{$rsCountry}'"; 
    $array = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($array);
    $rs = $row['id'];
   
    return $rs;
}


/* 
 * получить меню по названию страны 
 * 
 */

function  getMenuByCounry($countryId){
    global $db;
 
    $sql = "SELECT `cat_name`
                              FROM menu 
                              WHERE parent_id='{$countryId}'"; 
     $rs = mysqli_query($db, $sql);
  
     return createSmartyRsArray($rs);
}


 
  
/* 
 *  
 * получить главную категорию по ID
 */

function getMainCutMenuById($rsCountry){
    global $db;
    $sql = "SELECT * 
                              FROM menu 
                                WHERE parent_id='{$rsCountry}'"; 
     $rs = mysqli_query($db, $sql);
  
     return createSmartyRsArray($rs);
}

/*
 * получить все категории и подкатегории 
 * 
 * и сортировать по parent_id
 */

function getAllMenu(){
    global $db;
    $sql = 'SELECT * 
                              FROM menu 
                              ORDER BY parent_id ASC'; 
  $rs = mysqli_query($db, $sql);
 
  return createSmartyRsArray($rs);
}

/*
 * добавить новую категорию 
 * 
 */

function insertCat($catName, $catParentId=0){
    global $db;
    $sql = "INSERT INTO
                           `menu` (`parent_id`, `cat_name`)
                             VALUES ('{$catParentId}', '{$catName}') " ; 
    mysqli_query($db, $sql);
    $id= mysqli_insert_id($db);
    return $id;
}

/*
 * обновление данных категории
 * 
 */

function updateCategoryData($itemId, $parentId=-1, $newName=' '){
    $set = array();
    global $db;
  
    if($newName){
        $set[] ="`cat_name` = '{$newName}' ";
     }
    if($parentId > -1){
        $set[]=" `parent_id` ='{$parentId}' ";
        }
     $setStr = implode($set, ",");
  
      $sql = "UPDATE `menu` 
                    SET {$setStr}
                    WHERE id = '{$itemId}' ";
                    
    $rs = mysqli_query($db, $sql);
     return $rs;
}
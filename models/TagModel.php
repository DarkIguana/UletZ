<?php
/**
 * модель  формрования метатегов
 * 
 **/

 /**
 * получить Description (по стране)
 * 
 **/
function getDescription($countryId, $pageType){
     global $db;
    $sql = "SELECT description 
                              FROM menu 
                              WHERE parent_id='{$countryId}'
                              AND  url_cat_name IN ('{$pageType}')"; 
  $rs = mysqli_query($db, $sql);
   return createSmartyRsArray($rs);
 }
 /**
 * получить Description Tag по name page
   **/
function getDescriptionTag($pageName, $pageType){
     global $db;
    $sql = "SELECT description_tag 
                              FROM  {$pageType}
                              WHERE name_url='{$pageName}'"; 
  $rs = mysqli_query($db, $sql);
   
   return createSmartyRsArray($rs);
 }
 /**
 * получить Keywords Tag по name page
   **/
function getKeywordsTag($pageName, $pageType){
     global $db;
    $sql = "SELECT keywords_tag
                              FROM  {$pageType}
                              WHERE name_url='{$pageName}'"; 
  $rs = mysqli_query($db, $sql);
   
   return createSmartyRsArray($rs);
 }
 /**
 * получить keywords_tag (по стране)
 * 
 **/
function  getKeywordsTagPrime($countryId, $pageType){
     global $db;
    $sql = "SELECT keywords_tag 
                              FROM menu 
                              WHERE parent_id='{$countryId}'
                              AND  url_cat_name IN ('{$pageType}')"; 
  $rs = mysqli_query($db, $sql);
   return createSmartyRsArray($rs);
 }
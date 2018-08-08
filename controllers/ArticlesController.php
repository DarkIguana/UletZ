<?php

/* 
 *  контроллер  страницы статей
 */
//подключаем модели
include_once '../models/MenuModel.php';
// include_once '../models/CountriesModel.php';
include_once '../models/ArticlesModel.php';

/**формирование главной страницы статей
 * 
 * 
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty, $id, $country){
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
   
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
   
    $rsArticles = getArticlesByCat($countryId);
   
    $smarty->assign('pageTitle', 'Статьи');
   
    $smarty->assign('rsArticles', $rsArticles);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'articles');
    loadTemplate($smarty, 'footer');
}

/**   
 * формирование  страницы 1 статьи
 * 
 * @param object $smarty шаблонизатор
 */

function itemAction($smarty){
    $idArticle= isset($_GET['id']) ? $_GET['id'] : "2";
    $country= isset($_GET['country']) ? $_GET['country'] : "thailand";
     
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
   
    $rsArticle = getArticleById($idArticle);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    
    $smarty->assign('rsArticle', $rsArticle);
  
    $smarty->assign('pageTitle', 'Статьи');

    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'oneArticle');
    loadTemplate($smarty, 'footer');
}

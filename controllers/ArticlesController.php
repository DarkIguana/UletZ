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
    
    $pageDescriptionArray = getDescription($countryId);
    $pageDescriptionTmp = array_shift($pageDescriptionArray);  
    $pageDescription = array_shift($pageDescriptionTmp);  
    
    $rsSubMenu = getMenuChildrenForCat($countryId);  
    $smarty->assign('smSubMenu', $rsSubMenu);
    
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
   
    $rsArticles = getActiveArticlesByCat($countryId);
   
    $smarty->assign('pageTitle', 'Статьи');
    $smarty->assign('smPageDescription', $pageDescription);
   
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
     d($idArticle);
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
   
        $rsSubMenu = getMenuChildrenForCat($countryId);  
        $smarty->assign('smSubMenu', $rsSubMenu);
    
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
/**
 * формирование  страницы 1 экскурсии по name_url
 * 
 * @param object $smarty шаблонизатор
 */
function aboutAction($smarty) {
    $nameArticle = isset($_GET['name_url']) ? $_GET['name_url'] : "KoTalu";
    $country = isset($_GET['country']) ? $_GET['country'] : "thailand";

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);

    $pageDescriptionArray = getDescriptionTag($nameArticle);
    $pageDescriptionTmp = array_shift($pageDescriptionArray);  
    $pageDescription = array_shift($pageDescriptionTmp);  
    
    $rsArticle = getArticleByName($nameArticle);
  
    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);

    $smarty->assign('rsArticle', $rsArticle);
    $smarty->assign('pageTitle', 'Статьи');
    $smarty->assign('smPageDescription', $pageDescription);
   
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'oneArticle');
    loadTemplate($smarty, 'footer');
}
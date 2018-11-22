<?php

/**
 *  контроллер главной страницы
 */
// подключаем модели
include_once '../models/ExcursionsModel.php';
include_once '../models/TagModel.php'; // функции формрования метатегов
/* *
 *  формирование страницы со всеми экскурсиями
 * 
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty, $id, $country) {
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsExcursions = getActiveExcursionsByCat($countryId);
    
    $pageDescriptionArray = getDescription($countryId, 'excursions');
    $pageDescriptionTmp = array_shift($pageDescriptionArray);  
    $pageDescription = array_shift($pageDescriptionTmp);  
 
    $keywordsArray = getKeywordsTagPrime($countryId,  'excursions');
    $keywordsTmp = array_shift($keywordsArray);  
    $keywords = array_shift($keywordsTmp);
    $smarty->assign('smKeywords', $keywords);
    
    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $rsIntro = getIntro($countryId);
    $smarty->assign('smIntro', $rsIntro);
    $rsIntrotemp=$rsIntro[1];
    $pageTitle=$rsIntrotemp['name'] ;
    $rsFooter = getFooter();
    $smarty->assign('smFooter', $rsFooter);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);

    $smarty->assign('rsExcursions', $rsExcursions);

    $smarty->assign('rsPageTitle', $pageTitle);
    $smarty->assign('smPageDescription', $pageDescription);
   
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'excursions');
    loadTemplate($smarty, 'footer');
}
/**
 * формирование  страницы 1 экскурсии по name_url
 * 
 * @param object $smarty шаблонизатор
 */
function toAction($smarty) {
    $nameExcursion = isset($_GET['name_url']) ? $_GET['name_url'] : "KoTalu";
    $country = isset($_GET['country']) ? $_GET['country'] : "thailand";

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);

    $pageDescriptionArray = getDescriptionTag($nameExcursion, 'excursions');
    $pageDescriptionTmp = array_shift($pageDescriptionArray);  
    $pageDescription = array_shift($pageDescriptionTmp);  
    
    $keywordsArray = getKeywordsTag($nameExcursion, 'excursions');
    $keywordsTmp = array_shift($keywordsArray);  
    $keywords = array_shift($keywordsTmp);
    $smarty->assign('smKeywords', $keywords);
    
    $rsExcursion = getExcursionByName($nameExcursion);

    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $rsFooter = getFooter();
    $smarty->assign('smFooter', $rsFooter);
    $smarty->assign('rsExcursion', $rsExcursion);

    $smarty->assign('rsPageTitle', 'Экскурсии');
    $smarty->assign('smPageDescription', $pageDescription);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'oneExcursion');
    loadTemplate($smarty, 'footer');
}


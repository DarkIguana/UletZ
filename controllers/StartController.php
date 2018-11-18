<?php
/**
 *  контроллер главной страницы
 */
// подключаем модели
include_once '../models/ExcursionsModel.php';
include_once '../models/TagModel.php'; // функции формрования метатегов

/* * формирование главной страницы сайта
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
 
    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $rsIntro = getIntro($countryId);
    $smarty->assign('smIntro', $rsIntro);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);

    $smarty->assign('rsExcursions', $rsExcursions);

    $smarty->assign('pageTitle', 'Экскурсии');
    $smarty->assign('smPageDescription', $pageDescription);
   
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}


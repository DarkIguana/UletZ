<?php

/**
 *  контроллер  страницы Points
 */
// подключаем модели

include_once '../models/PointsModel.php';


/* * формирование страницы points
 * 
 * @param object $smarty шаблонизатор
 */

function indexAction($smarty, $id, $country) {
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsPoints = getActivePointsByCat($countryId);

    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
 
    $pageDescriptionArray = getDescription($countryId, 'points');
    $pageDescriptionTmp = array_shift($pageDescriptionArray);  
    $pageDescription = array_shift($pageDescriptionTmp);  
    $smarty->assign('smPageDescription', $pageDescription);
    
    $smarty->assign('rsPoints', $rsPoints);

    $smarty->assign('pageTitle', 'Точки');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'points');
    loadTemplate($smarty, 'footer');
}

/**
 * формирование  страницы 1 point
 * 
 * @param object $smarty шаблонизатор
 */
function itemAction($smarty) {
    $namePoint = isset($_GET['name_url']) ? $_GET['name_url'] : "KoTalu";
    $country = isset($_GET['country']) ? $_GET['country'] : "thailand";

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);

    $rsPoint  = getPointByName($namePoint);

    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
 
    $pageDescriptionArray = getDescriptionTag($namePoint, 'points');
    $pageDescriptionTmp = array_shift($pageDescriptionArray);  
    $pageDescription = array_shift($pageDescriptionTmp);  
    $smarty->assign('smPageDescription', $pageDescription);
    $smarty->assign('rsPoint', $rsPoint);

    $smarty->assign('pageTitle', 'Point');
/**
    $dir     = "../www/images/points/$country";
    $files1 = scandir($dir);
    $smarty->assign('files1', $files1);
     */
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'onePoint');
    loadTemplate($smarty, 'footer');
}

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
    $rsFooter = getFooter();
    $smarty->assign('smFooter', $rsFooter);
    $pageDescriptionArray = getDescription($countryId, 'points');
    $pageDescriptionTmp = array_shift($pageDescriptionArray);
    $pageDescription = array_shift($pageDescriptionTmp);
    $smarty->assign('smPageDescription', $pageDescription);
    $keywordsArray = getKeywordsTagPrime($countryId, 'points');
    $keywordsTmp = array_shift($keywordsArray);
    $keywords = array_shift($keywordsTmp);
    $smarty->assign('smKeywords', $keywords);
    $smarty->assign('rsPoints', $rsPoints);
    $smarty->assign('rsPageTitle', 'Точки');
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'points');
    loadTemplate($smarty, 'footer');
}

/**
 * формирование  страницы 1 point
 * 
 * @param object $smarty шаблонизатор
 */
function theAction($smarty) {
    $namePoint = isset($_GET['name_url']) ? $_GET['name_url'] : "kuybury";
    $country = isset($_GET['country']) ? $_GET['country'] : "thailand";
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsPoint = getPointByName($namePoint);
    $rspagetitle = $rsPoint[0]['page_title'];
    if (!$rspagetitle) {
        $rspagetitle = 'Достопримечательности';
    };
    $smarty->assign('rsPageTitle', $rspagetitle);
    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $rsFooter = getFooter();
    $smarty->assign('smFooter', $rsFooter);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $pageDescriptionArray = getDescriptionTag($namePoint, 'points');
    $pageDescriptionTmp = array_shift($pageDescriptionArray);
    $pageDescription = array_shift($pageDescriptionTmp);
    $smarty->assign('smPageDescription', $pageDescription);
    $keywordsArray = getKeywordsTag($namePoint, 'points');
    $keywordsTmp = array_shift($keywordsArray);
    $keywords = array_shift($keywordsTmp);
    $smarty->assign('smKeywords', $keywords);
    $smarty->assign('rsPoint', $rsPoint);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'onePoint');
    loadTemplate($smarty, 'footer');
}

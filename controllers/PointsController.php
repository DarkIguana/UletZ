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

    $smarty->assign('rsPoints', $rsPoints);

    $smarty->assign('pageTitle', 'Точки');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'points');
    loadTemplate($smarty, 'footer');
}

/**
 * формирование  страницы 1 экскурсии
 * 
 * @param object $smarty шаблонизатор
 */
function itemAction($smarty) {
    $pointId = isset($_GET['id']) ? $_GET['id'] : "2";
    $country = isset($_GET['country']) ? $_GET['country'] : "thailand";

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);

    $rsPoint = getPointById($pointId);

    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);

    $smarty->assign('rsPoint', $rsPoint);

    $smarty->assign('pageTitle', 'Point');


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'onePoint');
    loadTemplate($smarty, 'footer');
}

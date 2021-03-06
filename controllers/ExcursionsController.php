<?php

/**
 *  контроллер главной страницы
 */
// подключаем модели

include_once '../models/ExcursionsModel.php';


/* * формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */

function indexAction($smarty, $id, $country) {
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsExcursions = getActiveExcursionsByCat($countryId);

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

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}

/**
 * формирование  страницы 1 экскурсии по Id
 * 
 * @param object $smarty шаблонизатор
 */
function itemAction111($smarty) {
    $idExcursion = isset($_GET['id']) ? $_GET['id'] : "2";
    $country = isset($_GET['country']) ? $_GET['country'] : "thailand";

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);

    $rsExcursion = getExcursionById($idExcursion);

    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);

    $smarty->assign('rsExcursion', $rsExcursion);

    $smarty->assign('pageTitle', 'Экскурсии');
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

    $rsExcursion = getExcursionByName($nameExcursion);

    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);

    $smarty->assign('rsExcursion', $rsExcursion);

    $smarty->assign('pageTitle', 'Экскурсии');


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'oneExcursion');
    loadTemplate($smarty, 'footer');
}

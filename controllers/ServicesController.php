<?php

include_once '../models/ServicesModel.php';

/* * формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */

function indexAction($smarty, $id, $country) {
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsServices = getServicesByCat($countryId);
    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('rsServices', $rsServices);
    $smarty->assign('pageTitle', 'Услуги');
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'services');
    loadTemplate($smarty, 'footer');
}

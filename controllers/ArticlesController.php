<?php

/*
 *  контроллер  страницы статей
 */
//подключаем модели
include_once '../models/MenuModel.php';
// include_once '../models/CountriesModel.php';
include_once '../models/ArticlesModel.php';
include_once '../models/TagModel.php'; // функции формрования метатегов

/* * формирование главной страницы статей
 * 
 * 
 * @param object $smarty шаблонизатор
 */

function indexAction($smarty, $id, $country) {
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $pageDescriptionArray = getDescription($countryId, 'articles');
    $pageDescriptionTmp = array_shift($pageDescriptionArray);
    $pageDescription = array_shift($pageDescriptionTmp);
    $keywordsArray = getKeywordsTagPrime($countryId, 'articles');
    $keywordsTmp = array_shift($keywordsArray);
    $keywords = array_shift($keywordsTmp);
    $smarty->assign('smKeywords', $keywords);
    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $pageTitleTemp = getPageTitle($countryId);
    $pageTitleTemp = $pageTitleTemp[0];
    $pageTitle = $pageTitleTemp['description'];
    $rsFooter = getFooter();
    $smarty->assign('smFooter', $rsFooter);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $rsArticles = getActiveArticlesByCat($countryId);
    $smarty->assign('rsPageTitle', $pageTitle);
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
function itemAction($smarty) {
    $idArticle = isset($_GET['id']) ? $_GET['id'] : "2";
    $country = isset($_GET['country']) ? $_GET['country'] : "thailand";
    d($idArticle);
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $rsArticle = getArticleById($idArticle);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $rsFooter = getFooter();
    $smarty->assign('smFooter', $rsFooter);
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
    $pageDescriptionArray = getDescriptionTag($nameArticle, 'articles');
    $pageDescriptionTmp = array_shift($pageDescriptionArray);
    $pageDescription = array_shift($pageDescriptionTmp);
    $keywordsArray = getKeywordsTag($nameArticle, 'articles');
    $keywordsTmp = array_shift($keywordsArray);
    $keywords = array_shift($keywordsTmp);
    $smarty->assign('smKeywords', $keywords);
    $rsArticle = getArticleByName($nameArticle);
    $rspagetitle = $rsArticle[0]['page_title'];
    if (!$rspagetitle) {
        $rspagetitle = 'Статьи';
    };
    $smarty->assign('rsPageTitle', $rspagetitle);
    $rsSubMenu = getMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $rsFooter = getFooter();
    $smarty->assign('smFooter', $rsFooter);
    $smarty->assign('rsArticle', $rsArticle);
    $smarty->assign('smPageDescription', $pageDescription);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'oneArticle');
    loadTemplate($smarty, 'footer');
}

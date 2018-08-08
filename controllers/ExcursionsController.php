    <?php
/**
 *  контроллер главной страницы
 */
// подключаем модели

include_once '../models/ExcursionsModel.php';

    
/**формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */

function indexAction($smarty, $id, $country){
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
    $rsExcursions = getExcursionsByCat($countryId);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
  
    $smarty->assign('rsExcursions', $rsExcursions);
    
    $smarty->assign('pageTitle', 'Главная страница');
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'excursions');
    loadTemplate($smarty, 'footer');
}

/**   
 * формирование  страницы 1 экскурсии
 * 
 * @param object $smarty шаблонизатор
 */

function itemAction($smarty){
    $idExcursion= isset($_GET['id']) ? $_GET['id'] : "2";
     $country= isset($_GET['country']) ? $_GET['country'] : "thailand";
     
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
   
    $rsExcursion = getExcursionById($idExcursion);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    
    $smarty->assign('rsExcursion', $rsExcursion);
  
    $smarty->assign('pageTitle', 'Главная страница');

    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'oneExcursion');
    loadTemplate($smarty, 'footer');
}


   


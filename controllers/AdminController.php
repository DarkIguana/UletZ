<?php

/**
 * контроллер админки
 * */
// подключаем модели
include_once '../models/MenuModel.php';
include_once '../models/ExcursionsModel.php';
include_once '../models/ArticlesModel.php';
include_once '../models/PointsModel.php';

$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('templateWebPath', TemplateAdminWebPath);

function indexAction($smarty, $id, $country) {

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('pageTitle', 'Admin Page');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'admin');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * добавление новой категории
 * */
function addnewcatAction() {
    $catMenuName = $_POST['newMenuCategoryName'];
    $catMenuParentId = $_POST['generalMenuCatId'];
 $res = insertCat($catMenuName, $catMenuParentId);
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = ' Категория добавлена';
    } else {
        $resData['success'] = 0;
        $resData['message'] = ' Ошика добавления категории';
    }
    echo json_encode($resData);
    return;
}

/**
 * обновление данных категории
 * */
function updatecategoryAction() {
    $itemId = $_POST['itemId'];
    $parentId = $_POST['parentId'];
    $newName = $_POST['newName'];
 $res = updateCategoryData($itemId, $parentId, $newName);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = ' Категория добавлена';
    } else {
        $resData['success'] = 0;
        $resData['message'] = ' Ошика добавления категории';
    }
    echo json_encode($resData);
    return;
}
/** -------------------------Экскурсии ---------------* */

/**
 * страница управления Экскурсиями
 * */
function excursionsAction($smarty, $id, $country) {
   $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsExcursionsHead = getHeadExcursionsByCat($countryId);
   $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $upCountry = ucfirst($country);
    $smarty->assign('smupCountry', $upCountry);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('rsExcursionsHead', $rsExcursionsHead);/** d($smarty); * */
    $smarty->assign('pageTitle', 'Admin Page');
  loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminExcursions');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * страница добавления Экскурсии
 * */
function addexcursionAction($smarty, $id, $country) {
 $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    //$rsExcursions = getExcursionsAndCatName();
    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('pageTitle', 'Admin Page');
    loadTemplate($smarty, 'adminAddHeader');
    loadTemplate($smarty, 'adminAddExcursion');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * страница изменения одной Экскурсии
 * */
function editexcursionAction($smarty, $idExcursion, $country) {
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $idExcursion = isset($_GET['id']) ? $_GET['id'] : "2";
    $rsExcursion = getExcursionById($idExcursion);
    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $upCountry = ucfirst($country);
    $smarty->assign('smupCountry', $upCountry);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('rsExcursion', $rsExcursion);
    $smarty->assign('pageTitle', 'Admin Page');
    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminEditExcursion');
    loadTemplate($smarty, 'adminFooter');
}

/**
 *  добавлениe Экскурсии в БД
 * */
function addexcursiontodbAction() {
    $itemNameUrl = $_POST['itemNameUrl'];
    $itemPageTitle = $_POST['itemPageTitle'];
    $itemDescriptionTag = $_POST['itemDescriptionTag'];
    $itemitemKeywordTag = $_POST['itemKeywordTag'];
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $itemDesc = $_POST['itemDesc'];
    $itemDescShort = $_POST['itemDescShort'];
    $itemCat = $_POST['itemCatId'];
    $itemStatus = $_POST['itemStatus'];
    $res = insertExcursion($itemNameUrl, $itemPageTitle, $itemDescriptionTag, $itemitemKeywordTag, $itemName, $itemPrice, $itemDescShort, $itemDesc, $itemCat, $itemStatus);
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = ' Изменения успншно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = ' Ошика изменения данных';
    }
    echo json_encode($resData);
    return;
}
/**
 * получаем данные об экскурсии из формы и посылаем в БД
 * 
 * @return type
 */
function updateexcursionAction() {
    $itemId = $_POST['itemId'];
    $itemName = $_POST['itemName'];
    $itemNameUrl = $_POST['itemNameUrl'];
    $itemPageTitle = $_POST['itemPageTitle'];
    $itemDescriptionTag = $_POST['itemDescriptionTag'];
    $itemKeywordTag = $_POST['itemKeywordTag'];
    $itemPrice = $_POST['itemPrice'];
    $itemStatus = $_POST['itemStatus'];
    $itemDescShort = $_POST['itemDescShort'];
    $itemDesc = $_POST['itemDesc'];
    $itemCat = $_POST['itemCatId'];
    //  $newFileName      = $_POST['newFileName'];   
    $res = updateProduct($itemId, $itemName, $itemNameUrl, $itemPageTitle, $itemDescriptionTag, $itemKeywordTag, $itemPrice, $itemStatus, $itemDescShort, $itemDesc, $itemCat);
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = ' Изменения успншно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = ' Ошика изменения данных';
    }
    echo json_encode($resData);
    return;
}

/**
 * загрузка файлов на сервер с изменением имени
 * */
function uploadexcAction() {
    $country = isset($_GET['country']) ? $_GET['country'] : null;
    $maxSize = 2 * 1024 * 1024;
    $itemId = $_POST['itemId'];
    // получаем расширение файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    // создаем имя файлу
    $newFileName = $itemId . '.' . $ext;
    if ($_FILES['filename']['size'] > $maxSize) {
        echo ('файл слишком большой');
        return;
    }
    // проверка загружен ли файл
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/excursions/' . $country . '/' . $newFileName);
        if ($res) {
            $res = updateProductImage($itemId, $newFileName);
            if ($res) {
                header("Location: /$country/admin/editexcursion/$itemId/");
            }
        }
    }
}

/**
 * загрузка изображений для Экскурсий  на сервер
 * */
function uploadexcdescriptionimgAction() {
    $country = isset($_GET['country']) ? $_GET['country'] : null;
    $maxSize = 2 * 1024 * 1024;
    $itemId = $_POST['itemId'];
    if ($_FILES['filename']['size'] > $maxSize) {
        echo ('файл слишком большой');
        return;
    }
    // проверка загружен ли файл
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/excursions/' . $country . '/' . $_FILES['filename']['name']);
          if ($res) {
            header("Location: /$country/admin/editexcursion/$itemId/");
        }
    }
}

/**  -----------------------------Статьи----------------------------------------  * */

/**
 * страница управления Статьями
 * */
function articlesAction($smarty, $id, $country) {

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsHeadArticles = getHeadArticlesByCat($countryId);
    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $upCountry = ucfirst($country);
    $smarty->assign('smupCountry', $upCountry);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('rsHeadArticles', $rsHeadArticles);
    $smarty->assign('pageTitle', 'Admin Page');
    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminArticles');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * страница добавления Статьи
 * */
function addarticleAction($smarty, $id, $country) {

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsArticles = getArticlesAndCatName();
    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    /** $smarty->assign('rsArticles', $rsArticles);  * */
    $smarty->assign('pageTitle', 'Admin Page');
    loadTemplate($smarty, 'adminAddHeader');
    loadTemplate($smarty, 'adminAddArticle');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * страница изменения одной Статьи
 * */
function editarticleAction($smarty, $idArticle, $country) {
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $upCountry = ucfirst($country);
    $smarty->assign('smupCountry', $upCountry);
    $idArticle = isset($_GET['id']) ? $_GET['id'] : "2";
    $rsArticle = getArticleById($idArticle);
    $smarty->assign('rsArticle', $rsArticle);
    $smarty->assign('pageTitle', 'Admin Page');
    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminEditArticle');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * загрузка файлов на сервер с изменением имени
 * */
function uploadartAction() {
    $country = isset($_GET['country']) ? $_GET['country'] : null;
    $maxSize = 2 * 1024 * 1024;
    $itemId = $_POST['itemId'];
    // получаем расширение файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    // создаем имя файлу
    $newFileName = $itemId . '.' . $ext;
    if ($_FILES['filename']['size'] > $maxSize) {
        echo ('файл слишком большой');
        return;
    }
    // проверка загружен ли файл
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/articles/' . $country . '/' . $newFileName);
        if ($res) {
            $res = updateArticleImage($itemId, $newFileName);
            if ($res) {
                header("Location: /$country/admin/editarticle/$itemId/");
            }
        }
    }
}

/**
 * загрузка изображений для статей  на сервер
 * */
function uploadarticlesdescriptionimgAction() {
    $country = isset($_GET['country']) ? $_GET['country'] : null;
    $maxSize = 2 * 1024 * 1024;
    $itemId = $_POST['itemId'];
    if ($_FILES['filename']['size'] > $maxSize) {
        echo ('файл слишком большой');
        return;
    }
    // проверка загружен ли файл
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/articles/' . $country . '/' . $_FILES['filename']['name']);
        // if($res){
        //    $res=updatePointImage($itemId, $newFileName);
        if ($res) {
            header("Location: /$country/admin/editarticle/$itemId/");
        }
    }
}

/**
 * получаем данные об экскурсии из формы и посылаем в БД
 * 
 * @return type
 */
function updatearticleAction() {
    $itemId = $_POST['itemId'];
    $itemName = $_POST['itemName'];
    $itemNameUrl = $_POST['itemNameUrl'];
    $itemPageTitle = $_POST['itemPageTitle'];
    $itemDescriptionTag = $_POST['itemDescriptionTag'];
    $itemKeywordTag = $_POST['itemKeywordTag'];
    $itemDate = $_POST['itemDate'];
    $itemStatus = $_POST['itemStatus'];
    $itemTeaser = $_POST['itemTeaser'];
    $itemText = $_POST['itemText'];
    $itemCat = $_POST['itemCatId'];
    $itemTeg = $_POST['itemTeg'];
    //  $newFileName      = $_POST['newFileName'];  

    $res = updateArticleInDb($itemId, $itemName, $itemNameUrl, $itemPageTitle, $itemDescriptionTag, $itemKeywordTag, $itemDate, $itemStatus, $itemTeaser, $itemText, $itemCat, $itemTeg);
    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = ' Изменения успншно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = ' Ошика изменения данных';
    }
    echo json_encode($resData);
    return;
}

/**
 *  добавлениe Статьи в БД
 * */
function addarticletodbAction() {
    $itemName = $_POST['itemName'];
    $itemTeaser = $_POST['itemTeaser'];
    $itemText = $_POST['itemText'];
    $itemTeg = $_POST['itemTeg'];
    $itemCat = $_POST['itemCatId'];
    $itemNameUrl = $_POST['itemNameUrl'];
    $itemPageTitle = $_POST['itemPageTitle'];
    $itemDescriptionTag = $_POST['itemDescriptionTag'];
    $itemitemKeywordTag = $_POST['itemKeywordTag'];
    $itemStatus = $_POST['itemStatus'];
    $res = insertArticleToDb($itemNameUrl, $itemPageTitle, $itemDescriptionTag, $itemitemKeywordTag, $itemName, $itemTeaser, $itemText, $itemTeg, $itemCat, $itemStatus);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = ' Изменения успншно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = ' Ошика изменения данных';
    }
    echo json_encode($resData);
    return;
}

/**  -----------------------------Points----------------------------------------  * */

/**
 * страница управления Points
 * */
function pointsAction($smarty, $id, $country) {
    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $rsPointsHead = getHeadPointsByCat($countryId);
    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);
    $upCountry = ucfirst($country);
    $smarty->assign('smupCountry', $upCountry);
    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('rsPointsHead', $rsPointsHead);    /* d($smarty); */
    $smarty->assign('pageTitle', 'Admin Page Points');
    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminPoints');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * страница добавления Point
 * */
function addpointAction($smarty, $id, $country) {

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    //$rsExcursions = getExcursionsAndCatName();
    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);

    $smarty->assign('pageTitle', 'Admin Page Point');

    loadTemplate($smarty, 'adminAddHeader');
    loadTemplate($smarty, 'adminAddPoint');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * страница изменения одной Point
 * */
function editpointAction($smarty, $idPoint, $country) {

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);
    $idPoint = isset($_GET['id']) ? $_GET['id'] : "1";
    $rsPoint = getPointById($idPoint);

    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);

    $upCountry = ucfirst($country);
    $smarty->assign('smupCountry', $upCountry);
    $smarty->assign('rsPoint', $rsPoint);

    $smarty->assign('pageTitle', 'Admin Page Point');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminEditPoint');
    loadTemplate($smarty, 'adminFooter');
}

/**
 *  добавлениe Point в БД
 * */
function addPointToDbAction() {
    $itemNameUrl = $_POST['itemNameUrl'];
    $itemPageTitle = $_POST['itemPageTitle'];
    $itemDescriptionTag = $_POST['itemDescriptionTag'];
    $itemitemKeywordTag = $_POST['itemKeywordTag'];

    $itemName = $_POST['itemName'];
    $itemDesc = $_POST['itemDesc'];
    $itemDescShort = $_POST['itemDescShort'];
    $itemCat = $_POST['itemCatId'];
    $itemStatus = $_POST['itemStatus'];

    $res = insertPoint($itemNameUrl, $itemPageTitle, $itemDescriptionTag, $itemitemKeywordTag, $itemName, $itemDescShort, $itemDesc, $itemCat, $itemStatus);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = ' Изменения успншно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = ' Ошика изменения данных';
    }
    echo json_encode($resData);
    return;
}

/**
 * получаем данные об Point из формы и посылаем в БД
 * 
 * @return type
 */
function updatepointAction() {
    $itemId = $_POST['itemId'];
    $itemName = $_POST['itemName'];

    $itemNameUrl = $_POST['itemNameUrl'];
    $itemPageTitle = $_POST['itemPageTitle'];
    $itemDescriptionTag = $_POST['itemDescriptionTag'];
    $itemKeywordTag = $_POST['itemKeywordTag'];

    $itemStatus = $_POST['itemStatus'];
    $itemDescShort = $_POST['itemDescShort'];
    $itemDesc = $_POST['itemDesc'];
    $itemCat = $_POST['itemCatId'];
    //  $newFileName      = $_POST['newFileName'];   

    $res = updatePoint($itemId, $itemName, $itemNameUrl, $itemPageTitle, $itemDescriptionTag, $itemKeywordTag, $itemStatus, $itemDescShort, $itemDesc, $itemCat);

    if ($res) {
        $resData['success'] = 1;
        $resData['message'] = ' Изменения успншно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message'] = ' Ошика изменения данных';
    }
    echo json_encode($resData);
    return;
}

/**
 * загрузка файлов Point на сервер с изменением имени
 * */
function uploadpointimgAction() {
    $country = isset($_GET['country']) ? $_GET['country'] : null;

    $maxSize = 2 * 1024 * 1024;
    $itemId = $_POST['itemId'];

    // получаем расширение файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);

    // создаем имя файлу
    $newFileName = $itemId . '.' . $ext;

    if ($_FILES['filename']['size'] > $maxSize) {
        echo ('файл слишком большой');
        return;
    }

    // проверка загружен ли файл
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/points/' . $country . '/' . $newFileName);
        if ($res) {
            $res = updatePointImage($itemId, $newFileName);
            if ($res) {
                header("Location: /$country/admin/editpoint/$itemId/");
            }
        }
    }
}

/**
 * загрузка изображений для статей Point на сервер
 * */
function uploadpointdescriptionimgAction() {
    $country = isset($_GET['country']) ? $_GET['country'] : null;

    $maxSize = 2 * 1024 * 1024;
    $itemId = $_POST['itemId'];

    if ($_FILES['filename']['size'] > $maxSize) {
        echo ('файл слишком большой');
        return;
    }

    // проверка загружен ли файл
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/points/' . $country . '/' . $_FILES['filename']['name']);
        if ($res) {
            header("Location: /$country/admin/editpoint/$itemId/");
        }
    }
}

/** -------------------------добавить ---------------* */

/**
 * страница управления добавить
 * */
function addAction($smarty, $id, $country) {

    $countries = getMainCutMenu();
    $countryId = getCountryId($country);
    $rsMenu = getMenuByCounry($countryId);


    $rsSubMenu = getAllMenuChildrenForCat($countryId);
    $smarty->assign('smSubMenu', $rsSubMenu);

    $smarty->assign('countries', $countries);
    $smarty->assign('smcountry', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);

    /** d($smarty); 
     *  $rsExcursionsHead = getHeadExcursionsByCat($countryId);
     *   $smarty->assign('rsExcursionsHead', $rsExcursionsHead); * */
    $smarty->assign('pageTitle', 'Admin Page');

    loadTemplate($smarty, 'adminAddHeader');
    loadTemplate($smarty, 'adminAdd');
    loadTemplate($smarty, 'adminFooter');
}

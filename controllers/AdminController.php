<?php

/* 
 * контроллер админки
 */

// подключаем модели
include_once '../models/MenuModel.php';
include_once '../models/ExcursionsModel.php';
include_once '../models/ArticlesModel.php';

$smarty ->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('templateWebPath', TemplateAdminWebPath);



function indexAction($smarty, $id, $country){
    
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);

    $smarty->assign('countries', $countries);
    $smarty->assign('country', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
      
    $smarty->assign('pageTitle', 'Admin Page');
    
    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'admin');
    loadTemplate($smarty, 'adminFooter');
}

/*
 * добавление новой категории
 */

function addnewcatAction(){
    $catMenuName     = $_POST['newMenuCategoryName'];
    $catMenuParentId = $_POST['generalMenuCatId'];
    
    $res= insertCat($catMenuName,$catMenuParentId);
      if ($res){
        $resData['success'] = 1;
        $resData['message']= ' Категория добавлена';
    } else {
        $resData['success'] = 0;
        $resData['message']= ' Ошика добавления категории';
    }
    echo json_encode($resData);
    return;
}

/*
 * обновление данных категории
 */

function updatecategoryAction(){
    $itemId         = $_POST['itemId'];
    $parentId      = $_POST['parentId'];
    $newName    = $_POST['newName'];
    
    $res = updateCategoryData($itemId, $parentId, $newName);
    
     if ($res){
        $resData['success'] = 1;
        $resData['message']= ' Категория добавлена';
    } else {
        $resData['success'] = 0;
        $resData['message']= ' Ошика добавления категории';
    }
    echo json_encode($resData);
    return;
}


/*
 * страница управления Экскурсиями
 */

function excursionsAction($smarty, $id, $country){
    
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
    $rsExcursions = getExcursionsAndCatName();

    $smarty->assign('countries', $countries);
    $smarty->assign('country', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('rsExcursions', $rsExcursions);
    
    $smarty->assign('pageTitle', 'Admin Page');
    
     loadTemplate($smarty, 'adminHeader');
     loadTemplate($smarty, 'adminExcursions');
     loadTemplate($smarty, 'adminFooter');
}

/*
 * страница добавления Экскурсии
 */

function addexcursionAction($smarty, $id, $country){
   
    
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
    //$rsExcursions = getExcursionsAndCatName();

    $smarty->assign('countries', $countries);
    $smarty->assign('country', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    
    $smarty->assign('pageTitle', 'Admin Page');
    
     loadTemplate($smarty, 'adminHeader');
     loadTemplate($smarty, 'adminAddExcursion');
     loadTemplate($smarty, 'adminFooter');
}

/*
 * страница изменения одной Экскурсии
 */

function editexcursionAction($smarty,$idExcursion, $country){
    
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
    $idExcursion= isset($_GET['id']) ? $_GET['id'] : "2";
    $rsExcursion = getExcursionById($idExcursion);
    
    $smarty->assign('countries', $countries);
    $smarty->assign('country', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    
    
    $smarty->assign('rsExcursion', $rsExcursion);
    
    $smarty->assign('pageTitle', 'Admin Page');
    
     loadTemplate($smarty, 'adminHeader');
     loadTemplate($smarty, 'adminEditExcursion');
     loadTemplate($smarty, 'adminFooter');
}

function addproductAction(){
    $itemName           = $_POST['itemName'];
    $itemPrice             = $_POST['itemPrice'];
    $itemDesc             = $_POST['itemDesc'];
    $itemDescShort     = $_POST['itemDescShort'];
    $itemCat               = $_POST['itemCatId'];
                             
    $res=insertProduct($itemName, $itemPrice,$itemDescShort, $itemDesc, $itemCat);
 
    if($res){
        $resData['success'] = 1;
        $resData['message']= ' Изменения успншно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message']= ' Ошика изменения данных';
    }
    echo json_encode($resData);
    return;
        
    }
      
function updateexcursionAction(){
    $itemId                 = $_POST['itemId'];
    $itemName           = $_POST['itemName'];
    $itemPrice            = $_POST['itemPrice'];
    $itemStatus          = $_POST['itemStatus'];
    $itemDescShort    = $_POST['itemDescShort'];
    $itemDesc           = $_POST['itemDesc'];
    $itemCat             = $_POST['itemCatId']; 
    //  $newFileName      = $_POST['newFileName'];   
    
     $res=updateProduct($itemId, $itemName, $itemPrice, 
                                    $itemStatus, $itemDescShort, $itemDesc, $itemCat);
     
     if($res){
        $resData['success'] = 1;
        $resData['message']= ' Изменения успншно внесены';
    } else {
        $resData['success'] = 0;
        $resData['message']= ' Ошика изменения данных';
    }
    echo json_encode($resData);
    return;
    }
 
 /*
 * загрузка файлов на сервер с изменением имени
 */
    
function uploadexcAction($country){
    //$itemId= isset($_GET['id']) ? $_GET['id'] : null;
    //$country= isset($_GET['country']) ? $_GET['country'] : null;    
    
    $maxSize=2*1024*1024;
    $itemId =$_POST['itemId'];
    
  d($country);
     // получаем расширение файла
        $ext= pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION );
    
    // создаем имя файлу
         $newFileName =$itemId.'.'.$ext;
         
         if($_FILES['filename']['size']>$maxSize){
             echo ('файл слишком большой');
             return;
         }
         
         // проверка загружен ли файл
         if(is_uploaded_file($_FILES['filename']['tmp_name'])){
             $res= move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/images/excursions/'.$country.'/'.$newFileName);                             
                if($res){
                     $res=updateProductImage($itemId, $newFileName);
                         if($res){
                             header ("Location: /$country/admin/editexcursion/$itemId/");
                         }
 
         }
         }
}
    
  /*  -----------------------------Статьи----------------------------------------  */  

/*
 * страница управления Статьями
 */

function articlesAction($smarty, $id, $country){
    
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
    $rsArticles = getArticlesAndCatName();
   
    $smarty->assign('countries', $countries);
    $smarty->assign('country', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('rsArticles', $rsArticles);
    
    $smarty->assign('pageTitle', 'Admin Page');
    
     loadTemplate($smarty, 'adminHeader');
     loadTemplate($smarty, 'adminArticles');
     loadTemplate($smarty, 'adminFooter');
}

/*
 * страница добавления Статьи
 */

function addarticleAction($smarty, $id, $country){
        
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
    $rsArticles = getArticlesAndCatName();
   
    $smarty->assign('countries', $countries);
    $smarty->assign('country', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
    $smarty->assign('rsArticles', $rsArticles);
       
    $smarty->assign('pageTitle', 'Admin Page');
    
     loadTemplate($smarty, 'adminHeader');
     loadTemplate($smarty, 'adminAddArticle');
     loadTemplate($smarty, 'adminFooter');
}

/*
 * страница изменения одной Статьи
 */

function editarticleAction($smarty, $idArticle, $country){
    
    $countries =getMainCutMenu();
    $countryId = getCountryId($country); 
    $rsMenu = getMenuByCounry($countryId);
       
    $smarty->assign('countries', $countries);
    $smarty->assign('country', $country);
    $smarty->assign('countryId', $countryId);
    $smarty->assign('rsMenu', $rsMenu);
      
    
    $idArticle= isset($_GET['id']) ? $_GET['id'] : "2";
    $rsArticle = getArticleById($idArticle);
   
    $smarty->assign('rsArticle', $rsArticle);
    
    $smarty->assign('pageTitle', 'Admin Page');
    
     loadTemplate($smarty, 'adminHeader');
     loadTemplate($smarty, 'adminEditArticle');
     loadTemplate($smarty, 'adminFooter');
}


/*
 * загрузка файлов на сервер с изменением имени
 */
    
function uploadartAction($country){
        $maxSize=2*1024*1024;
        $itemId =$_POST['itemId'];
        
     // получаем расширение файла
        $ext= pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION );
    
    // создаем имя файлу
         $newFileName =$itemId.'.'.$ext;
         
         if($_FILES['filename']['size']>$maxSize){
             echo ('файл слишком большой');
             return;
         }
         
         // проверка загружен ли файл
         if(is_uploaded_file($_FILES['filename']['tmp_name'])){
             $res= move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/images/excursions/'.$newFileName);                             
                if($res){
                     $res=updateProductImage($itemId, $newFileName);
                         if($res){
                             header ("Location: /{$country}/admin/editarticle/$itemId/");
                         }
 
         }
         }
}
    
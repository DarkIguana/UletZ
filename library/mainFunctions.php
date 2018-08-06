<?php
/**
 * $smarty->error_reporting = E_ALL & ~E_NOTICE; 
 * отключаем errors
 */
/**
 *  формирование запрашиваемой страницы
 * 
 * @param string $controllerName название контроллера
 * @param string $actionName название функции обработки страницы
 * = 'index'
 */
function loadPage ($smarty, $country, $controllerName, $actionName, $id){
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty, $id, $country);
}

/**     загрузка шаблона
 * 
 * @param object $smarty
 * @param string $templateName название файла шаблона
 */
function  loadTemplate($smarty, $templateName){
    $smarty->display ($templateName.TemplatePostfix);
}

/** функция отладки. останавливая работу программы выводя значение $value 
 * 
 * @param variant $value переменная для вывода на страницу  
 *
 */
function d($value = null, $die = 1){
    echo 'Debug:<br /><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}

/**
 * преобразование результата работы функции выборки в ассоциативный массив
 * @param  recordset  $rs - набор строк, результат выборки SELECT
 * @return arrey
 */
function createSmartyRsArray($rs){
    if (!$rs) {
               return FALSE;
    }

    while ($row = mysqli_fetch_assoc($rs)){
        $smartyRs[]=$row;
    }
    return $smartyRs;
 }
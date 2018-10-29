    <?php
include_once '../config/config.php';
include_once '../config/db.php';  // инициализация БД
include_once '../library/mainFunctions.php';
include_once '../models/MenuModel.php'; // функции формрования меню

// определяем (с какой страной работаем) какой крнтроллер-файл использовать 

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Excursions';

// определяем какой (раздел сайта) Action выполнять 
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

// определяем какой id 
$id = isset($_GET['id']) ? $_GET['id'] : null;

// определяем  страну 
$country = isset($_GET['country']) ? $_GET['country'] : 'thailand';

      
loadPage($smarty, $country, $controllerName, $actionName, $id);
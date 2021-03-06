<?php
/**
 *  файл с константами
 */

//> константы обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<

//>используемый шаблон
$template = 'old';
$templateAdmin = 'admin';

// пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define ('TemplatePostfix', '.tpl');

// пути к файлам шаблонов на веб пространстве
define ('TemplateWebPath', "/templates/{$template}/");
define ('TemplateAdminWebPath', "/templates/{$templateAdmin}/");
//>
        
//< инициализация шаблонизатора Smarty
// full path to smarty.class.php
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty ->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');
$smarty->assign('templateWebPath', TemplateWebPath);
//>

// Turn off all error reporting
// error_reporting(0);

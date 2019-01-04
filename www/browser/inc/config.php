<?php

defined("DS")
	|| define("DS", DIRECTORY_SEPARATOR);
	
defined("ROOT_PATH")
	|| define("ROOT_PATH", realpath(dirname(__FILE__, 3)));

defined("BASE_PATH")
	|| define("BASE_PATH", ROOT_PATH.DS."images");
	
defined("CLASSES_PATH")
	|| define("CLASSES_PATH", ROOT_PATH.DS."browser".DS."classes");
	
set_include_path(implode(PATH_SEPARATOR, array(
	realpath(CLASSES_PATH),
	get_include_path()
)));
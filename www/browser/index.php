<?php
require_once('inc/autoload.php');
$path = BASE_PATH.DS;
$pathTarget=BASE_PATH.DS;
$rel = DS;
$up = null;

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Directory structure</title>
	
	<link href="/browser/css/core.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>


<div id="wrapper">
<?php 
              
              require_once('mod/structure.php'); 
?>

</div>



<script src="/js/jquery-3.3.1.js" type="text/javascript"></script>
<script src="/js/core.js" type="text/javascript"></script>
</body>
</html>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="RU" lang="RU" dir="ltr">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<body>

	<?php 
include ("db.php");
mysql_query("SET NAMES 'utf8'");
$result = mysql_query("SELECT title, page, header, description, txt, date, url, keyword, shortxt, txttitle  data FROM uletaemthai WHERE id=5", $db);
$myrow = mysql_fetch_array($result);  

echo $myrow['page'];
echo $myrow['title'];
echo $myrow['description'];
echo $myrow['txt'];
echo $myrow['date'];
echo $myrow['header'];
echo $myrow['url'];
echo $myrow['keyword'];
echo $myrow['shortxt'];
echo $myrow['txttitle'];

?>
<br>

</body>


</html>



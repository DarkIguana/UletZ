<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="RU" lang="RU" dir="ltr">
<head>	
	<title>Улетаем Зимовать: Экскурсии, Вьетнам</title>
	<meta name="yandex-verification" content="9b7ef59dc385c39d" />
	<meta name="Description" content="экскурсии по вьетнаму">

<?php 
include("contentV/headerViet.txt")
?>

<!-- ========================= phone ================================= -->

<div class="contact" >
			<table border="0"  cellpadding="0" cellspacing="0" style="width:100%; margin-top: 15px;">
  					<tr >
  						<td class="messengersicon"> <img src="../images/messengers-icons.png" class="iconmessengers"/></td>
  						<td class="numtd"> <p class="numsize">+7 (916) 678-73-27</p></td>
					</tr>
			</table>	
</div>

<!-- ========================= phone ================================= -->
 
<!-- ========================= text next to phone ================================= -->
<div class="intro"> 
	<h1>Экскурсии по вьетнаму</h1>		
		<p> 	
			Мы организуем индивидуальные туры, катание на слониках, поездки на острова и другие развлечения. 
			Мы хотим показать вам всё то, что однажды тронуло наше сердце. Мы объединили самые лучшие места в удобные маршруты. 
			Любой маршрут можно изменить по вашим пожеланиям! Итак, что делать в вьетнаме?
		</p>
</div>
<div style="clear: both;"></div>   <!-- zaglushka dl'a div otstupa  -->
<h1 style=" text-align: center;"> Page under construction </h1>


<!-- ========================= End excursia ================================= -->
<div style="clear: both;"></div>   <!-- zaglushka dl'a div otstupa  -->

<div>
<?php
// Simple RSS parser v.1.0 by CyberSEO.net
$feed = file_get_contents ( "http://rss.feedsportal.com/c/803/f/413231/index.rss" );
$filename = "cache.txt";
if (file_exists ( $filename ) && filesize ( $filename ) && (time () - filectime ( $filename )) < 60 * 60) {
	$content = file_get_contents ( $filename );
} else {
	$xml_parser = xml_parser_create ();
	xml_parse_into_struct ( $xml_parser, $feed, $vals, $index );
	$cnt = min ( 5, count ( $index ["TITLE"] ) );
	$content = "";
	for($i = 1; $i < $cnt; $i ++) {
		$content .= "<h3>" . html_entity_decode ( $vals [$index ["TITLE"] [$i]] ["value"], ENT_QUOTES ) . "</h3>\n";
		$content .= "<p>" . html_entity_decode ( $vals [$index ["DESCRIPTION"] [$i]] ["value"], ENT_QUOTES ) . "</p>\n";
	}
	file_put_contents ( $filename, $content, LOCK_EX );
	xml_parser_free ( $xml_parser );
}
echo $content;
?>
</div>
<iframe src="../rss.php"></iframe>

<?php 
include("/rss.php")
?>

<?php 
		include("contentV/footer.txt")
	?> 
</body>


</html>


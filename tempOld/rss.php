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
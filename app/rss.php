<?php
/*
	Display the RSS feed for upcoming events.
	
	Author: Matt Gaikema
	Date Created: 6/27/16
*/

// http://stackoverflow.com/a/9720763/5415895
header('Content-type: application/xml');
//header('Content-type: text/plain');

require("../utils/rssFeed.php");
//ini_set('display_errors', 1);

$xmlns = 'xmlns:content="http://purl.org/rss/1.0/modules/content/" '
	.' xmlns:wfw="http://wellformedweb.org/CommentAPI/"'
	.' xmlns:dc="http://purl.org/dc/elements/1.1/"'
	.' xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"';

$url = $_SERVER['SERVER_NAME'];
$aChannel = array(
	"title" => $url,
	"link" => $url,
	"description" => "Events for Math Club",
	"language" => "en"
);
$siteName = "Tamu Math Club";

$rss = new rssFeed($xmlns, $aChannel, $url, $siteName);
echo $rss->createFeed();
/*
$myfile = fopen("testfile.txt", "w");
fwrite($myfile, $rss->createFeed());
fclose($myfile);
*/
?>
<?php
// DEBUG ME

header('Content-type: application/xml');
$xmlns = 'xmlns:content="http://purl.org/rss/1.0/modules/content/"'
	.'xmlns:wfw="http://wellformedweb.org/CommentAPI/"'
	.'xmlns:dc="http://purl.org/dc/elements/1.1/"'
	.'xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"';

$url = $_SERVER['SERVER_NAME'];
$aChannel = array(
	"title" => $url,
	"link" => $url,
	"description" => "Events for Math Club",
	"language" => "en"
);
$siteName = "Tamu Math Club";

$rss = new $rssFeed($xmlns, $aChannel, $url, $siteName);
echo $rss->createFeed();

?>
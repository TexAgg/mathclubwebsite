<?php
// DEBUG ME

header('Content-type: application/xml');
/*
$xmlns = 'xmlns:content="http://purl.org/rss/1.0/modules/content/"'
	.'xmlns:wfw="http://wellformedweb.org/CommentAPI/"'
	.'xmlns:dc="http://purl.org/dc/elements/1.1/"'
	.'xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"';
*/
$xmlns = 'mlns:atom="http://www.w3.org/2005/Atom" xmlns:openSearch="http://a9.com/-/spec/opensearchrss/1.0/" xmlns:blogger="http://schemas.google.com/blogger/2008" xmlns:georss="http://www.georss.org/georss" xmlns:gd="http://schemas.google.com/g/2005" xmlns:thr="http://purl.org/syndication/thread/1.0" version="2.0"';

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
mlns:atom="http://www.w3.org/2005/Atom" xmlns:openSearch="http://a9.com/-/spec/opensearchrss/1.0/" xmlns:blogger="http://schemas.google.com/blogger/2008" xmlns:georss="http://www.georss.org/georss" xmlns:gd="http://schemas.google.com/g/2005" xmlns:thr="http://purl.org/syndication/thread/1.0" version="2.0"
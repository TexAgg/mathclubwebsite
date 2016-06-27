<?php
/*
	rssFeed.php
	Class for creating an rss feed from the google calendar events.
	Modifies the tutorial from http://www.pontikis.net/blog/simple-rss-class-create-rss-feed.

	Author: Matt Gaikema
	Date Created: 6/26/16
*/

/**
	RSS feed.
*/
class rssFeed {

	private $xmlns;
	private $aChannel;
	private $siteUrl;
	private $siteName;
	private $fullFeed;
	
	// http://php.net/manual/en/functions.arguments.php
	public function __construct($xmlns, $aChannel, $siteUrl, $siteName, $fullFeed=false) {
		// Initialize.
		$this->xmlns = $xmlns;
		$this->aChannel = $aChannel;
		$this->siteUrl = $siteUrl;
		$this->siteName = $siteName;
		$this->fullFeed = $fullFeed;
	}

	public function createFeed() {
		$xml = '<?xml version="1.0" encoding="utf-8"?>' . "\n";
		$xml .= '<rss version="2.0"' . $this->xmlns . '>' . "\n";
	}

}

?>
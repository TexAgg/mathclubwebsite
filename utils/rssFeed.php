<?php
/*
	rssFeed.php
	Class for creating an rss feed from the google calendar events.
	Modifies the tutorial from http://www.pontikis.net/blog/simple-rss-class-create-rss-feed.

	Author: Matt Gaikema
	Date Created: 6/26/16
*/

include("googleCalendar.php");

/**
	RSS feed.
*/
class rssFeed {

	// XML namespace.
	private $xmlns;
	// Channnel properties.
	private $aChannel;
	// Url of the website.
	private $siteUrl;
	// Name of the website.
	private $siteName;
	
	/**
		Constructor.
		
		@param string $xmlns XML namespace.
		@param array $aChannel Channel properties.
		@param string $siteUrl The url of the site.
		@param string $siteName The name of the site.
	*/
	public function __construct($xmlns, $aChannel, $siteUrl, $siteName) {
		// Initialize.
		$this->xmlns = $xmlns;
		$this->aChannel = $aChannel;
		$this->siteUrl = $siteUrl;
		$this->siteName = $siteName;
	}

	/**
		Generate RSS 2.0 feed.

		@return string RSS 2.0 xml.
	*/
	public function createFeed() {
		$xml = '<?xml version="1.0" encoding="utf-8"?>' . "\n";
		$xml .= '<rss version="2.0"' . $this->xmlns . '>' . "\n";

		// Channel required properties.
		$xml .= "<channel>\n";
		$xml .= "<title>" . $this->aChannel["title"] . "</title>\n";
		$xml .= "<link>" . $this->aChannel["link"] . $this->aChannel["link"] . "</link>\n";
		$xml .= "<description>" . $this->aChannel["description"] . "</description>\n";

		// Channel optional properties.

		// Get RSS channel items.
		$rssItems = $this->getFeedItems();
		foreach ($rssItems as $item) {
			$xml .= "<item>\n";
			$xml .= "<title>" . $item["title"] . "</title>\n";
			$xml .= "<link>" . $item["link"] . "</link>\n";
			$xml .= "<description>" . $item["description"] . "</description>\n";
			$xml .= "<pubDate>" . $item["pubDate"] . "</pubDate>\n";
			$xml .= "</item>\n";
		}

		$xml .= "</channel>\n";
		$xml .= "</rss>";

		return $xml;
	}

	/**
		Get the items for the RSS feed.

		@param int $numItems The number of items to return.
		@return array An associative array with the required fields of an rss item.
	*/
	private function getFeedItems($numItems=10) {
		$events = googleCalendar::getNextEvents($numItems);
		$rssItems = array();

		foreach ($events as $item) {
			$rssItem = array();
			$rssItem['title'] = $item["summary"];
			$rssItem["link"] = $item["htmlLink"];
			$rssItem["description"] = $item["description"];
			$rssItem["author"] = $item["creator"]["email"];
			$rssItem["pubDate"] = $item["created"];

			array_push($rssItems, $rssItem);
		}
		return $rssItems;
	}

}

?>
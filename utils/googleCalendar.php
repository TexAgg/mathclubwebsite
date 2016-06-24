<?php
/*
	googleCalendar.php
	Utility methods for interacting with the google calendar API.

	Author: Matt Gaikema
	Date Created: 6/9/16
*/

class GoogleCalendar {

	/**
		Returns an associative array with the next 3 events
		on the Math Club calendar.
		Since I didn't want to use any external HTTP libraries without
		knowing what the Math servers supported, I just read the JSON
		at the request url.
	*/
	static function getNextEvents()
	{

		// timeMin is now.
		$dt = new DateTime('now', new DateTimeZone("-5"));
		$min = date_format($dt, DATE_RFC3339);
		//var_dump($min);
		$timeMin = urlencode($min);

		$json = file_get_contents("https://www.googleapis.com/calendar/v3/calendars/"
			."4kl90qkd5vdkrr2pm2f0np8tk0@group.calendar.google.com"
			."/events"
			."?key=AIzaSyDjp19B5eMwKT9VZwAronknu5RbPGVGhhY"
			."&maxResults=3"
			."&timeMin=".$timeMin);
		$val = json_decode($json, true);
		return $val['items'];

	}

	/**
		When the Google calendar API returns events, 
		it has a 'start' value that contains a key-value
		pair of either 'date' or 'dateTime',
		depending on whether or not the event is an all-day event.

		@param A json object of the format
		'start': {'date':blablabla} or
		'start':{'dateTime':blablabla}.
		@return A date-time string.
	*/
	static function getStartDate($dateArray)
	{
		$num = array_values($dateArray);
		$dt = new DateTime($num[0]);
		return date_format($dt, "Y/m/d");
	}

}

?>
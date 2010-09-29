<?php

function twitter_feed($username, $num = 5) {
	
	$rssUrl = "http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=".$username."&count=".$num;
	$rss = @file_get_contents($rssUrl);
	
	if($rss) {
		$xml = @simplexml_load_string($rss);
		if($xml !== false) {
			foreach($xml->channel->item as $tweet) {
				echo '<p>'.str_replace($username . ': ', '', $tweet->description) . "<br/>";
				echo  "</p>";
			}
		}	
	}
}
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

function portraiture_feed($num = 5) {

	$rssUrl = "http://portraiture.neerajkumar.name/demo/?cat=3&feed=rss2";
	$rss = @file_get_contents($rssUrl);
	if($rss) {
		$xml = @simplexml_load_string($rss);
		if($xml !== false) {
                    $ctr = 0;
			foreach($xml->channel->item as $post) {
                            if($ctr++ > 4) break;
                                echo "<h4><a href='".$post->link."'>".$post->title."</a></h4>";
				echo '<p>'.$post->description . "<br/>";
				echo  "</p>";
			}
		}
	}
}
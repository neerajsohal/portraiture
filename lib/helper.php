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

function flickr_stream($username, $api_key) {
	require_once("phpflickr/phpFlickr.php");
	$phpFlickrObj = new phpFlickr($api_key);
	/* $phpFlickrObj->enableCache("fs", "../scripts/cache"); */
	$user = $phpFlickrObj->people_findByUsername($username);
	$user_url = $phpFlickrObj->urls_getUserPhotos($user['id']);
	$photos = $phpFlickrObj->people_getPublicPhotos($user['id'], NULL, NULL, 9);
	
	foreach ($photos['photos']['photo'] as $photo)
	{
	  echo '<a href="'.$user_url.$photo['id'].'" title="'.$photo['title'].' (on Flickr)" target="_blank">';
	  echo '<img style="width: 64px; height: 64px; margin: 1px; padding: 2px; border: 3px solid #ddd; background: #fff;" class="wp-image" alt="'.$photo['title'].'" src="'.$phpFlickrObj->buildPhotoURL($photo, "square").'" />';
	  echo '</a>';
	}
}

function portraiture_feed($num = 5) {
	$rssUrl = "http://feeds.feedburner.com/wp-portraiture";
	$rss = @file_get_contents($rssUrl);
	if($rss) {
		$xml = @simplexml_load_string($rss);
		if($xml !== false) {
            $ctr = 0;
			echo "<div class='rss-widget'>";
			echo "<ul>";                
			foreach($xml->channel->item as $post) {
                if($ctr++ > 4) break;
                
                echo '<li>';
				echo '<a class="rsswidget" href="'.$post->link.'">'.$post->title.'</a> ';
                echo '<span class="rss-date">'. date('M d, Y',strtotime($post->pubDate)).'</span>';
                echo '<div class="rssSumarry">'.$post->description.'</div>';
                echo '</li>';
			}
			echo "</ul></div>";
		}
	}
}

function portraiture_check_for_updates() {
	echo "yahoo";
}

function fallback_wp_page_menu() {
	echo '<ul class="menu">';
	wp_list_pages(array('depth' => '1', 'title_li' => null));
	echo '</ul>';
}
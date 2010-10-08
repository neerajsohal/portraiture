<?php

require_once("phpFlickr.php");
$phpFlickrObj = new phpFlickr('665302ccbe82f5ae7aa2328d7ce4f886');
$user = $phpFlickrObj->people_findByUsername('codemastersnake');
$user_url = $phpFlickrObj->urls_getUserPhotos($user['id']);
$photos = $phpFlickrObj->people_getPublicPhotos($user['id'], NULL, NULL, 4);

foreach ($photos['photos']['photo'] as $photo)
{
  echo '<a href="'.$user_url.$photo['id'].'" title="'.$photo['title'].' (on Flickr)" target="_blank">';
  echo '<img style="border:1px solid" alt="'.$photo['title'].'" src="'.$phpFlickrObj->buildPhotoURL($photo, "square").'" />';
  echo '</a>';
}

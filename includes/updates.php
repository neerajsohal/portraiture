<?php

function portraiture_updates() {
	global $portraiture;
?>
<div class="wrap">
    <h2>Portraiture Theme Updates</h2>
    
<?php
	$update_info = json_decode(@file_get_contents("http://localhost/portraiture_version.json"));
	
	if(version_compare($update_info->version, $portraiture['version']) >= 1) {
?>
	<h3>New Version of Portraiture is Available.</h3>
	<a href="<?php echo $update_info->download_link; ?>" class="button" >Download <?php echo $update_info->version ?></a> released on: <?php echo date('d M Y', $update_info->released); ?>
<?php
	} else {
?>
	<h3>You have the latest version of Portraiture.</h3>
	<p>You already have the latest version of Portraiture installed. You don't need to update. However, You can always show support for Portraiture by spreading the message. Your help is appreciated.</p>
		<table width="100%">
            <tr>
                <td>
                    <a name="fb_share" type="box_count" share_url="http://portraiture.neerajkumar.name" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
                </td>
                <td>
                	<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://portraiture.neerajkumar.name" data-count="vertical" data-via="codemastersnake">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                </td>
                <td>
                    <script type="text/javascript">
                        (function() {
                        var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
                        s.type = 'text/javascript';
                        s.async = true;
                        s.src = 'http://widgets.digg.com/buttons.js';
                        s1.parentNode.insertBefore(s, s1);
                        })();
                        </script>
                    <a class="DiggThisButton DiggMedium"
href="http://digg.com/submit?url=http%3A//portraiture.neerajkumar.name"></a>
                </td>
                <td>
                    <a title="Post to Google Buzz" class="google-buzz-button" href="http://www.google.com/buzz/post" data-button-style="normal-count" data-url="http://portraiture.neerajkumar.name"></a>
<script type="text/javascript" src="http://www.google.com/buzz/api/button.js"></script>
                </td>
                <td>
                    <script src="http://www.stumbleupon.com/hostedbadge.php?s=5&r=http://portraiture.neerajkumar.name"></script>
                </td>
            </tr>

        </table>
<?php
	}
?>
	<h4>Release Information about version <?php echo $update_info->version; ?></h4>
	<?php echo $update_info->release_info; ?>
</div>
<?php
}
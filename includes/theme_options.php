<?php
function portraiture_theme_options() {
?>

    <div class="wrap">
        <h2>Portraiture Theme Options</h2>
    <?php
    if ($_GET['updated'] == 'true') {
        echo '<div class="updated"><p>Settings Updted</p></div>';
    }
    ?>
    <br/>
    <form method="post" action="options.php">
        <?php wp_nonce_field('update-options'); ?>

        <table class="widefat">
            <thead>
                <tr>
                    <th class="manage-column">Option</th><th class="manage-column">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="30%"><label for="portraiture_google_analytics">Google Analytics Code</label></td>
                    <td width="70%">
                        <textarea style="width: 100%; height: 200px;" type="text" name="portraiture_google_analytics" id="portraiture_google_analytics"><?php echo get_option('portraiture_google_analytics'); ?></textarea>
                        <p><small>Enter Google Analytics code here to enable it.</small></p>
                    </td>
                </tr>
                <tr class="alternate">
                    <td width="30%"><label for="portraiture_feed_url">Feed URL</label></td>
                    <td width="70%">
                        <input style="width: 100%" type="text" name="portraiture_feed_url" id="portraiture_feed_url" value="<?php echo get_option('portraiture_feed_url'); ?>" />
                        <p><small>Is your are using service like feedburner for publishing yoru feeds, enter the feed url for your blog. Make sure you enter full url including http://<br/>
eg. http://feeds.feedburner.com/neerajkumar/JOUP</small></p>
                    </td>
                </tr>
                <tr class="">
                    <td width="30%"><label for="portraiture_hyperlink_color">Hyperlink Color</label></td>
                    <td width="70%">
                        <input style="width: 100%" type="text" name="portraiture_hyperlink_color" id="portraiture_hyperlink_color" value="<?php echo get_option('portraiture_hyperlink_color'); ?>" />
                        <p><small>Enter the HEX value of the color you want hyperlinks to be displayed in</small></p>
                    </td>
                </tr>
                <tr class="alternate">
                    <td width="30%"><label for="portraiture_hyperlink_hover_color">Hyperlink Hover Color</label></td>
                    <td width="70%">
                        <input style="width: 100%" type="text" name="portraiture_hyperlink_hover_color" id="portraiture_hyperlink_hover_color" value="<?php echo get_option('portraiture_hyperlink_hover_color'); ?>" />
                        <p><small>Enter the HEX value of the color you want hyperlinks to be displayed in when hovered</small></p>
                    </td>
                </tr>
               <tr class="">
                    <td colspan="2"><p><input type="submit" name="Submit" value="<?php _e('SAVE SETTINGS') ?>" class="button" /></p></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="manage-column">Option</th><th class="manage-column">Value</th>
                </tr>
            </tfoot>
        </table>
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="portraiture_home_url,portraiture_google_analytics,portraiture_flickr_api_key,portraiture_flickr_screenname,portraiture_feed_url,portraiture_hyperlink_color" />
    </form>
    <h3> Share The Love!</h3>
	<p>If you liked what I have done, then please spread the word!</p>
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
</div>
<?php
}
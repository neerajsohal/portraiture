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
                <tr class="alternate">
                    <td width="30%"><label for="portraiture_home_url">Home URL</label></td>
                    <td width="70%">
                        <input style="width: 100%" type="text" name="portraiture_home_url" id="portraiture_home_url" value="<?php echo get_option('portraiture_home_url'); ?>" />
                        <p><small>If you have also have a website besides this blog, then you can enter your website url and it will be displayed in top menu.<br/>
                                eg. http://www.neerajkumar.name/</small></p>
                    </td>
                </tr>
                <tr>
                    <td width="30%"><label for="portraiture_google_analytics">Google Analytics Code</label></td>
                    <td width="70%">
                        <textarea style="width: 100%" type="text" name="portraiture_google_analytics" id="portraiture_google_analytics"><?php echo get_option('portraiture_google_analytics'); ?></textarea>
                        <p><small>Enter Google Analytics code here to enable it.</small></p>
                    </td>
                </tr>
                <tr class="alternate">
                    <td width="30%"><label for="portraiture_feed_url">Feed URL</label></td>
                    <td width="70%">
                        <input style="width: 100%" type="text" name="portraiture_feed_url" id="portraiture_feed_url" value="<?php echo get_option('portraiture_feed_url'); ?>" />
                        <p><small>Enter the feed url for your blog. make sure you enter full url including http://<br/>
eg. http://feeds.feedburner.com/neerajkumar/JOUP</small></p>
                    </td>
                </tr>
                <tr class="">
                    <td width="30%"><label for="portraiture_feedburner_email_url">Feedburner Email URL</label></td>
                    <td width="70%">
                        <input style="width: 100%" type="text" name="portraiture_feedburner_email_url" id="portraiture_feedburner_url" value="<?php echo get_option('portraiture_feedburner_email_url'); ?>" />
                        <p><small>Enter your feedburner's email uri here. This will create a subscription form on your blog</small></p>
                    </td>
                </tr>
                <tr class="alternate">
                    <td width="30%"><label for="portraiture_hyperlink_color">Hyperlink Color</label></td>
                    <td width="70%">
                        <input style="width: 100%" type="text" name="portraiture_hyperlink_color" id="portraiture_hyperlink_color" value="<?php echo get_option('portraiture_hyperlink_color'); ?>" />
                        <p><small>Enter the HEX value of the color you want hyperlinks to be displayed in</small></p>
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
        <input type="hidden" name="page_options" value="portraiture_home_url,portraiture_google_analytics,portraiture_feed_url,portraiture_feedburner_email_url,portraiture_hyperlink_color" />
    </form>
</div>
<?php
}
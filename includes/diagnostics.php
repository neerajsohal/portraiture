<?php

function run_diagnostics() {
?>
<div class="wrap">
    <h2>Canvas Theme Diagnostics</h2>
    <p>If you are facing problems using this theme like images are not showing, vidoe posts options are not appearing; then run this diagnostics tool. It will tell you whether you have corretly installed the theme or not and pinpointing the common errors.</p>
    <br/>
<table class="widefat">
    <thead>
    <tr>
        <th class="manage-column">Property</th><th class="manage-column">Required</th><th class="manage-column">Current</th><th class="manage-column">Result</th>
    </tr>
    </thead>
    <tbody>
    <tr class="alternate">
        <td>Wordpress Version</td><td>3.0.x</td><td><?php bloginfo('version'); ?></td>
        <td>
            <?php if(version_compare(get_bloginfo('version'), '3.0')) {
                echo "<span style='color: #00cc00'>Passed</span>";
            }
            else {
                echo "<span style='color: #cc0000'>Failed</span>";

            }
            ?>
        </td>
    </tr>
    <tr class="">
        <td>canvas_theme_foder/scripts/cache</td><td>Must be writable</td>
        <td>

            <?php
            if(is_writable(dirname(dirname(__FILE__) . '/../scripts/cache'))) {
                echo 'Writable';
            } else {
                echo 'Not Writable';
            }
            ?>
        </td>
        <td>
            <?php
            if(is_writable(dirname(dirname(__FILE__) . '/../scripts/cache'))) {
                echo "<span style='color: #00cc00'>Passed</span>";
            }
            else {
                echo "<span style='color: #cc0000'>Failed</span>";
            }
            ?>
        </td>
    </tr>
    <tr class="alternate">
        <td>Logo</td><td>URL to Logo</td>
        <td>
            <?php
            if(strlen(get_option('canvas_logo')) > 0) {
                echo get_option('canvas_logo');
            } else {
                echo 'Not Set';
            }
            ?>
        </td>
        <td>
            <?php
            if(strlen(get_option('canvas_logo')) > 0) {
                echo "<span style='color: #00cc00'>Passed</span>";
            } else {
                echo "<span style='color: #cc0000'>Failed</span>";
            }
            ?>
        </td>
    </tr>
    <tr class="">
        <td>Default Background</td><td>URL to default image</td>
        <td>
            <?php
            if(strlen(get_option('canvas_default_page_bg')) > 0) {
                echo get_option('canvas_default_page_bg');
            } else {
                echo 'Not Set';
            }
            ?>
        </td>
        <td>
            <?php
            if(strlen(get_option('canvas_default_page_bg')) > 0) {
                echo "<span style='color: #00cc00'>Passed</span>";
            } else {
                echo "<span style='color: #cc0000'>Failed</span>";
            }
            ?>
        </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <th class="manage-column">Property</th><th class="manage-column">Required</th><th class="manage-column">Available</th><th class="manage-column">Result</th>
    </tr>
    </tfoot>

</table>
</div>
<?php
}
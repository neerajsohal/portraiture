<?php

function run_diagnostics() {
?>
<div class="wrap">
    <h2>Portraiture Theme Diagnostics</h2>
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
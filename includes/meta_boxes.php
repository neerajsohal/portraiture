<?php


add_action("admin_init", "admin_bootstrap");

function admin_bootstrap(){
    add_meta_box("video-post-options", "Video Post Options", "canvas_inner_custom_box", "canvas_video_post", "normal", "high");
    add_action('save_post', 'canvas_save_postdata');

    add_meta_box("page-options", "Page Options", "canvas_page_inner_custom_box", "page", "normal", "high");
    add_action('save_post', 'canvas_page_save_postdata');

    add_meta_box("post-options", "Post Options", "canvas_post_inner_custom_box", "post", "normal", "high");
    add_action('save_post', 'canvas_post_save_postdata');
}

/* Prints the inner fields for the custom post/page section */
function canvas_inner_custom_box() {
  // The actual fields for data entry

    global $post;
    $custom = get_post_custom($post->ID);
    $canvas_video = $custom["canvas_video"][0];
?>
<table style="width: 100%">
    <tr>
        <td style="width: 25%"><label>Background:</label></td>
        <td><input name="canvas_video" value="<?php echo $canvas_video; ?>" style="width: 90%" /></td>
    </tr>
    <tr>
        <td colspan="2">
            <p><small>Enter the value from src from embedd tag here.</small></p>
        </td>
    </tr>
</table>

<?php
}


function canvas_save_postdata($post_id) {

  // verify if this is an auto save routine. If it is our form has not been submitted, so we dont want
  // to do anything
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
    return $post_id;


    global $post;
    update_post_meta($post->ID, "canvas_video", $_POST["canvas_video"]);
}


/* Prints the inner fields for the custom post/page section */
function canvas_page_inner_custom_box() {
  // The actual fields for data entry

    global $post;
    $custom = get_post_custom($post->ID);
    $canvas_page_bg = $custom["canvas_page_bg"][0];
?>
<table style="width: 100%">
    <tr>
        <td style="width: 25%"><label>Background Image:</label></td>
        <td><input name="canvas_page_bg" value="<?php echo $canvas_page_bg; ?>" style="width: 90%" /></td>
    </tr>
    <tr>
        <td colspan="2">
            <p><small>Enter the url of the image you want to show in the background for this page. Leave it blank if you don't want to use an image for this page.</small></p>
        </td>
    </tr>
</table>

<?php
}


function canvas_page_save_postdata($post_id) {

  // verify if this is an auto save routine. If it is our form has not been submitted, so we dont want
  // to do anything
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
    return $post_id;


    global $post;
    update_post_meta($post->ID, "canvas_page_bg", $_POST["canvas_page_bg"]);
}

/* Prints the inner fields for the custom post/page section */
function canvas_post_inner_custom_box() {
  // The actual fields for data entry

    global $post;
    $custom = get_post_custom($post->ID);
    $canvas_disable_slider = $custom["canvas_disable_slider"][0];
?>
<table style="width: 100%">
    <tr>
        <td style="width: 25%"><label>Disable Slider: </label></td>
        <td><input name="canvas_disable_slider" <?php if($canvas_disable_slider == "on") { echo 'checked="checked"'; } ?> type="checkbox" /></td>
    </tr>
    <tr>
        <td colspan="2">
            <p><small>Check this box if you don't want to display image slider for this post.</small></p>
        </td>
    </tr>
</table>

<?php
}


function canvas_post_save_postdata($post_id) {

  // verify if this is an auto save routine. If it is our form has not been submitted, so we dont want
  // to do anything
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
    return $post_id;


    global $post;
    update_post_meta($post->ID, "canvas_disable_slider", $_POST["canvas_disable_slider"]);
}


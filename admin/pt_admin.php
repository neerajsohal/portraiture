<?php
class PT_CORE {
	var $name = 'Portraiture';
	var $short_name = 'pt';
	var $version = '0.3';
	var $author = 'Neeraj Kumar';
	var $link = "http://www.neerajkumar.name/blog/topics/portraiture";
	
	function get_linkback() {
		echo "<span class='small'><a href='$this->link'>Powered by $this->name version $this->version</a></span>";
	}
	
	function render_options($options) {
	echo '<form method="post">';	
	foreach ($options as $value) { 
		
		switch ( $value['type'] ) {
		
			case "open":
			?>
			<table width="100%" border="0" style="background-color:#eef5fb; padding:10px;">
			
			
			
			<?php break;
			
			case "close":
			?>
			
			</table><br />
			
			
			<?php break;
			
			case "title":
			?>
			<table width="100%" border="0" style="background-color:#dceefc; padding:5px 10px;"><tr>
				<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
			</tr>
					
			
			<?php break;
	
			case 'text':
			?>
			
			<tr>
				<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
				<td width="80%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
			</tr>
	
			<tr>
				<td><small><?php echo $value['desc']; ?></small></td>
			</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
	
			<?php 
			break;
			
			case 'textarea':
			?>
			
			<tr>
				<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
				<td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripcslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea></td>
				
			</tr>
	
			<tr>
				<td><small><?php echo $value['desc']; ?></small></td>
			</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
	
			<?php 
			break;
			
			case 'select':
			?>
			<tr>
				<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
				<td width="80%"><select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
		   </tr>
					
		   <tr>
				<td><small><?php echo $value['desc']; ?></small></td>
		   </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
	
			<?php
			break;
				
			case "checkbox":
			?>
				<tr>
				<td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
					<td width="80%"><? if(get_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
							<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
							</td>
				</tr>
							
				<tr>
					<td><small><?php echo $value['desc']; ?></small></td>
			   </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
				
			<?php 		break;
		
	 
	} 
	}
	?>
	
	<!--</table>-->
	
	<p class="submit">
	<input name="save" type="submit" value="Save changes" />    
	<input type="hidden" name="action" value="save" />
	</p>
	</form>
	<form method="post">
	<p class="submit">
	<input name="reset" type="submit" value="Reset" />
	<input type="hidden" name="action" value="reset" />
	</p>
	</form>
<?php	
	}
}

$pt = new PT_CORE;

$options = array (

	array(	"name" => "General Settings",
			"type" => "title"),
			
	array(	"type" => "open"),
	
	array(	"name" => "Google Analytics",
			"desc" => "Enter Google Analytics code here to enable it.",
            "id" => $pt->short_name."_google_analytics",
            "type" => "textarea"),
	
	array(  "name" => "Color Scheme",
			"desc" => "Select theme color ",
            "id" => $pt->short_name."_color",
            "type" => "select",
            "options" => array('' => 'default', 'blue' => 'blue', 'brown' => 'brown')),

	array(  "name" => "Feed URL",
			"desc" => "Enter the feed url for your blog. make sure you enter full url including http://<br/>eg. http://feeds.feedburner.com/neerajkumar/JOUP",
            "id" => $pt->short_name."_feed_url",
            "type" => "text"),

	array(  "name" => "Feedburner Email URI",
			"desc" => "Enter your feedburner's email uri here. This will create a subscription form on your blog",
            "id" => $pt->short_name."_feed_email_uri",
            "type" => "text"),

	array(	"type" => "close")
	
);

function mytheme_add_admin() {
	global $pt, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=pt_admin.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=pt_admin.php&reset=true");
            die;

        }
    }

    add_theme_page($pt->name." Options", "".$pt->name." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {
	global $pt, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$pt->name.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$pt->name.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $pt->name . " version " . $pt->version; ?> settings</h2>
<?php
$pt->render_options($options);
?>
<p><small><?php $pt->get_linkback();?> Developed By: <?php echo $pt->author; ?></small></p>
</div>
<?php
}

add_action('admin_menu', 'mytheme_add_admin'); ?>
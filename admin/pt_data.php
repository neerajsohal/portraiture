<?php

$name = "Portraiture";
$version = "0.4";
$prefix = "pt_";


if($_POST['pt_submit'] == 'Save') {
	pt_update_settings();
}
else ;

function get_version() {
	global $version;
	return $version;
}

function pt_get_header() {
	global $options;
?>
<div class="pt_wrap">
<h2>Welcome To Portraiture Admin Panel</h2>
<p><small>Portraiture version: <?php echo get_version(); ?></small></p>
<p><small>This is an administration section of Portraiture. Here you can set all the available options available for portraiture which can be used to customize it's look and working.</small></p>
<?php 
	switch($_GET['status'])
	{
		case 'updated': echo '<div class="updated fade" id="message"><p>Settings Updated</p></div>';
			break;
	}
	echo "<hr />";
}

function pt_get_footer()
{
?>
<hr />
<h3>General Information about Portraiture Theme</h3>
<h4>License: </h4>
<p><small><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/in/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/2.5/in/88x31.png" /></a><br /><span xmlns:dc="http://purl.org/dc/elements/1.1/" property="dc:title">Portraiture</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.neerajkumar.name/blog/topics/portraiture" property="cc:attributionName" rel="cc:attributionURL">Neeraj Kumar</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/in/">Creative Commons Attribution-Noncommercial-Share Alike 2.5 India License</a>.<br />Based on a work at <a xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://www.github.com/codemastersnake/portraiture" rel="dc:source">http://www.github.com/codemastersnake/portraiture</a></small>
</p>

</div>
<?php
}
function pt_gen_form($fields, $options)
{
	global $prefix;
	echo '<form method="post">';
	echo '<table class="'.$options['table_class'].'">';
	echo '<tr><th colspan="3" class="'.$options["table_row_class"]. '"><h3>'.$options['section_name'].'</h3></th></tr>';
	foreach($fields as $field)
	{
		switch($field['type'])
		{
			case 'text' : echo '<tr><td><label for="'.$prefix.$field['name'].'">'.$field['label'].'</label></td>';
				echo '<td><input type="'.$field['type'].'" name="'.$prefix.$field['name'].'" id="'.$prefix . $field['id'].'" value="'.get_option($prefix . $field['id']).'" /></td>';
				echo '<td><em>'.$field['desc'].'</em></td></tr>';
				break;
			case 'select' : echo '<tr><td><label for="'.$prefix.$field['name'].'">'.$field['label'].'</label></td>';
				echo '<td><select name="'.$prefix.$field['name'].'" id="'.$prefix . $field['id'].'" >';
				foreach($field['values'] as $value)	{
					echo '<option value="'.$value.'"';
					if(get_option($prefix.$field['id']) == $value) echo "selected='selected'";
					echo '>'.$value.'</option>';
				}
				echo '</select></td>';
				echo '<td><em>'.$field['desc'].'</em></td></tr>';
				break;
		};
	}
	echo '<tr><td><input type="submit" value="Save" name="'.$prefix.'submit"></td></tr>';
	echo "</table></form>";
}

function pt_update_settings() {
	global $prefix;
	foreach($_POST as $key => $value) { 
			if(!get_option($key))
				add_option($key, $value);
			else update_option($key, $value);
	}
	header('Location: admin.php?page=pt_admin.php&status=updated');
}
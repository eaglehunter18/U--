
<?php
/*
Plugin Name: My First Plugin
Plugin URL: http://www.example.com
Description: A first plugin alternative to "Hello World " example
Author:MMafarjeh
Version:20160215
Author URL: http://www.example.com
*/

//declare Hook "admin_menu" and name of the function related to this Hook
 add_action('admin_menu','myfirstplugin_admin_actions');
//function to add sub menu
 function myfirstplugin_admin_actions(){ 
//title of page, name of sub menu,cabability control of who can view sub Menu,constat to give the full path of plugin directory , the name of function that will dispaly the menu page
 	add_options_page('MyFirstPluginPageTitle','MyFirstPluginSubMenuName','manage_options',__FILE__,'myfirstPlugin_admin');
 }
 //function that will dispaly the menu page
function myfirstplugin_admin(){
?>
<!-- start writin html code and using WP CSS styling classes  -->
<div class="wrap">
<h4> First Plugin Example</h4>
</div>
<table class="widefat">
<thead>
<tr>
<th>Post Title</th>
<th>Post ID</th>
</tr>
</thead>


<tfoot>
<tr>
<th>Post Title</th>
<th>Post ID</th>
</tr>
</tfoot>
<tbody>
<tr>
<th>Mohammad Ahmad</th>
<th>20160215</th>
</tr>

<tr>
<th>Ali Ahmad</th>
<th>20160215</th>
</tr>
<tr>

<th>Harb Ahmad</th>
<th>20160215</th>
</tr>
</tbody>


<?php

}

?>
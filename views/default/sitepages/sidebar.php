<?php
/**
 * Admin welcome message
 **/

$sitepages_object = sitepages_get_sitepage_object('frontsimple');
$sidebartitle = $sitepages_object->sidebartitle;
$sidebarmessage = $sitepages_object->sidebarmessage;
 
if($sidebarmessage){
	echo "<div class='sitepages_sidebar_object clearfloat'><h3>" . $sidebartitle . "</h3>";
	echo $sidebarmessage ."</div>";
}
<?php
/**
 * Admin welcome message
 **/
 
$sitepages_object = sitepages_get_sitepage_object('frontsimple');
$welcometitle = $sitepages_object->welcometitle;
$welcomemessage = $sitepages_object->welcomemessage;

if($welcomemessage){
	echo "<h2>" . $welcometitle . "</h2>";
	echo $welcomemessage;
}
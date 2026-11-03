<?php
$obj = new mysqli('localhost', 'root', '', 'adminpanel');
if($obj->connect_errno !=0){
	echo $obj->connect_error();	
}

?>
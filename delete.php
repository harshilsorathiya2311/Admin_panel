<?php 

include 'connect.php';

$del_id = $_GET['delid'];

$query = $obj->query("delete from demo where id='$del_id'");

if ($query) {
    # code...
    echo  '<script>alert("record deleted...");</script>';
    header("location:index.php");
    }
		else{
    echo '<script>alert("error...");</script>';
    } 

?>
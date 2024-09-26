<?php 
include('../../db_contection.php');

$id =$_GET['id'];


	$deletesilder = "DELETE FROM `at_a_glance` WHERE `id` = '$id'"; 
		$qdeletesilder=$mysqli->query($deletesilder);
		
		if($qdeletesilder){
		             $message = "Delete Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('at_a_glance.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('at_a_glance.php');
        </SCRIPT>";
        }

?>
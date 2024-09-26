<?php 
include('../../db_contection.php');

$id =$_GET['id'];


	$deletesilder = "DELETE FROM `class` WHERE `id` = '$id'"; 
		$qdeletesilder=$mysqli->query($deletesilder);
		
		if($qdeletesilder){
		             $message = "Delete Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('class_list.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('class_list.php');
        </SCRIPT>";
        }

?>
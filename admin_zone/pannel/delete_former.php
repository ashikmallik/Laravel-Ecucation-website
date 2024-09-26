<?php 
include('../../db_contection.php');

$id =$_GET['id'];


	$deletesilder = "DELETE FROM `formar_headmaster` WHERE `id` = '$id'"; 
		$qdeletesilder=$mysqli->query($deletesilder);
		
		if($qdeletesilder){
		             $message = "Delete Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('former_headmaster.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('former_headmaster.php');
        </SCRIPT>";
        }

?>
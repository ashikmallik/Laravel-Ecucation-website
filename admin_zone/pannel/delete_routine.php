<?php 
include('../../db_contection.php');

$id =$_GET['id'];



$getimagepath = "SELECT * FROM `routine` WHERE `id` = '$id'";
$qgetimagepath=$mysqli->query($getimagepath);
$shqgetimagepath=$qgetimagepath->fetch_assoc();

$image_path = "upload/academic/".$shqgetimagepath['image_path'];
echo $image_path;

			
   unlink($image_path);			
			
	$deletesilder = "DELETE FROM `routine` WHERE `id` = '$id'"; 
		$qdeletesilder=$mysqli->query($deletesilder);
		
		if($qdeletesilder){
		             $message = "Delete Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('routine.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('routine.php');
        </SCRIPT>";
        }

?>
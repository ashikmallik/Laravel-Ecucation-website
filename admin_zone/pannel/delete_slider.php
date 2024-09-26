<?php 
include('../../db_contection.php');

$id =$_GET['slider_id'];



$getimagepath = "SELECT * FROM `slider` WHERE `id` = '$id'";
$qgetimagepath=$mysqli->query($getimagepath);
$shqgetimagepath=$qgetimagepath->fetch_assoc();

$image_path = "upload/slider/".$shqgetimagepath['image_pathe'];
echo $image_path;

			
   unlink($image_path);			
			
	$deletesilder = "DELETE FROM `slider` WHERE `id` = '$id'"; 
		$qdeletesilder=$mysqli->query($deletesilder);
		
		if($qdeletesilder){
		             $message = "Delete Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('slider.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('slider.php');
        </SCRIPT>";
        }

?>
<?php 
include('../../db_contection.php');

$id =$_GET['id'];

$getimagepath = "SELECT * FROM `gbmember_info` WHERE `id` = '$id'";
$qgetimagepath=$mysqli->query($getimagepath);
$shqgetimagepath=$qgetimagepath->fetch_assoc();

$image_path = "upload/gbmenber/".$shqgetimagepath['image_pathe'];
echo $image_path;

			
   unlink($image_path);	


	$deletesilder = "DELETE FROM `gbmember_info` WHERE `id` = '$id'"; 
		$qdeletesilder=$mysqli->query($deletesilder);
		
		if($qdeletesilder){
		             $message = "Delete Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('governing_body.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('governing_body.php');
        </SCRIPT>";
        }

?>
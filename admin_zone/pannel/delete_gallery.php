<?php 
include('../../db_contection.php');

$id =$_GET['gallery_id'];



$getimagepath = "SELECT * FROM `gallery` WHERE `id` = '$id'";
$qgetimagepath=$mysqli->query($getimagepath);
$shqgetimagepath=$qgetimagepath->fetch_assoc();

$image_path = "upload/gallery/".$shqgetimagepath['image_pathe'];
echo $image_path;

			
   unlink($image_path);			
			
	$deletesilder = "DELETE FROM `gallery` WHERE `id` = '$id'"; 
		$qdeletesilder=$mysqli->query($deletesilder);
		
		if($qdeletesilder){
		             $message = "Delete Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('gallery.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('gallery.php');
        </SCRIPT>";
        }

?>
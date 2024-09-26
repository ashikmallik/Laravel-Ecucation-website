<?php 
include('../../db_contection.php');

$id =$_GET['notice_id'];



$getimagepath = "SELECT * FROM `notice` WHERE `id` = '$id'";
$qgetimagepath=$mysqli->query($getimagepath);
$shqgetimagepath=$qgetimagepath->fetch_assoc();

$image_path = "upload/notice/".$shqgetimagepath['image_pathe'];
echo $image_path;

			
   unlink($image_path);			
			
	$deletesilder = "DELETE FROM `notice` WHERE `id` = '$id'"; 
		$qdeletesilder=$mysqli->query($deletesilder);
		
		if($qdeletesilder){
		             $message = "Delete Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('notice.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('notice.php');
        </SCRIPT>";
        }

?>
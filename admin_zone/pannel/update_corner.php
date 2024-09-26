<?php 
include('../../db_contection.php');

$type =$_POST['type'];
$description =$_POST['description'];
$addtdate = date("d/m/Y");

			$allowed =  array('png','jpg','JPG','pdf');
			$filename = $_FILES['attachemnet']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$fnme="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/corner/';
			$fnme = $rand."_".basename($_FILES['attachemnet']['name']);		
			$uploadfile = $uploaddir . $fnme;
			move_uploaded_file($_FILES['attachemnet']['tmp_name'], $uploadfile);
			
			if($_FILES['attachemnet']['name']!=""){ $fnme=$fnme; } else { $fnme=""; }
			}
			$id= strip_tags($_POST['id']);
			
			
	$insertintosilder = "UPDATE `corner` SET `corner_type`='$type', `description`='$description', `file_path`='$fnme', `add_by`='add_date', `update_date`='$addtdate' WHERE 'id'='$id'"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "updated Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('corner.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('corner.php');
        </SCRIPT>";
        }

?>
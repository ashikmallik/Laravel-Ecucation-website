<?php 
include('../../db_contection.php');

$type =$_POST['type'];
$title =$_POST['title'];
$addtdate = date("d/m/Y");

			$allowed =  array('png','jpg','JPG','pdf');
			$filename = $_FILES['attachemnet']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$fnme="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/publication/';
			$fnme = $rand."_".basename($_FILES['attachemnet']['name']);		
			$uploadfile = $uploaddir . $fnme;
			move_uploaded_file($_FILES['attachemnet']['tmp_name'], $uploadfile);
			
			if($_FILES['attachemnet']['name']!=""){ $fnme=$fnme; } else { $fnme=""; }
			}
			
			
	$insertintosilder = "INSERT INTO `publication`(`type`, `title`, `file_path`, `add_date`, `update_date`) VALUES ('$type','$title','$fnme','$addtdate','')"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Add Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('publication.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('publication.php');
        </SCRIPT>";
        }

?>
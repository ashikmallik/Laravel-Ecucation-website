<?php 
include('../../db_contection.php');

// $title =$_POST['title'];
$description =$_POST['description'];
$addtdate = date("d/m/Y");

			$allowed =  array('png','jpg','JPG','pdf');
			$filename = $_FILES['attachemnet']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$fnme="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/notice/';
			$fnme = $rand."_".basename($_FILES['attachemnet']['name']);		
			$uploadfile = $uploaddir . $fnme;
			move_uploaded_file($_FILES['attachemnet']['tmp_name'], $uploadfile);
			
			if($_FILES['attachemnet']['name']!=""){ $fnme=$fnme; } else { $fnme=""; }
			}
			
			
	$insertintosilder = "INSERT INTO `notice`(`title`, `description`, `file_pathe`, `add_by`, `add_date`, `update_date`) VALUES ('','$description','$fnme','','$addtdate','')"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Add Successfully";
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
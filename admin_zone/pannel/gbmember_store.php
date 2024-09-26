<?php 
include('../../db_contection.php');

// $title =$_POST['title'];
$serial_no =$_POST['serial_no'];
$name =$_POST['name'];
$designation =$_POST['designation'];
$moblie =$_POST['moblie'];
$addtdate = date("d/m/Y");


			$allowed =  array('png','jpg','JPG');
			$filename = $_FILES['attachemnet']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$fnme="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/gbmenber/';
			$fnme = $rand."_".basename($_FILES['attachemnet']['name']);		
			$uploadfile = $uploaddir . $fnme;
			move_uploaded_file($_FILES['attachemnet']['tmp_name'], $uploadfile);
			
			if($_FILES['attachemnet']['name']!=""){ $fnme=$fnme; } else { $fnme=""; }
			}
			
			
	$insertintosilder = "INSERT INTO `gbmember_info`(`serial_no`, `name`, `designation`, `moblie`, `add_date`, `image_path`) VALUES ('$serial_no','$name','$designation','$moblie','$addtdate','$fnme')"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Add Successfully";
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
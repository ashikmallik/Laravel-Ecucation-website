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

$id= strip_tags($_POST['id']);
 $insertintosilder = "UPDATE `gbmember_info` SET `serial_no`='$serial_no', `name`='$name', `designation`='$designation', `moblie`='$moblie', `add_date`='$addtdate', `image_path`='$fnme' WHERE 'id'='$id'"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "updated Successfully";
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
<?php 
include('../../db_contection.php');

// $title =$_POST['title'];
$session =$_POST['session'];
$class_name =$_POST['class_name'];
$shift =$_POST['shift'];
$section_name =$_POST['section_name'];
$group =$_POST['group'];
$roll =$_POST['roll'];
$studentid =$_POST['studentid'];
$name =$_POST['name'];
$father_name =$_POST['father_name'];
$mother_name =$_POST['mother_name'];
$moblie =$_POST['moblie'];
$religion =$_POST['religion'];
$gender =$_POST['gender'];
$blood_group =$_POST['blood_group'];
$addtdate = date("d/m/Y");




			$allowed =  array('png','jpg','JPG');
			$filename = $_FILES['attachemnet']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$fnme="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/student/';
			$fnme = $rand."_".basename($_FILES['attachemnet']['name']);		
			$uploadfile = $uploaddir . $fnme;
			move_uploaded_file($_FILES['attachemnet']['tmp_name'], $uploadfile);
			
			if($_FILES['attachemnet']['name']!=""){ $fnme=$fnme; } else { $fnme=""; }
			}
			
			$id= strip_tags($_POST['id']);
	$insertintosilder = "UPDATE `student_info` SET `student_id`='$studentid', `name`='$name',`father_name`='$father_name',`mother_name` ='$mother_name', `moblie`='$moblie', `religion`='$religion', `gender`='$gender', `blood_group`='$blood_group', `add_date`='$addtdate', `image_path`='$fnme', `class_name`='$class_name', `shift`='$shift', `section`='$section_name', `session`='$session', `roll`='$roll', `student_group`='$group' WHERE id='$id'"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Updated Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('student_list.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('student_list.php');
        </SCRIPT>";
        }

?>
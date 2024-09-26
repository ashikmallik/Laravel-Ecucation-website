<?php 
include('../../db_contection.php');

// $title =$_POST['title'];
$serial_no =$_POST['serial_no'];
$name =$_POST['name'];
$designation =$_POST['designation'];
$moblie =$_POST['moblie'];
$email_id =$_POST['email_id'];
$religion =$_POST['religion'];
$gender =$_POST['gender'];
$qualification =$_POST['qualification'];
$blood_group =$_POST['blood_group'];
$national_Id =$_POST['national_Id'];
$first_joining_date =$_POST['first_joining_date'];
$joining_date_at_this_school =$_POST['joining_date_at_this_school'];
$addtdate = date("d/m/Y");


			$allowed =  array('png','jpg','JPG');
			$filename = $_FILES['attachemnet']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$fnme="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/staff/';
			$fnme = $rand."_".basename($_FILES['attachemnet']['name']);		
			$uploadfile = $uploaddir . $fnme;
			move_uploaded_file($_FILES['attachemnet']['tmp_name'], $uploadfile);
			
			if($_FILES['attachemnet']['name']!=""){ $fnme=$fnme; } else { $fnme=""; }
			}
			
			
	$insertintosilder = "INSERT INTO `staff_info`(`serial_no`, `name`, `designation`, `moblie`, `religion`, `gender`, `qualification`, `blood_group`, `national_Id`, `email_id`, `first_joining_date`, `joining_date_at_this_school`, `add_date`, `image_path`) VALUES ('$serial_no','$name','$designation','$moblie','$religion','$gender','$qualification','$blood_group','$national_Id','$email_id','$first_joining_date','$joining_date_at_this_school','$addtdate','$fnme')"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Add Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('staff_list.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('staff_list.php');
        </SCRIPT>";
        }

?>
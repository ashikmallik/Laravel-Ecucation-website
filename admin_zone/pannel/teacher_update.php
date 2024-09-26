<?php 
include('../../db_contection.php');

// $title =$_POST['title'];
$serial_no =$_POST['serial_no'];
$gadget_no =$_POST['gadget_no'];
$teacherId =$_POST['teacherId'];
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
$mailingaddress =$_POST['mailingaddress'];
$permanentaddress =$_POST['permanentaddress'];
$addtdate = date("d/m/Y");
$class_name =$_POST['class_name'];
$shift =$_POST['shift'];
$teachershift =$_POST['teachershift'];
$section_name =$_POST['section_name'];
$session =$_POST['session'];
if(!empty($class_name)){
    $isclassteacher = 1;
}
else{
   $isclassteacher = 0; 
}

			$allowed =  array('png','jpg','JPG');
			$filename = $_FILES['attachemnet']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$fnme="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/teacher/';
			$fnme = $rand."_".basename($_FILES['attachemnet']['name']);		
			$uploadfile = $uploaddir . $fnme;
			move_uploaded_file($_FILES['attachemnet']['tmp_name'], $uploadfile);
			
			if($_FILES['attachemnet']['name']!=""){ $fnme=$fnme; } else { $fnme=""; }
			}
			
			
	$insertintosilder = "update `teacher_info` SET `teacher_id`='$teacherId', `serial_no`='$serial_no', `gadget _no`='$gadget_no', `name`='$name',`teacher_shift`='$teachershift', `designation`='$designation', `moblie`='$moblie', `religion`='$religion', `gender`='$gender', `qualification`='$qualification', `blood_group`='$blood_group', `national_Id`='$national_Id', `email_id`='$email_id', `first_joining_date`='$first_joining_date', `joining_date_at_this_school`='$joining_date_at_this_school',`teachers_mailing_address`='$mailingaddress',`teacher_permanent_address`='$permanentaddress', `add_date`='$addtdate', `image_path`='$fnme',`isClassTeacher`='$isclassteacher',`session`='$session',`class_name`='$class_name',`shift`='$shift',`section`='$section_name'"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "updated Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('teacher_list.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('teacher_list.php');
        </SCRIPT>";
        }

?>
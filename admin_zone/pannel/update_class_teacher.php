<?php 
include('../../db_contection.php');


$id =$_GET['id'];
		
		
 $updateinstituteInfo = "UPDATE `teacher_info` SET `isClassTeacher` = '0',`session` = '',`class_name` = '',`shift` = '',`section` = '' WHERE `id` = '$id'"; 
		$qupdateinstituteInfo=$mysqli->query($updateinstituteInfo);
		
		if($qupdateinstituteInfo){
		             $message = "Updated Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('class_teacher_list.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('class_teacher_list.php');
        </SCRIPT>";
        }
		
//echo $hm_msg." ";echo $history." ";			







?>
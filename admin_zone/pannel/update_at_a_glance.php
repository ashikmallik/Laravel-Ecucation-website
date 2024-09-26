<?php 
include('../../db_contection.php');

$title =$_POST['title'];
$description =$_POST['description'];
$addtdate = date("d/m/Y");

$id= strip_tags($_POST['id']);
			
			
	$insertintosilder = "Update `at_a_glance` SET `title` = '$title', `descrption`='$description', `add_date`='$addtdate', `update_date`='', `update_by`='' where id='$id'"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Updated Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('at_a_glance.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('at_a_glance.php');
        </SCRIPT>";
        }

?>
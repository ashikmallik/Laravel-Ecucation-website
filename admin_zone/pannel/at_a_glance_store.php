<?php 
include('../../db_contection.php');

$title =$_POST['title'];
$description =$_POST['description'];
$addtdate = date("d/m/Y");


			
			
	$insertintosilder = "INSERT INTO `at_a_glance`(`title`, `descrption`, `add_date`, `update_date`, `update_by`) VALUES ('$title','$description','$addtdate','','')"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Add Successfully";
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
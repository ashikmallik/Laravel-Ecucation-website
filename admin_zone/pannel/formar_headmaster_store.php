<?php 
include('../../db_contection.php');

$name =$_POST['name'];
$fromdate =$_POST['fromdate'];
$todate =$_POST['todate'];
$addtdate = date("d/m/Y");


			
	$insertintosilder = "INSERT INTO `formar_headmaster`(`name`, `from_date`, `to_date`, `add_date`, `update_date`) 
	VALUES ('$name','$fromdate','$todate','$addtdate','')"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Add Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('former_headmaster.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('former_headmaster.php');
        </SCRIPT>";
        }

?>
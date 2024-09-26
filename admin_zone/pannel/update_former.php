<?php 
include('../../db_contection.php');

$name =$_POST['name'];
$fromdate =$_POST['fromdate'];
$todate =$_POST['todate'];
$addtdate = date("d/m/Y");


			
	$insertintosilder = "update `formar_headmaster` set `name`='$name', `from_date`='$fromdate', `to_date`='$todate', `add_date`='$addtdate'";
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
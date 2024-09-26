<?php 
include('../../db_contection.php');

$type =$_POST['type'];
$postname =$_POST['postname'];
$totalpost =$_POST['totalpost'];
$emptypost =$_POST['emptypost'];
$malepost =$_POST['malepost'];
$femalepost =$_POST['femalepost'];
$addtdate = date("d/m/Y");


			
			
	$insertintosilder = "INSERT INTO `post_table`(`type`, `postname`, `totalpost`, `emptypost`, `malepost`, `femalepost`, `add_date`, `update_date`) VALUES ('$type','$postname','$totalpost','$emptypost','$malepost','$femalepost','$addtdate','')"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Add Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('post_list.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('post_list.php');
        </SCRIPT>";
        }

?>
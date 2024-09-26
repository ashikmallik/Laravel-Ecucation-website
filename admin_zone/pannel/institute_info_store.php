<?php 
include('../../db_contection.php');


$schoolName =$_POST['schoolName'];
$schoolNamebn = $_POST['schoolNameBangla'];
$schoolAddress = $_POST['address'];
$schoolAddressbn = $_POST['addressBangla'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$estd = $_POST['estd'];
$hm_msg = $_POST['hm_msg'];
$history = $_POST['history'];
$PrincipalMassege = $_POST['PrincipalMassege'];




			$allowed =  array('png' ,'jpg','JPG');
			$filename = $_FILES['logo']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$fnme="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/logo/';
			$fnme = $rand."_".basename($_FILES['logo']['name']);		
			$uploadfile = $uploaddir . $fnme;
			move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile);
			
			if($_FILES['logo']['name']!=""){ $fnme=$fnme; } else { $fnme=""; }
			}
			
		if($fnme == ""){
		    $getinstituteinfo = "SELECT * FROM `institutions_details`";
            $qgetinstituteinfo=$mysqli->query($getinstituteinfo);
            $shqgetinstituteinfo=$qgetinstituteinfo->fetch_assoc();
            
            $fnme =  $shqgetinstituteinfo['institutions_logo'];
            
            
		}
		
		
		$allowed =  array('png' ,'jpg','JPG');
			$filename = $_FILES['hImamge']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$himage="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/headMaster/';
			$himage = $rand."_".basename($_FILES['hImamge']['name']);		
			$uploadfile = $uploaddir . $himage;
			move_uploaded_file($_FILES['hImamge']['tmp_name'], $uploadfile);
			
			if($_FILES['hImamge']['name']!=""){ $himage=$himage; } else { $himage=""; }
			}
			
		if($himage == ""){
		    $getinstituteinfo = "SELECT * FROM `institutions_details`";
            $qgetinstituteinfo=$mysqli->query($getinstituteinfo);
            $shqgetinstituteinfo=$qgetinstituteinfo->fetch_assoc();
            
            $himage =  $shqgetinstituteinfo['head_image'];
            
            
		}
		
		$allowed =  array('png' ,'jpg','JPG');
			$filename = $_FILES['PrincipalImage']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!in_array($ext,$allowed) ) {
			$pimage="";
			} else {
			
			$rand = time();
			$uploaddir = 'upload/Principal/';
			$pimage = $rand."_".basename($_FILES['PrincipalImage']['name']);		
			$uploadfile = $uploaddir . $pimage;
			move_uploaded_file($_FILES['PrincipalImage']['tmp_name'], $uploadfile);
			
			if($_FILES['PrincipalImage']['name']!=""){ $pimage=$pimage; } else { $pimage=""; }
			}
			
		if($pimage == ""){
		    $getinstituteinfo = "SELECT * FROM `institutions_details`";
            $qgetinstituteinfo=$mysqli->query($getinstituteinfo);
            $shqgetinstituteinfo=$qgetinstituteinfo->fetch_assoc();
            
            $pimage =  $shqgetinstituteinfo['PrincipalImage'];
            
            
		}
		
		
 $updateinstituteInfo = "UPDATE `institutions_details` SET `institutions_name_bangla`='$schoolNamebn',`institutions_address`='$schoolAddress',`institutions_address_bangla`='$schoolAddressbn',`institutions_contact`='$contact',`institutions_email`='$email',`institutions_estd`='$estd',`institutions_haed_massege`='$hm_msg',`institutions_history`='$history',`institutions_logo`='$fnme',`head_image`='$himage',`PrincipalMassege`='$PrincipalMassege',`PrincipalImage`='$pimage'"; 
		$qupdateinstituteInfo=$mysqli->query($updateinstituteInfo);
		
		if($qupdateinstituteInfo){
		             $message = "Updated Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('institute_info.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('institute_info.php');
        </SCRIPT>";
        }
		
//echo $hm_msg." ";echo $history." ";			







?>
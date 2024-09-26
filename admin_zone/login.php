<?php

ob_start();

include('../db_contection.php');



session_start();

	$loginId=$_POST['loginId'];
	$pass1=$_POST['loginPass'];
	
	echo $loginId." "; echo $pass1." ";
	
	$pass=md5($pass1);

 echo $query="SELECT * FROM `user` WHERE `user_name`='".trim($loginId)."' AND `password`='".trim($pass)."'";

								
									$rsquery =$mysqli->query($query);								

									$result=$rsquery->fetch_assoc();

									

									$userid=$result["user_name"];

									$password=$result["password"];


									if($userid=="" && $password=="")

										{	

											

											header("location:index.php?msg=2");		

										}

										else 

										{																	

									
											$_SESSION['user']=$userid;
											//$_SESSION['schId']=$schId;
																				
					
											header("Location:pannel/dashBoard.php");
										

										}



?>
<?php 
include('../../db_contection.php');


$class_name =$_POST['class_name'];
$shift =$_POST['shift'];
$section_name =$_POST['section_name'];
$addate = date("d/m/Y");


if($class_name == 'Baby'){
 $class_id = "13";
 $sl = '1';
}
else if($class_name == 'Play'){
   $class_id = "14"; 
   $sl = '2';
}
else if($class_name == 'KG'){
  $class_id = "15"; 
  $sl = '3';
}
else if($class_name == 'Nursery'){
    $class_id = "16";
    $sl = '4';
}
else if($class_name == 'One'){
  $class_id = "1";  
  $sl = '5';
}
else if($class_name == 'Two'){
 $class_id = "2";  
 $sl = '6';
}
else if($class_name == 'Three'){
   $class_id = "3"; 
   $sl = '7';
}
else if($class_name == 'Four'){
   $class_id = "4"; 
   $sl = '8';
}
else if($class_name == 'Five'){
   $class_id = "5"; 
   $sl = '9';
}
else if($class_name == 'Six'){
   $class_id = "6"; 
   $sl = '10';
}
else if($class_name == 'Seven'){
   $class_id = "7"; 
   $sl = '11';
}
else if($class_name == 'Eight'){
   $class_id = "8"; 
   $sl = '12';
}
else if($class_name == 'Nine'){
  $class_id = "9"; 
  $sl = '13';
}
else if($class_name == 'Ten'){
   $class_id = "10"; 
   $sl = '14';
}
else if($class_name == 'Eleven'){
  $class_id = "11";  
  $sl = '15';
}
else if($class_name == 'Twelve'){
   $class_id = "12"; 
   $sl = '16';
}

$addtdate = date("d/m/Y");
			
			
	$insertintosilder = "INSERT INTO `section`(`class_name`, `shift`, `section_name`,`add_date`) VALUES ('$class_name','$shift','$section_name','$addate')"; 
		$qinsertintosilder=$mysqli->query($insertintosilder);
		
		if($qinsertintosilder){
		             $message = "Add Successfully";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('section_list.php');
        </SCRIPT>";
        }
        else{
             $message = "Failed";
		echo "<SCRIPT> 
        alert('$message')
        window.location.replace('section_list.php');
        </SCRIPT>";
        }

?>
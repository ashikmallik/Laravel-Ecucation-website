<?php
error_reporting(0);
//ob_start();
include('db_contection.php');


$getinstituteinfo = "SELECT * FROM `institutions_details`";
$qgetinstituteinfo=$mysqli->query($getinstituteinfo);
$shqgetinstituteinfo=$qgetinstituteinfo->fetch_assoc();





?>
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv='cache-control' content='no-cache'> 
<meta http-equiv='expires' content='0'> 
<meta http-equiv='pragma' content='no-cache'> 



    <title> <?php echo $shqgetinstituteinfo['institutions_name_bangla'];?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/AdminLTE.min.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/all_css_plugin.css">

    <link href="../fonts.maateen.me/kalpurush/font.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/main-menu.css"/>
    <link rel="stylesheet" href="assets/css/menu-edit-v.css"/>
    <link rel="stylesheet" href="assets/css/style-main.css"/>

    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="admin_zone/pannel/upload/logo/<?php echo $shqgetinstituteinfo['institutions_logo'];?>">
</head>
<body>
<script>
	function callpage()
	{
	 document.frmcontent.action="student_info.php";
	 document.frmcontent.submit();
	}
	
</script>
<div class="container our_main_body">
	
            <?php
               		require_once('header.php');
			   ?> 

    <!--========= Notice End  ==========-->
			
	<!--========= MAin Menu End  ==========-->


	<div class="body_part">
	    <div class="col-md-12">
	    	<div class="right_side" style="width: 1091px;">

<!--========= Single Box End  ==========-->
<h2> শিক্ষার্থীদের তথ্য  </h2>
<hr>
<form name="frmcontent" method="post" enctype="multipart/form-data">
    <center>
            <table width="50%" border="1" cellspacing="0" cellpadding="0" class="projectlist" align="center">
              <tr>
                <td width="129"><strong>Session</strong></td>
                <td width="23" align="center"><strong>:</strong></td>
                <td width="348" style="width: 50%;">
  <?php $curyear= date("Y"); 
  $descuryear=$curyear-1;
  $inccuryear=$curyear+1;
  ?>   
                    <label for="session"></label>
                  
<select name="session" id="session" onChange="callpage();" style="width: 50%;">
                  <option value="">--Select--</option>
<option value="<?php echo $curyear; ?>" <?php if($curyear==$_REQUEST['session']) { echo "selected"; }  ?>> <?php echo $curyear; ?> </option>
<option value="<?php echo $descuryear; ?>" <?php if($descuryear==$_REQUEST['session']) { echo "selected"; }  ?>> <?php echo $descuryear; ?> </option>
<option value="<?php echo $inccuryear; ?>" <?php if($inccuryear==$_REQUEST['session']) { echo "selected"; }  ?>> <?php echo $inccuryear; ?> </option>
                                  
                                  
                                         
                  </select>
                  </td>
              </tr>
              <tr>
                <td><strong>Class</strong></td>
                <td align="center"><strong>:</strong></td>
                <td>
                  <select name="studClass" id="studClass" onChange="callpage();" style="width: 50%;">
                  <option value="">--Select--</option>
                         <?php 
        
        $getsession = trim($_REQUEST['session']);                 
                         
        $gtclass="SELECT * FROM `class` ORDER BY `serial_no` ASC";
		$sl=0;
		$qgtclass=$mysqli->query($gtclass);
		while($shqgtclass=$qgtclass->fetch_assoc()){
		
		$sl++;
                         ?> 
                               <option value="<?php echo $shqgtclass['class_name']; ?>"<?php if($shqgtclass['class_name']==trim($_REQUEST['studClass'])) { echo "selected"; }  ?>><?php echo $shqgtclass['class_name']; ?></option>
                                <?php } ?>
                                        </select>	</td>
              </tr>
              <tr>
                <td><strong>Shift</strong></td>
                <td align="center"><strong>:</strong></td>
                <td><select name="shiftId" id="shiftId" onChange="callpage();" style="width: 50%;">
                <option value="">--Select--</option>
                            <option value="Morning"<?php if("Morning"==trim($_REQUEST['shiftId'])) { echo "selected"; }  ?>>Morning</option>
                            <option value="Day" <?php if("Day"==trim($_REQUEST['shiftId'])) { echo "selected"; }  ?>>Day</option>
                            <option value="N/A"<?php if("N/A"==trim($_REQUEST['shiftId'])) { echo "selected"; }  ?>>N/A</option>
                                  </select></td>
              </tr>
              <tr>
                <td><strong>Section</strong></td>
                <td align="center"><strong>:</strong></td>
                <td><select name="section" id="section" onChange="callpage();" style="width: 50%;">
                <option value="">--Select--</option>
                                             <?php 
        
        $getclassName = trim($_REQUEST['studClass']);  
        $getshift = trim($_REQUEST['shiftId']);
                         
        $gtsection="SELECT * FROM `student_info` WHERE  `session` = '$getsession' AND `class_name` = '$getclassName' AND `shift` = '$getshift' GROUP BY `section`";
		$sl=0;
		$qgtsection=$mysqli->query($gtsection);
		while($shqgtsection=$qgtsection->fetch_assoc()){
		
		$sl++;
                         ?>      
                               <option value="<?php echo $shqgtsection['section']; ?>" <?php if($shqgtsection['section']==trim($_REQUEST['section_name'])) { echo "selected"; }  ?>><?php echo $shqgtsection['section']; ?></option>
<?php 
}
?>
                                  </select></td>
              </tr>

              
            </table>
            
            </form>
            
                   <br><br>
                   
 <table align="center" border="1" cellpadding="0" cellspacing="0" class="projectlist">
                   <tr>
    <td width="40" style="text-align:center;">Roll </td>
    <td width="250"> Student Name</td>
    <td width="250"> Father's Name</td>
    <td width="250"> Mother's Name</td>
  
     </tr>
  
  <?php
  	


  
    $class= trim($_REQUEST['studClass']); 
 	$stsess=$_REQUEST['session'];
	$section=$_REQUEST['section'];
    $shift= trim($_REQUEST['shiftId']);
    
	if($stsess!=""){
	
 $gtstudent="SELECT * FROM `student_info` WHERE `session` = '$stsess' AND `section` = '$section' AND `class_name` = '$class' AND `shift` = '$shift' ORDER BY `roll` ASC";
	
	$qgtstudent=$mysqli->query($gtstudent);
	$sl=0;
	while($shgtstudent=$qgtstudent->fetch_assoc()){ $sl++;
	
	
	
  
  ?>
  
 
							 
							 
							
							
  
  <tr>
    <td style="text-align:center;"><?php echo $shgtstudent['roll']; ?></td>
    <td><?php echo stripslashes($shgtstudent['name']); ?></td>
    <td><?php echo stripslashes($shgtstudent['father_name']); ?></td>
    <td><?php echo stripslashes($shgtstudent['mother_name']); ?></td>

      
    
  </tr>
  
  
  <?php
  
	} }
  
  ?>
                   </table>            

</center>

		    </div>
	    </div>

    </div>

    <div class="footer_top">
    	

<!--========= Footer Top End  ==========-->

            <?php
               		require_once('footer.php');
			   ?> 
<!--========= Main Footer  End  ==========-->

    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!--========= Scroll Top End  ==========-->

</div>

<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/adminlte.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-plugin-collection.js"></script>
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="assets/js/gallery.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
</body>


</html>
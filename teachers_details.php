<?php
error_reporting(0);
//ob_start();
include('db_contection.php');


$getinstituteinfo = "SELECT * FROM `institutions_details`";
$qgetinstituteinfo=$mysqli->query($getinstituteinfo);
$shqgetinstituteinfo=$qgetinstituteinfo->fetch_assoc();

$id =$_GET['Id']


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

<div class="container our_main_body">
	
            <?php
               		require_once('header.php');
               		
               
               
               
         $getheadmasterinfo="SELECT * FROM `teacher_info` WHERE `id`= '$id'";
         $qgetheadmasterinfo=$mysqli->query($getheadmasterinfo);
         $shqgetheadmasterinfo=$qgetheadmasterinfo->fetch_assoc();
               		
			   ?> 

    <!--========= Notice End  ==========-->
			
	<!--========= MAin Menu End  ==========-->


	<div class="body_part">
	    <div class="col-md-12">
	    	<div class="right_side" style="width: 1091px;">

<!--========= Single Box End  ==========-->
	    			<div class="common_page_title">
	    				<h1>Teachers Information</h1>
	    			</div>
	    			<div class="common_page_table">

		<table width="750" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
			<!--<tr>
    		<th colspan="5"></th>
			<th><a href="#" onClick="window.print();">Print</a></th>
			</tr>-->
            
            <tr>
            <td><strong> Teacher's ID </strong></td>
            <td align="center"><strong>:</strong></td>
            <td width="115"><?php echo $shqgetheadmasterinfo['teacher_id']; ?></td>
            <td width="115"><strong>Gadget No</strong></td>
            <td width="120"><?php echo $shqgetheadmasterinfo['gadget _no']; ?></td>
            <td width="150" rowspan="6" align="center" valign="top"><img src="admin_zone/pannel/upload/teacher/<?php echo $shqgetheadmasterinfo['image_path'];?>" height="200" width="170"/></td>
			</tr>
            
            <tr>
              <td width="270"><strong>Teacher's Name</strong></td>
              <td width="40" align="center"><strong>:</strong></td>
              <td colspan="3"><?php echo $shqgetheadmasterinfo['name']; ?></td>
          	</tr>            
            <tr>
              <td><strong>Religion</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_religion']; ?></td>
            </tr>
            <tr>
              <td><strong>Gender</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_gender']; ?></td>
            </tr>
            <tr>
              <td><strong>Blood Group</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_blood_group']; ?></td>
            </tr>
            <tr>
              <td><strong>Marital Status</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_marital_status']; ?></td>
            </tr>
            <tr>
              <td><strong>Qualification</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_qualification']; ?></td>
            </tr>
            <tr>
              <td><strong>Designation</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_designation']; ?></td>
            </tr>
            <tr>
              <td><strong>Teching Subject</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_subject']; ?></td>
            </tr>
            <tr>
              <td><strong>Phone Number</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teacher_phone']; ?></td>
            </tr>
            <tr>
              <td><strong>National Id</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_national_id']; ?></td>
            </tr>
            <tr>
              <td><strong>E-mail ID</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_email_id']; ?></td>
            </tr>
            <tr>
              <td><strong>First Joining Date</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_first_join']; ?></td>
            </tr>
            <tr>
              <td><strong>Mailing Address (Present)</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teachers_mailing_address']; ?></td>
            </tr>
            <tr>
              <td><strong>Permanent Address</strong></td>
              <td align="center"><strong>:</strong></td>
              <td colspan="4"><?php echo $shqgetheadmasterinfo['borno_teacher_permanent_address']; ?></td>
            </tr>


        </table>
	    			</div>


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
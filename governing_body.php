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
	    			<div class="common_page_title">
	    				<h1>ব্যাবস্থাপনা কমিটি </h1>
	    			</div>
	    			<div class="common_page_body1">
	    				<p>


<table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
          <tr height="30">
             <td width="100" align="center">SL</td>
            <td width="300" align="center">Name</td>
            <td width="200" align="center">Designation</td>
            <td width="200" align="center">Mobile</td>
            <td width="100" align="center">Photo</td>
          </tr>
   <?php 
                  
               
         $getheadmasterinfo="SELECT * FROM `gbmember_info` ORDER BY `serial_no`";
         $qgetheadmasterinfo=$mysqli->query($getheadmasterinfo);
         $s=0;
         while($shqgetheadmasterinfo=$qgetheadmasterinfo->fetch_assoc()){ $s++;
   
   ?>
                    <tr>
                  <td align="center"><?php echo $s; ?></td>      
            <td><?php echo $shqgetheadmasterinfo['name']; ?></a>
            <td><?php echo $shqgetheadmasterinfo['designation']; ?></a>
            <td><?php echo $shqgetheadmasterinfo['moblie']; ?></a>
            </td>
            <td align="center"><img src="admin_zone/pannel/upload/gbmenber/<?php echo $shqgetheadmasterinfo['file_path'];?>" width="60" height="60" /></a></td>
          </tr>
          <?php }?>
                  </table>

	    				</p>
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
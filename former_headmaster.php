<?php
error_reporting(0);
//ob_start();
include('db_contection.php');


$getinstituteinfo = "SELECT * FROM `institutions_details`";
$qgetinstituteinfo=$mysqli->query($getinstituteinfo);
$shqgetinstituteinfo=$qgetinstituteinfo->fetch_assoc();

$getglance = "SELECT * FROM `permission_and_nationalization` WHERE  `type` = '1'";
$qgetglance=$mysqli->query($getglance);
$shqgetglance=$qgetglance->fetch_assoc();


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
	    				<h1> প্রাক্তন প্রধান শিক্ষকগণ </h1>
	    			</div>
	    			<div class="common_page_body1">
	    				<p>


<table width="100%" border="1" cellspacing="0" cellpadding="0" bgcolor="#609513">
          <tr height="30">
              <td width="50" align="center">Sl</td>
            <td width="450" align="center">TEACHERS NAME</td>
            <td width="100" align="left">From</td>
            <td width="100" align="center">To</td>
          </tr>
   
                    <tr>
        <?php 
        
        $getformer = "SELECT * FROM `formar_headmaster`";
        $qgetformer=$mysqli->query($getformer);
        $sl=0;
        while($shqgetformer=$qgetformer->fetch_assoc()){ $sl++;
        
        
        ?>                
            <td align="center"><?php echo $sl; ?></td>
            <td><?php echo $shqgetformer['name']; ?></td>
            <td><?php echo $shqgetformer['from_date']; ?></td>
            <td><?php echo $shqgetformer['to_date']; ?></td>
            
          </tr>
          <?php } ?>
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
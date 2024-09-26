<?php
error_reporting(0);
//ob_start();
include('../../db_contection.php');
$getinstituteinfo = "SELECT * FROM `institutions_details`";
$qgetinstituteinfo=$mysqli->query($getinstituteinfo);
$shqgetinstituteinfo=$qgetinstituteinfo->fetch_assoc();
?>

<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Zone</title>

     <!-- Favicon -->
     <link rel="shortcut icon" href="../assets/images/logo.jpg">

    <!-- page css -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/media.css">

</head>

<body>
    
    <?php
                                
  		
                       $id= strip_tags($_GET['id']);         
  		$gtfeeshead="SELECT * FROM `gbmember_info` where id='$id'";
		$qgtfeeshead=$mysqli->query($gtfeeshead);
		$shgtfeeshead=$qgtfeeshead->fetch_assoc();
		
	
  
  ?>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <section id="mainnav">
            <?php
               		require_once('header.php');
			   ?> 

            </section> 
            <!---Header End-->

            <!-- Side Nav START -->
            <div class="side-nav" style ="background: #f1f6f7;">
            <?php
               		require_once('leftmenu.php');
			   ?>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                <?php
               	//	require_once('topmenu.php');
			   ?>
                    <!----------------Content Start----------------->
 <div class="row">
                        <div class="col-lg-12">
                            <div class="fessPayment">
                                <div class="requestTable">
                                   <div class="requestTableHead">
                                    <h3>Infrastructure List</h3>
                                   </div>
                                    <div class="addstuinfBtn requestTablBtn text-right">
                                        <div class="reqheadNumber">
                                            
                                        </div>
                                         
                                    </div>
                                </div>
                                <!--<div class="RequestSearch">-->
                                  
                                <!--        <div class="reqSeach">-->
                                <!--            <input type="text" class="form-control" placeholder="Search Request">-->
                                <!--        </div>-->
                                <!--        <div class="reqSeach datereq">-->
                                <!--            <input type="text" class="form-control" placeholder="Search Date">-->
                                <!--        </div>-->
                                <!--        <div class="reqSeach statusReq">-->
                                <!--            <input type="text" class="form-control" placeholder="Search Status">-->
                                <!--        </div>-->
                                   
                                <!--</div>-->
                             
                           
                                   <!---Request Modal---->
                                   <!-- The Modal -->
	<div class="" >
	  	<div class="">
		    <div class="">

		      	<!-- Modal Header -->
		  

		      	<!-- Modal body -->
		      	<div class="">
<form action="gbmember_update.php" method="post" enctype="multipart/form-data" id="add-form">
                
                    <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Serial No</label>
                       <div class="col-sm-8">
                           <input type="hidden" name="id" value="<?php echo $shgtfeeshead['id']; ?>">
                      <input type="text" id="serial_no" name="serial_no" placeholder="Serial No" class="form-control"  size="27" value="<?php echo $shgtfeeshead['serial_no']; ?>">
                       </div>
                      </div> 
                        
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Name</label>
                       <div class="col-sm-8">
                      <input type="text" id="name" name="name" placeholder="Name" class="form-control"  size="27" value="<?php echo $shgtfeeshead['name']; ?>">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Designation</label>
                       <div class="col-sm-8">
                    <select name="designation" id="designation" class="form-control" >
                         <option value="Chairman"> Chairman</option>
                         <option value="General Teacher Member(Higher Secondary Level)"> General Teaching Member(Higher Secondary Level) </option>
                         <option value="General Teacher Member(Secondary Level)"> General Teaching Member(Secondary Level) </option>
                         <option value="General Teacher Member(Primary Level)"> General Teaching Member(Primary Level) </option>
                         <option value="Reserved Women Teaching Member  "> Reserved Women Teaching Member   </option>

                         <option value="General Guardian Member(Higher Secondary Level)"> General Guardian Member(Higher Secondary Level) </option>
                         <option value="General Guardian Member(Secondary Level)"> General Guardian Member(Secondary Level) </option>
                         <option value="General Guardian Member(Primary Level)"> General Guardian Member(Primary Level) </option>
                         <option value="Reserved Women Guardian Member"> Reserved Women Guardian Member</option>
                        <option value="Member Secretary"> Member Secretary</option>

                        </select>
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Mobile</label>
                       <div class="col-sm-8">
                      <input type="text" id="moblie" name="moblie" placeholder="Mobile" class="form-control"  size="27" value="<?php echo $shgtfeeshead['moblie']; ?>">
                       </div>
                       
                       </div>


        <div class="form-group row">
         <label  class="col-sm-3 col-form-label">Image</label>
          <div class="col-sm-8">
            <input type="file" id="attachemnet" name="attachemnet">
          </div>
        </div>               
		 <button type="submit" class="btn btn-primary float-right" name="add">update</button>
					</form>



		      	</div>

		    </div>
	  	</div>
	</div>
                                   
                                  
                                  <!---Reques Modal---->
                                  
                                  
                            </div>
                        </div>
                    </div>
                    <!----------------Content Start---------------->
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
<div class="footer-content">
                        <p class="m-b-0">Copyright ©2020 <?php  echo $shqgetinstituteinfo['institutions_name']; ?>. All rights reserved.</p>
                    </div>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            
            <!-- Search End-->

            <!-- Quick View START -->
            
            <!-- Quick View END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>


</body>



</html>
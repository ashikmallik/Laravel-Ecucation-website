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
                                
             $id=$_GET['id'];                       

	  
  		$gtfeeshead="SELECT * FROM `student_info` where id='$id'";
		$sl=0;
		$qgtfeeshead=$mysqli->query($gtfeeshead);
		$shgtfeesheads=$qgtfeeshead->fetch_assoc();
	
  
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
                                    <h3></h3>
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
                                <div class="table-responsive newRequestTable headerFixTable">
                                    <form action="student_update.php" method="post" enctype="multipart/form-data" id="add-form">
  <?php $curyear= date("Y"); 
  $descuryear=$curyear-1;
  $inccuryear=$curyear+1;
  ?>      	    
		        	   <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Session</label>
                       <div class="col-sm-8">
                      
<select class="form-control" id="session" name="session"  >
                        <option selected="" value=""><?php echo $shgtfeesheads['session']; ?></option>
<option value="<?php echo $descuryear; ?>"> <?php echo $descuryear; ?> </option>
       <option value="<?php echo $curyear; ?>"> <?php echo $curyear; ?> </option>
       <option value="<?php echo $inccuryear; ?>"> <?php echo $inccuryear; ?> </option>

                            </select>
                                              </div>
                                            </div> 
		        	    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Class</label>
                       <div class="col-sm-8">
                           <select class="form-control" id="class_name" name="class_name"  >
                               <option selected="" value=""><?php echo $shgtfeesheads['class_name']; ?></option>
                         <?php 
        $gtfeeshead="SELECT * FROM `class` ORDER BY `serial_no` ASC";
		$sl=0;
		$qgtfeeshead=$mysqli->query($gtfeeshead);
		while($shgtfeeshead=$qgtfeeshead->fetch_assoc()){
		
		$sl++;
                         ?>      
                               <option value="<?php echo $shgtfeeshead['class_name']; ?>"><?php echo $shgtfeeshead['class_name']; ?></option>
<?php 
}
?>
                            </select>
                       </div>
                       
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Shift</label>
                       <div class="col-sm-8">
                      
<select class="form-control" id="shift" name="shift"  >
                            <option selected="" value=""><?php echo $shgtfeesheads['shift']; ?></option>
                            <option value="Morning">Morning</option>
                            <option value="Day">Day</option>
                            <option value="N/A">N/A</option>

                            </select>
                                              </div>
                                            </div> 
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Section</label>
                       <div class="col-sm-8">
                           <select class="form-control" id="section_name" name="section_name"  >
                               <option selected="" value=""><?php echo $shgtfeesheads['section']; ?></option>
                         <?php 
        $gtfeeshead="SELECT * FROM `section`";
		$sl=0;
		$qgtfeeshead=$mysqli->query($gtfeeshead);
		while($shgtfeeshead=$qgtfeeshead->fetch_assoc()){
		
		$sl++;
                         ?>      
                               <option value="<?php echo $shgtfeeshead['section_name']; ?>"><?php echo $shgtfeeshead['section_name']; ?></option>
<?php 
}
?>
                            </select>
                       </div>
                       </div> 
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Group</label>
                       <div class="col-sm-8">
                      
                 <select class="form-control" id="group" name="group"  >
                        <option selected="" value=""><?php echo $shgtfeesheads['student_group']; ?></option>
                            <option value="Science">Science</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Humanities">Humanities</option>
                            

                            </select>
                                              </div>
                                            </div> 
                        <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Roll</label>
                       <div class="col-sm-8">
                      <input type="text" id="roll" value="<?php echo $shgtfeesheads['roll']; ?>" name="roll" placeholder="Roll" class="form-control"  size="27">
                       </div>
                       </div>                    
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Student ID</label>
                       <div class="col-sm-8">
                      <input type="text" id="studentid" value="<?php echo $shgtfeesheads['student_id']; ?>" name="studentid" placeholder="Student ID" class="form-control"  size="27">
                       </div>
                       </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Student Name</label>
                       <div class="col-sm-8">
                      <input type="text" id="name" name="name" placeholder="Student Name" class="form-control"  size="27" value="<?php echo $shgtfeesheads['name']; ?>">
                       </div>
                       </div>
                       
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Mobile</label>
                       <div class="col-sm-8">
                      <input type="text" id="moblie" value="<?php echo $shgtfeesheads['moblie']; ?>" name="moblie" placeholder="Mobile" class="form-control"  size="27">
                       </div>
                       
                       </div>
                     
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Religion</label>
                       <div class="col-sm-8">
     
                        <select class="form-control" name="religion" id="religion">
                                <option value=""><?php echo $shgtfeesheads['religion']; ?></option>
                                <option value="Islam">Islam </option>
                                 <option value="Hindu">Hindu</option>
                                 <option value="Christian">Christian</option>
                                 <option value="Buddha">Buddha</option>
                            </select>
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Gender</label>
                       <div class="col-sm-8">
                    <select class="form-control" name="gender" id="gender">
                                <option value=""><?php echo $shgtfeesheads['gender']; ?></option>
                                <option value="Male"> Male </option>
                                 <option value="Female">Female</option>
                            </select>
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Blood Group</label>
                       <div class="col-sm-8">
                        <select class="form-control" name="blood_group" id="blood_group">
                                <option value=""><?php echo $shgtfeesheads['blood_group']; ?></option>
                                <option value="O+"> O+ </option>
                                 <option value="O-">O-</option>
                                 <option value="A+"> A+ </option>
                                 <option value="A-">A-</option>
                                 <option value="B+"> B+ </option>
                                 <option value="B-">B-</option>
                                 <option value="AB+"> AB+ </option>
                                 <option value="AB-">AB-</option>
                            </select>
                       </div>
                       </div>

        <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Image</label>
                                              <div class="col-sm-8">
                                                  <input type="file" id="attachemnet" name="attachemnet" value="<?php echo $shgtfeesheads['image_path']; ?>" >
                                                  <button type="submit" class="btn btn-primary float-right" name="add" >update Student Info</button>
                                              </div>
                                             
                                               <input type="hidden" name="id" value="<?php echo $shgtfeesheads['id']; ?>">
                                              
                                            </div>               

					  	
					</form>
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

<!--<script type="text/javascript">
    $('.side-nav-menu').on('click', 'li', function(){
        $('.side-nav-menu li.inneractive').removeClass('inneractive');
        $(this).addClass('inneractive');
    })
</script>
<!-- <script type="text/javascript">
    $('.ModuleNav').on('click', 'li', function(){
        $('.ModuleNav li.active').removeClass('active');
        $(this).addClass('active');
    })
</script> 
<script type="text/javascript">
    $('.NavhideShow').on('click', 'li', function(){
        $('.stickyNav .navHideActive').removeClass('navHideActive');
        $(this).addClass('navHideActive');
    })
</script>
<script>
    $(document).ready(function(){
        $("#menuToggle").click(function(){
            $("#MobileToggle").fadeToggle();
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#menuToggle2").click(function(){
            $("#MobileToggle").fadeToggle();
        });
    });
</script>

<script>
    $(document).ready(function(){
        $(".Hidemybtn").click(function(){
            $(".Hidemybtn").show();
            $(this).hide();
        });
    });

$(document).ready(function(){	
	$("#ticketForm").submit(function(event){
		submitForm();
		return false;
	});
});
function submitForm(){
	 $.ajax({
		type: "POST",
		url: "support_do.php",
		cache:false,
		data: $('form#ticketForm').serialize(),
		success: function(response){
			$("#ticketForm").html(response)
			$("#contact-modal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
}
    
</script> -->
</body>



</html>
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

	  
  		$gtfeeshead="SELECT * FROM `teacher_info` where id='$id'";
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
                    <form action="teacher_update.php" method="post" enctype="multipart/form-data" id="add-form">
                                            
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Serial No</label>
                       <div class="col-sm-8">
                      <input type="text" id="serial_no" name="serial_no" placeholder="Serial No" class="form-control"  size="27" value="<?php echo $shgtfeesheads['serial_no']; ?>">
                       </div>
                      </div> 
                        <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Gadget No</label>
                       <div class="col-sm-8">
                      <input type="text" id="gadget_no" name="gadget_no" placeholder="Gadget No" class="form-control"  size="27" value="<?php echo $shgtfeesheads['gadget _no']; ?>">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Teacher ID</label>
                       <div class="col-sm-8">
                      <input type="text" id="teacherId" name="teacherId" placeholder="Teacher ID" class="form-control"  size="27" value="<?php echo $shgtfeesheads['teacher_id']; ?>">
                       </div>
                       </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Teacher Name</label>
                       <div class="col-sm-8">
                      <input type="text" id="name" name="name" placeholder="Teacher Name" class="form-control"  size="27" value="<?php echo $shgtfeesheads['name']; ?>">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Shift</label>
                       <div class="col-sm-8">
                      
                      <select class="form-control" id="teachershift" name="teachershift"  >
                        <option selected="" value="">Select Shift</option>
                            <option value="Morning">Morning</option>
                            <option value="Day">Day</option>
                            <option value="N/A">N/A</option>

                            </select>
                                              </div>
                                            </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Designation</label>
                       <div class="col-sm-8">
                    <select name="designation" id="designation" class="form-control" >
                         <option value="Headmaster"> Headmaster </option>
                         <option value="Assistant Headmaster"> Assistant Headmaster</option>
                                 <!--<option value="Assistant Headmaster (Morning)"> Assistant Headmaster (Morning) </option>-->
                                 <!--<option value="Assistant Headmaster (Day)"> Assistant Headmaster (Day) </option>-->
                                <option value="Assistant Teacher"> Assistant Teacher</option> 
                                 <option value="Senior Teacher"> Senior Teacher  </option>
                                 <option value="Junior Teacher"> Junior Teacher  </option>
                                 
                                 <!--<option value="Assistant Teacher (Adhoc)"> Assistant Teacher (Adhoc)</option>-->
                                 <!--<option value="Physical Teacher"> Physical Teacher</option>-->
                                 <!--<option value="Senior Teacher (Morning)"> Senior Teacher (Morning) </option>-->
                                 <!--<option value="Senior Teacher (Day)"> Senior Teacher (Day) </option>-->
                                 <!--<option value="Assistant Teacher (Morning)"> Assistant Teacher (Morning) </option>-->
                                 <!--<option value="Assistant Teacher (Day)"> Assistant Teacher (Day) </option>-->
                                 <!--<option value="Principal"> Principal </option>-->
                                 <!--<option value="Vice Principal"> Vice Principal </option>-->
                                 <!--<option value="Professor"> Professor </option>-->
                                 <!--<option value="Assistant Professor">Assistant Professor</option>-->
                                 <!--<option value="Senior Lecturer"> Senior Lecturer </option>-->
                                 <!--<option value="Lecturer"> Lecturer </option>-->
                                 <!--<option value="Assistant Librarian"> Assistant Librarian </option>-->
                        </select>
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Mobile</label>
                       <div class="col-sm-8">
                      <input type="text" id="moblie" name="moblie" placeholder="Mobile" class="form-control"  size="27" value="<?php echo $shgtfeesheads['moblie']; ?>">
                       </div>
                       
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Email Id</label>
                       <div class="col-sm-8">
                      <input type="text" id="email_id" name="email_id" placeholder="Email Id" class="form-control"  size="27" value="<?php echo $shgtfeesheads['email_id']; ?>">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Religion</label>
                       <div class="col-sm-8">
     
                        <select class="form-control" name="religion" id="religion">
                                <option value=""> Select Once </option>
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
                                <option value=""> Select Once </option>
                                <option value="Male"> Male </option>
                                 <option value="Female">Female</option>
                            </select>
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Qualification</label>
                       <div class="col-sm-8">
                      <input type="text" id="qualification" name="qualification" placeholder="Qualification" class="form-control"  size="27">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Blood Group</label>
                       <div class="col-sm-8">
                        <select class="form-control" name="blood_group" id="blood_group">
                                <option value=""> Select Once </option>
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
                        <label  class="col-sm-3 col-form-label">National Id</label>
                       <div class="col-sm-8">
                      <input type="text" id="national_Id" name="national_Id" placeholder="National Id" class="form-control"  size="27" value="<?php echo $shgtfeesheads['national_Id']; ?>">
                       </div>
                       </div>
                       
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">First joining date</label>
                       <div class="col-sm-8">
                      <input type="text" id="first_joining_date" name="first_joining_date" placeholder="First joining date" class="form-control"  size="27" value="<?php echo $shgtfeesheads['first_joining_date']; ?>">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Joining date at this school</label>
                       <div class="col-sm-8">
                      <input type="text" id="joining_date_at_this_school" name="joining_date_at_this_school" placeholder="Joining date at this school" class="form-control"  size="27" value="<?php echo $shgtfeesheads['joining_date_at_this_school']; ?>">
                       </div>
                       </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Mailing Address (Present)</label>
                       <div class="col-sm-8">
                      <input type="text" id="mailingaddress" name="mailingaddress" placeholder="Mailing Address (Present)" class="form-control"  size="27" value="<?php echo $shgtfeesheads['teachers_mailing_address']; ?>">
                       </div>
                       </div>
                     <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Permanent Address</label>
                       <div class="col-sm-8">
                      <input type="text" id="permanentaddress" name="permanentaddress" placeholder="Permanent Address" class="form-control"  size="27" value="<?php echo $shgtfeesheads['teacher_permanent_address']; ?>">
                       </div>
                       </div>  
        <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Image</label>
                                              <div class="col-sm-8">
                                                  <input type="file" id="attachemnet" name="attachemnet">
                                              </div>
                                            </div>               
                       
            <label  class="col-form-label" style="color: red;">*This portion for Class Teacher</label>   
                 <hr>
                   <?php $curyear= date("Y"); 
  $descuryear=$curyear-1;
  $inccuryear=$curyear+1;
  ?>      	    
		        	   <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Session</label>
                       <div class="col-sm-8">
                      
<select class="form-control" id="session" name="session"  >
                        <option selected="" value="">Select Session</option>
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
                               <option selected="" value="">Select Class</option>
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
                        <option selected="" value="">Select Shift</option>
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
                               <option selected="" value="">Select Section</option>
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
                                            
                                            
                                            
                        <input type="hidden" name="id" value="<?php echo $shgtfeesheads['id']; ?>"> 
					  	
					  
					  	<button type="submit" class="btn btn-primary float-right" name="add" >update</button>
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
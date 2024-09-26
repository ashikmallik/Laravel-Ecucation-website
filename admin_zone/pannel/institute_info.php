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
                                    <h3>Institute Info</h3>
                                   </div>
                                </div>

<div class="modal-content">

		      	<!-- Modal Header -->
		      	<!--<div class="modal-header">-->
			      <!--  <h4 class="modal-title"></h4>-->
			      <!--  <button type="button" class="close" data-bs-dismiss="modal">&times;</button>-->
		      	<!--</div>-->

		      	<!-- Modal body -->
		      	<div class="modal-body">
		        	<form action="institute_info_store.php" method="post" enctype="multipart/form-data" id="add-form">
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">School Name</label>
                                              <div class="col-sm-8">
                                                  <input type="text" id="schoolName" name="schoolName" placeholder="Enter School Name" class="form-control" value="<?php echo $shqgetinstituteinfo['institutions_name']; ?>"  size="27">
                                              </div>
                                            </div>
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">School Name(Bangla)</label>
                                              <div class="col-sm-8">
                                                  <input type="text" id="schoolNameBangla" name="schoolNameBangla" placeholder="Enter School Name(Bangla)" class="form-control" value="<?php echo $shqgetinstituteinfo['institutions_name_bangla']; ?>"  size="27">
                                              </div>
                                            </div>
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">School Address</label>
                                              <div class="col-sm-8">
                                                  <input type="text" id="address" name="address" placeholder="Enter Address" class="form-control"  value="<?php echo $shqgetinstituteinfo['institutions_address']; ?>" size="27">
                                              </div>
                                            </div>
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">School Address(Bangla)</label>
                                              <div class="col-sm-8">
                                                  <input type="text" id="addressBangla" name="addressBangla" placeholder="Enter Address(Bangla)" class="form-control" value="<?php echo $shqgetinstituteinfo['institutions_address_bangla']; ?>"  size="27">
                                              </div>
                                            </div>
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Contact</label>
                                              <div class="col-sm-8">
                                                  <input type="text" id="contact" name="contact" placeholder="Enter Contact Number" value="<?php echo $shqgetinstituteinfo['institutions_contact']; ?>" class="form-control"  size="27">
                                              </div>
                                            </div>
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Email</label>
                                              <div class="col-sm-8">
                                                  <input type="text" id="email" name="email" placeholder="Enter Email" class="form-control"  value="<?php echo $shqgetinstituteinfo['institutions_email']; ?>" size="27">
                                              </div>
                                            </div>
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Estd</label>
                                              <div class="col-sm-8">
                                                  <input type="text" id="estd" name="estd" placeholder="Enter Estd" class="form-control" value="<?php echo $shqgetinstituteinfo['institutions_estd']; ?>" size="27">
                                              </div>
                                            </div>
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Headmaster's Massege</label>
                                              <div class="col-sm-8">
                                                  <textarea type="text" id="hm_msg" name="hm_msg" rows="4" class="form-control"> <?php if(!empty($shqgetinstituteinfo['institutions_haed_massege'])){echo $shqgetinstituteinfo['institutions_haed_massege'];  }else{ echo " ";
                                                  } ?> </textarea>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Headmaster Image</label>
                                              <div class="col-sm-8">
                                                  <input type="file" id="" name="hImamge">
                                              </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Chairman Massege</label>
                                              <div class="col-sm-8">
                                                  <textarea type="text" id="hm_msg" name="PrincipalMassege" rows="4" class="form-control"> <?php if(!empty($shqgetinstituteinfo['PrincipalMassege'])){echo $shqgetinstituteinfo['PrincipalMassege'];  }else{ echo " ";
                                                  } ?> </textarea>
                                              </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Chairman Image</label>
                                              <div class="col-sm-8">
                                                  <input type="file" id="" name="PrincipalImage">
                                              </div>
                                            </div>
                                            
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">History Of the Institute</label>
                                              <div class="col-sm-8">
                                                  <textarea type="text" id="history" name="history" rows="4" 
                                         class="form-control"><?php if(!empty($shqgetinstituteinfo['institutions_history'])){echo $shqgetinstituteinfo['institutions_history'];  }else{ echo " ";
                                                  } ?></textarea>
                                              </div>
                                            </div>
                                      <div class="form-group row">
                                              <label  class="col-sm-3 col-form-label">Logo</label>
                                              <div class="col-sm-8">
                                                  <input type="file" id="logo" name="logo">
                                              </div>
                                            </div>
                                         
                                      
                                
					  	<button type="submit" class="btn btn-primary float-right" name="add" >Add/Update</button>
					</form>


		      	</div>

		    </div>
                                   <!---Request Modal---->
                                   <!-- The Modal -->
	
                                   
                                  
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
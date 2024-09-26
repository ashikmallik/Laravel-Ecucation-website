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
    <script>
	function callpage()
	{
	 document.frmcontent.action="student_list.php";
	 document.frmcontent.submit();
	}
	
</script>
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
                    <div class="col-sm-3" style="margin: auto;background: #efefef;">
                        
                                 
<form name="frmcontent" method="post" enctype="multipart/form-data">
                    
    	    
		        	   <div class="form-group row">
                       
                      
<select class="form-control" id="session" name="session" onChange="callpage();" >
    <option selected="" value="">Select Session</option>
            <?php
		$data1="SELECT * FROM `student_info` GROUP BY `session`";
					$qdata1=$mysqli->query($data1);
					while($showdata1=$qdata1->fetch_assoc()){ $sl++;
				
				?>
      <option value=" <?php echo $showdata1['session']; ?>" <?php if($showdata1['session']==trim($_REQUEST['session'])) { echo "selected"; }  ?>> <?php echo $showdata1['session']; ?></option>
      <?php } ?>

                            </select>
                                              
                                            </div>
                    <div class="form-group row">
                        
                      
                           <select class="form-control" id="class_name" name="class_name" onChange="callpage();" >
                               <option selected="" value="">Select Class</option>
                         <?php 
        
        $getsession = trim($_REQUEST['session']);                 
                         
        $gtclass="SELECT * FROM `class` ORDER BY `serial_no` ASC";
		$sl=0;
		$qgtclass=$mysqli->query($gtclass);
		while($shqgtclass=$qgtclass->fetch_assoc()){
		
		$sl++;
                         ?>      
                               <option value="<?php echo $shqgtclass['class_name']; ?>"<?php if($shqgtclass['class_name']==trim($_REQUEST['class_name'])) { echo "selected"; }  ?>><?php echo $shqgtclass['class_name']; ?></option>
<?php 
}
?>
                            </select>
                   
                       
                       </div>
                       <div class="form-group row">
                    
                      
                      
<select class="form-control" id="shift" name="shift" onChange="callpage();" >
                        <option selected="" value="">Select Shift</option>
                            <option value="Morning"<?php if("Morning"==trim($_REQUEST['shift'])) { echo "selected"; }  ?>>Morning</option>
                            <option value="Day" <?php if("Day"==trim($_REQUEST['shift'])) { echo "selected"; }  ?>>Day</option>
                            <option value="N/A"<?php if("N/A"==trim($_REQUEST['shift'])) { echo "selected"; }  ?>>N/A</option>

                            </select>
                                            
                                            </div> 
                       <div class="form-group row">
                      
                           <select class="form-control" id="section_name" name="section_name" onChange="callpage();" >
                               <option selected="" value="">Select Section</option>
                         <?php 
        
        $getclassName = trim($_REQUEST['class_name']);                 
                         
        $gtsection="SELECT * FROM `student_info` WHERE  `session` = '$getsession' AND `class_name` = '$getclassName' AND `shift` = '' GROUP BY `section`";
		$sl=0;
		$qgtsection=$mysqli->query($gtsection);
		while($shqgtsection=$qgtsection->fetch_assoc()){
		
		$sl++;
                         ?>      
                               <option value="<?php echo $shqgtsection['section']; ?>" <?php if($shqgtsection['section']==trim($_REQUEST['section_name'])) { echo "selected"; }  ?>><?php echo $shqgtsection['section']; ?></option>
<?php 
}
?>
                            </select>
                     
                       </div> 
        <?php if($getclassName == "Nine" OR $getclassName = "Ten" ){  ?>               
                       <div class="form-group row">
                    
                      
                 <select class="form-control" id="group" name="group"  >
                        <option selected="" value="">None</option>
                            <option value="Science">Science</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Humanities">Humanities</option>
                            

                            </select>
                                         
                                            </div> 
                  <?php } ?>   
                    
                </form>
                 </div>  
                                   <div class="requestTableHead">
                                    <h3>Student List</h3>
                                   </div>
                                    <div class="addstuinfBtn requestTablBtn text-right">
                                        <div class="reqheadNumber">
                                            
                                        </div>
                                         <div class="">
                                           <!--<a href="" data-toggle="modal" data-target=".bd-example-modal-lg" style="float: right;">Add New Ticket</a>-->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add Student</button>
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
                                    <table id="data-table" class="table table-striped">
                                        <thead class="tableHead">
                                          <tr>
                                              <th scope="col" style="text-align: center;">Session</th>
                                            <th scope="col" style="text-align: center;">Class</th>
                                            <th scope="col" style="text-align: center;">Shift</th>
                                            <th scope="col" style="text-align: center;">Section</th>
                                            <th scope="col" style="text-align: center;">Roll</th>
                                            <th scope="col" style="text-align: center;">Name</th>
                                            <th scope="col" style="text-align: center;">Phone</th>
                                            <th scope="col" style="text-align: center;">Image</th>
                                            <th scope="col" style="text-align: center;">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
    <?php
                                
       $class= trim($_REQUEST['class_name']);                             
      $sec= trim($_REQUEST['section_name']);
      $sess= trim($_REQUEST['session']);
      $shift= trim($_REQUEST['shift']);
	  
  		$gtstudent="SELECT * FROM `student_info` WHERE `session` = '$sess' AND `section` = '$sec' AND `class_name` = '$class' AND `shift` = '$shift' ORDER BY `roll` ASC";
		$sl=0;
		$qgtstudent=$mysqli->query($gtstudent);
		while($shqgtstudent=$qgtstudent->fetch_assoc()){
		
		$sl++;
  
  ?>
   <tr>
    <td  align="center"><?php echo $shqgtstudent['session']; ?></td>
    <td  align="center"><?php echo $shqgtstudent['class_name']; ?></td>
    <td  align="center"><?php echo $shqgtstudent['shift']; ?></td>
    <td  align="center"><?php echo $shqgtstudent['section']; ?></td>
    <td  align="center"><?php echo $shqgtstudent['roll']; ?></td>
    <td  align="center"><?php echo $shqgtstudent['name']; ?></td>
    <td  align="center"><?php echo $shqgtstudent['moblie']; ?></td>
    <td  align="center"><img src="upload/student/<?php echo $shqgtstudent['image_path']; ?>" width="120" height="100"/></td>
    <td  align="center">
        <a class="btn btn-success" href="edit_student.php?id=<?php echo $shqgtstudent['id']; ?>">Edit</a>
    <a class="btn btn-danger" href="delete_student.php?id=<?php echo $shqgtstudent['id']; ?>">Delete</a>
    </td>
  </tr>
                              
      
  <?php } ?> 

                                          
                                        </tbody>
                                      </table>
                                  </div>
                                  <div class="pegaeNation">
                                      <div class="paginationmain">
                                          <p>Displaying 1-10 out of 100</p>
                                      </div>
                                      <div class="paginationmain text-right">
                                          <ul>
                                              <li><a href="" class="pageActive">1</a></li>
                                              <li><a href="">2</a></li>
                                              <li><a href="">3</a></li>
                                              <li><a href="">4</a></li>
                                              <li><a href="">5</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                   <!---Request Modal---->
                                   <!-- The Modal -->
	<div class="modal fade" id="myModal">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Add Student</h4>
			        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
		      	</div>

		      	<!-- Modal body -->
		      	<div class="modal-body">
		        	<form action="student_store.php" method="post" enctype="multipart/form-data" id="add-form">
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
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Group</label>
                       <div class="col-sm-8">
                      
                 <select class="form-control" id="group" name="group"  >
                        <option selected="" value="">None</option>
                            <option value="Science">Science</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Humanities">Humanities</option>
                            

                            </select>
                                              </div>
                                            </div> 
                        <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Roll</label>
                       <div class="col-sm-8">
                      <input type="text" id="roll" name="roll" placeholder="Roll" class="form-control"  size="27">
                       </div>
                       </div>                    
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Student ID</label>
                       <div class="col-sm-8">
                      <input type="text" id="studentid" name="studentid" placeholder="Student ID" class="form-control"  size="27">
                       </div>
                       </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Student Name</label>
                       <div class="col-sm-8">
                      <input type="text" id="name" name="name" placeholder="Student Name" class="form-control"  size="27">
                       </div>
                       </div>
                       
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Mobile</label>
                       <div class="col-sm-8">
                      <input type="text" id="moblie" name="moblie" placeholder="Mobile" class="form-control"  size="27">
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
                                              <label  class="col-sm-3 col-form-label">Image</label>
                                              <div class="col-sm-8">
                                                  <input type="file" id="attachemnet" name="attachemnet">
                                              </div>
                                            </div>               
                       

                                            
                                            
                                            
                                         
					  	
					  	<button type="button" class="btn btn-danger float-right" data-bs-dismiss="modal">Close</button>
					  	<button type="submit" class="btn btn-primary float-right" name="add" >Add</button>
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
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
                                    <h3>Teacher List</h3>
                                   </div>
                                    <div class="addstuinfBtn requestTablBtn text-right">
                                        <div class="reqheadNumber">
                                            
                                        </div>
                                         <div class="">
                                           <!--<a href="" data-toggle="modal" data-target=".bd-example-modal-lg" style="float: right;">Add New Ticket</a>-->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add Teacher</button>
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
                                              <th scope="col" style="text-align: center;">Sl</th>
                                            <th scope="col" style="text-align: center;">Teacher Name</th>
                                            <th scope="col" style="text-align: center;">Designation</th>
                                            
                                            <th scope="col" style="text-align: center;">Image</th>
                                            <th scope="col" style="text-align: center;">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                                                          <?php
                                
                                    

	  
  		$gtfeeshead="SELECT * FROM `teacher_info` ORDER BY `serial_no` ASC";
		$sl=0;
		$qgtfeeshead=$mysqli->query($gtfeeshead);
		while($shgtfeeshead=$qgtfeeshead->fetch_assoc()){
		
		$sl++;
  
  ?>
   <tr>
    <td  align="center"><?php echo $shgtfeeshead['serial_no']; ?></td>
    <td  align="center"><?php echo $shgtfeeshead['name']; ?></td>
    <td  align="center"><?php echo $shgtfeeshead['designation']; ?></td>
    <td  align="center"><img src="upload/teacher/<?php echo $shgtfeeshead['image_path']; ?>" width="120" height="100"/></td>
    <td  align="center">
        <a class="btn btn-success" href="edit_teacher.php?id=<?php echo $shgtfeeshead['id']; ?>">Edit</a>
    <a class="btn btn-danger" href="delete_teacher.php?id=<?php echo $shgtfeeshead['id']; ?>">Delete</a>
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
			        <h4 class="modal-title">Add Teacher</h4>
			        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
		      	</div>

		      	<!-- Modal body -->
		      	<div class="modal-body">
		        	<form action="teacher_store.php" method="post" enctype="multipart/form-data" id="add-form">
                                            
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Serial No</label>
                       <div class="col-sm-8">
                      <input type="text" id="serial_no" name="serial_no" placeholder="Serial No" class="form-control"  size="27">
                       </div>
                      </div> 
                        <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Gadget No</label>
                       <div class="col-sm-8">
                      <input type="text" id="gadget_no" name="gadget_no" placeholder="Gadget No" class="form-control"  size="27">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Teacher ID</label>
                       <div class="col-sm-8">
                      <input type="text" id="teacherId" name="teacherId" placeholder="Teacher ID" class="form-control"  size="27">
                       </div>
                       </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Teacher Name</label>
                       <div class="col-sm-8">
                      <input type="text" id="name" name="name" placeholder="Teacher Name" class="form-control"  size="27">
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
                      <input type="text" id="moblie" name="moblie" placeholder="Mobile" class="form-control"  size="27">
                       </div>
                       
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Email Id</label>
                       <div class="col-sm-8">
                      <input type="text" id="email_id" name="email_id" placeholder="Email Id" class="form-control"  size="27">
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
                      <input type="text" id="national_Id" name="national_Id" placeholder="National Id" class="form-control"  size="27">
                       </div>
                       </div>
                       
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">First joining date</label>
                       <div class="col-sm-8">
                      <input type="text" id="first_joining_date" name="first_joining_date" placeholder="First joining date" class="form-control"  size="27">
                       </div>
                       </div>
                       <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Joining date at this school</label>
                       <div class="col-sm-8">
                      <input type="text" id="joining_date_at_this_school" name="joining_date_at_this_school" placeholder="Joining date at this school" class="form-control"  size="27">
                       </div>
                       </div>
                      <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Mailing Address (Present)</label>
                       <div class="col-sm-8">
                      <input type="text" id="mailingaddress" name="mailingaddress" placeholder="Mailing Address (Present)" class="form-control"  size="27">
                       </div>
                       </div>
                     <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Permanent Address</label>
                       <div class="col-sm-8">
                      <input type="text" id="permanentaddress" name="permanentaddress" placeholder="Permanent Address" class="form-control"  size="27">
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
                        <p class="m-b-0">Copyright ©2023 <?php  echo $shqgetinstituteinfo['institutions_name']; ?>. All rights reserved.</p>
                    </div>
                <!-- Footer END -->

            </div>

        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>



</html>

		
		
		<div class="header_top">
		<div class="logo">
			<img src="admin_zone/pannel/upload/logo/<?php echo $shqgetinstituteinfo['institutions_logo'];?>">
		</div>
		
			<div class="gov" align="right">
		<!--	<img src="govt/sek hasina.jpg">  -->
			<img src="govt/bangladesh.png">
		</div>
        	<div class="gov" align="right">
	<!--	<img src="govt/sek mujib.jpg"> -->
		</div>
		
		<div class="title">
		<div class="main_title" >
            
           <?php echo $shqgetinstituteinfo['institutions_name_bangla'];?>	
			</div>
			<div class="sub_title ">
				<?php echo $shqgetinstituteinfo['institutions_name'];?>			</div>
		</div>

	</div><!--========= Logo and Title End  ==========-->

	<div class="notice_top">
		<div class="row">
        <div style="color: #F33;" class="col-sm-1"> সংবাদঃ </div>
	<div class="col-sm-11">
		<div class="notice_title_top">
			<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0);" scrollamount="6">

 <?php
 $getlastnotice = "SELECT * FROM `notice`  ORDER BY `id` DESC LIMIT 10";
 $qgetlastnotice=$mysqli->query($getlastnotice);
while($shqgetlastnotice=$qgetlastnotice->fetch_assoc()){
 ?>
 <a href="notice.php"><i class="fa fa-clone"><?php echo " ".$shqgetlastnotice['description']; ?> </i> </a>
 <?php } ?>
                                    </marquee>
        </div>
    </div>
</div>	
	</div>
	<div class="main_menu">
		<div class="row">
			<div class="col-md-12">
				<div class="header_part header" id="header">
					<div class="header-nav">
				        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
  <div class="continer">
      <nav id="menuzord-right" class="menuzord no-bg">
          <ul class="menuzord-menu">                                    
              <li class="active"><a href="index.php"><b> হোম </b></a></li>
              
              <li><a href="#"><b> আমাদের কথা </b></a>
                  <ul class="dropdown">
                      <li><a href="history.php"> প্রতিষ্ঠানের ইতিহাস </a></li>
                      <li><a href="governing_body.php"> ব্যাবস্থাপনা কমিটি  </a></li>
                      <li><a href="at_a_glance.php">ভৌত-অবকাঠামো </a></li>    
                      <li><a href="teaching_permission.php"> পাঠদানের অনুমতি ও স্বীকৃতি </a></li>     
                      <li><a href="nationalization_information.php"> জাতীয়করণের তথ্য </a></li>    
                      
                  </ul>
              </li>
  
              <li><a href="#"><b> শিক্ষকদের তথ্য </b></a>
                  <ul class="dropdown">
                  <li><a href="headmaster.php"> প্রধান শিক্ষক </a></li>
                  <li><a href="former_headmaster.php"> প্রাক্তন প্রধান শিক্ষকগণ </a></li>
                  <li><a href="#"> সহকারী প্রধান শিক্ষক </a>
                      <ul class="dropdown">
                          <!--<li><a href="assistant_headmester.php?shift='N/A'"> সহকারী প্রধান শিক্ষক  </a></li>-->
                          <li><a href="assistant_headmester.php?shift=Morning"> সহকারী প্রধান শিক্ষক (প্রভাতি) </a></li>
                          <li><a href="assistant_headmester.php?shift=Day"> সহকারী প্রধান শিক্ষক (দিবা) </a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="#"> সহকারী শিক্ষক </a>
                      <ul class="dropdown">
                          <li><a href="assistant_teacher.php?shift=Morning"> সহকারী শিক্ষক (প্রভাতি) </a></li>
                          <li><a href="assistant_teacher.php?shift=Day"> সহকারী শিক্ষক (দিবা) </a></li>
                      </ul>
                  </li>
                      <li><a href="class_teacher.php"> শ্রেণি শিক্ষকবৃন্দ </a></li>
                      <!--<li><a href="#"> শিক্ষকদের উপস্থিত অনুপস্থিত তথ্য </a></li>-->
                      <li><a href="information_on_posts_of_teachers.php"> শিক্ষকদের পদের তথ্য </a></li>				                                
                  </ul>
              </li>
              
              <li><a href="#"><b> স্টাফদের তথ্য </b></a>
                  <ul class="dropdown">
                      <li><a href="staff.php"> অফিস স্টাফ </a></li>
                     <!-- <li><a href="#"> স্টাফদের উপস্থিত অনুপস্থিত তথ্য </a></li>-->
                      <li><a href="information_on_posts_of_staff.php"> স্টাফদের পদের তথ্য </a></li>
                  </ul>
              </li>
              
              <li><a href="#"><b> শিক্ষার্থীদের তথ্য </b></a>
                  <ul class="dropdown">
                      <li><a href="student_info.php"> শিক্ষার্থীদের তথ্য </a></li>
                    <!--  <li><a href="std_list_indiv.php"> শিক্ষার্থীদের তথ্য (পৃথক) </a></li> li>-->
                      <li><a href="student_summary.php"> সকল শিক্ষার্থীদের তথ্য </a></li>
                      <li><a href="#">লিঙ্গ ভিত্তিক শিক্ষার্থীদের তথ্য</a></li>
                  </ul>
              </li>
              
              <li><a href="#"><b> একাডেমিক তথ্য </b></a>
                  <ul class="dropdown">
                      <li><a href="#"> শ্রেণি ভিত্তিক অনুমোদিত শাখার তথ্য </a></li>
                      <li><a href="syllabus.php"> পাঠ্যক্রম </a></li>
                      <li><a href="routine.php?type=1"> ক্লাস রুটিন </a></li>
                      <li><a href="routine.php?type=2"> পরীক্ষার রুটিন </a></li>
                      <li><a href="#"> একাডেমিক সাবজেক্ট </a></li>
                  </ul>
              </li>
              
              <li><a href="#"><b> প্রকাশনা </b></a>
                  <ul class="dropdown">
                      <li><a href="publication.php?publication=1"> ম্যাগাজিন </a></li>
                      <li><a href="publication.php?publication=2"> এস.এস.সি অ্যালবাম </a></li>
                      <li><a href="publication.php?publication=3"> অন্যান্য </a></li>              
                  </ul>
              </li>

            <li><a href="gallery.php"><b> ফটো গ্যালারি </b></a> </li>              
            <!--  <li><a href="freedom.html"> <b> মুক্তিযোদ্ধা কর্ণার  </b></a></li>-->
            <!--<li><a href="sadhinota.html"> <b> স্বাধীনতার সুবর্ণজয়ন্তী কর্ণার  </b></a></li>-->
            <!--<li><a href="nrsoft/student/index.html" target="_blank"> <b> পেমেন্ট </b></a></li>-->
          </ul>

      </nav>
  </div>
  </div>			    	</div>
			    </div>
		    </div>
		</div>
	</div>
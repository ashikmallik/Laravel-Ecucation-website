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
		
    <!--========= Total Left Side End  ==========-->

	    <div class="col-md-8">
	    	<div class="right_side">
	    		<div class="col-md-12">

						
		        	<div class="our_slider">
		              	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			                <ol class="carousel-indicators">
			                 
			             <?php 
			             $i=0;
			             
$getslider = "SELECT * FROM `slider`";
$qgetslider=$mysqli->query($getslider);
while($shqgetslider=$qgetslider->fetch_assoc()){ 
$active =''; 

if($i==0){
   $active ='active'; 
}

    

			             ?>    
			                    
	<li data-target="#carousel-example-generic" data-slide-to="<?= $i; ?>" class="<?= $active; ?>"></li>
	<?php $i++; } ?>
			                </ol>

	
							<div class="carousel-inner">
<?php 
			             $i=0;
			             
$getslider = "SELECT * FROM `slider`";
$qgetslider=$mysqli->query($getslider);
while($shqgetslider=$qgetslider->fetch_assoc()){ 
$active =''; 

if($i==0){
   $active ='active'; 
}

    

			             ?>    							    
								                                
								<div class="item <?= $active;  ?>">
								    	    		    						
									<img src="admin_zone/pannel/upload/slider/<?php echo $shqgetslider['image_pathe'];?>">
										 
								</div>
                                
                         	<?php $i++; } ?>
                         </div>
                         
                     
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="fa fa-angle-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="fa fa-angle-right"></span>
							</a>
						</div>
		        	</div>
		        
        		</div>
    <!--========= Slider End  ==========-->
    

		         
 <!--========= Latest Notice End  ==========-->


<!--========= Single Box End  ==========-->


<!--========= Single Box End  ==========-->




		    </div>
	    </div>
	    <div class="col-md-4">
		        	<div class="common_box">

                        <div class="common_title">নোটিশ র্বোড</div>
		        		<div class="common_body">
		        			<marquee class="up_direction_marquee" direction="up" behavior="scroll" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);" scrollamount="3" style="height:243px;">
                            	<div class="common_marquee_body">
               <!--                 		 <ul class="common_list_marque">-->
		        					<!--	<li>-->
		        					<!--		<a href="#">০৮/০৬/২০২৩ থেকে ২১/০৬/২০২৩ তারিখ পর্যন্ত ৭ম শ্রেণির প্রভাতি শাখার ক্লাশ রুটিন। </a>-->
		        					<!--	</li>-->
		        					<!--</ul>-->
               <!--                     <ul class="common_list_marque">-->
		        					<!--	<li>-->
		        					<!--		<a href="#">০৮/০৬/২০২৩ থেকে ২১/০৬/২০২৩ তারিখ পর্যন্ত ৬ষ্ঠ শ্রেণির প্রভাতি শাখার ক্লাশ রুটিন। </a>-->
		        					<!--	</li>-->
		        					<!--</ul>-->
               <!--                 <ul class="common_list_marque">-->
		        					<!--	<li>-->
		        					<!--		<a href="#">মে-২০২৩ মাসের বেতন পরিশোধ প্রসঙ্গে।</a>-->
		        					<!--	</li>-->
		        					<!--</ul>-->
               <!--             <ul class="common_list_marque">-->
		        					<!--	<li>-->
		        					<!--		<a href="#">বাংলা শুভ নববর্ষ-১৪৩০ প্রসঙ্গে।  </a>-->
		        					<!--	</li>-->
		        					<!--</ul>-->
<?php
 $getlastnotice = "SELECT * FROM `notice`  ORDER BY `id`";
 $qgetlastnotice=$mysqli->query($getlastnotice);
while($shqgetlastnotice=$qgetlastnotice->fetch_assoc()){
 ?>        
                          <ul class="common_list_marque">
		        						<li>
		        							<a href="admin_zone/pannel/upload/notice/<?php echo $shqgetlastnotice['file_pathe'];?>" target="_blank"><i class="fa fa-clone"><?php echo " ".$shqgetlastnotice['description']; ?></i></a>
		        						</li>
		        					</ul> 
		        			 <?php } ?>		
		    					</div>                                
		    				</marquee>
		    		<button type="button" class="btn btn-xs right" style="background-color: #4f5e5e;border-color: #202023;"><a href="notice.php"> আরও দেখাও </a></button>
		        		</div>
		        	</div>
		        </div>

<div class="col-md-8">

	<div class="single_box use_images_def offset-bot-10 ">
	 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="height: 225px;">
          <div class="item active">  
                                    <div class="single_heading"><span> সভাপতির বাণী</span></div>
                                    <!--<div class="single_heading"><span>প্রধান শিক্ষক  মহোদয়ের কথা </span></div>-->
                                <img src="admin_zone/pannel/upload/Principal/<?php echo $shqgetinstituteinfo['PrincipalImage'];?>" style="height: 177px;">
                                <div class="gbText">
                                    <p>
                                        <?php echo $shqgetinstituteinfo['chairman_massege'];?>
                                    </p>
                                    
                               </div>
                               <hr>
                                    <a href="hm_message.php?id=7" class="read_more_btn">বিস্তারিত</a>
                                 
     </div> 
     <div class="item">  
                                    <div class="single_heading"><span>প্রধান শিক্ষকের বাণী</span></div>
                                    <!--<div class="single_heading"><span>প্রধান শিক্ষক  মহোদয়ের কথা </span></div>-->
                                <img src="admin_zone/pannel/upload/headMaster/<?php echo $shqgetinstituteinfo['head_image'];?>" style="height: 177px;">
                                    <div class="gbText">
                                    <p>
                                        <?php echo $shqgetinstituteinfo['institutions_haed_massege'];?>
                                    </p>
                                    
                               </div>                                      
                                    <hr>
                                    <a href="hm_message.php?id=7" class="read_more_btn">বিস্তারিত</a>
     </div> 
     
    </div>                            
    </div>                             
                                   
                                </div>
    	
                           
                                <div class="col-md-8">
		        	<div class="common_box central_box">
		        		<!--<div class="common_title">Examination Order</div>-->
		        		<div class="common_title">প্রতিষ্ঠানের ইতিহাস</div>
		        		<div class="common_body">
	        				<div class="common_marquee_body">
							<ul class="common_list_marque">
	        						<li>
                                <?php echo $shqgetinstituteinfo['institutions_history'];?>
	        						</li>
	        					</ul>
	        				
								        					<!--<button type="button" class="btn btn-warning btn-xs right"><a href="#">Show More</a></button>-->
	        					<button type="button" class="btn btn-xs right" style="background-color: #4f5e5e;border-color: #202023;"><a href="history.php"> আরও দেখাও </a></button>
	    					</div>
		        		</div>
		        	</div>
		        </div>
    	        <div class="col-md-4">
		        	<div class="common_box central_box">
		        		<!--<div class="common_title">HSC CORNER</div>-->
		        		<div class="common_title"> এস.এস.সি কর্নার </div>
		        		<div class="common_body">

	        				<div class="common_marquee_body">
	        				    <?php
 $getssccorner = "SELECT * FROM `corner` WHERE `corner_type` = 3 ORDER BY `id` DESC LIMIT 3";
 $qgetssccorner=$mysqli->query($getssccorner);
while($shqgetssccorner=$qgetssccorner->fetch_assoc()){
 ?>	        				    
							<ul class="common_list_marque">
	        						<li>
	<a href="admin_zone/pannel/upload/corner/<?php echo $shqgetssccorner['file_path'];?>" target="_blank"><?php echo $shqgetssccorner['description']; ?></a>
	        						</li>
	        					</ul>
	        					<?php } ?>				
                        	        				
                        	        					<!--<button type="button" class="btn btn-warning btn-xs right"><a href="#">Show More</a></button>-->
	        					<button type="button" class="btn btn-xs right" style="background-color: #4f5e5e;border-color: #202023;"><a href="corner.php?corner=3"> আরও দেখাও </a></button>
	    					</div>
	    					
		        		</div>
		        	</div>
		        </div>
<!--========= Single Box End  ==========-->


<!--========= Single Box End  ==========-->

		        <div class="col-md-4">
		        	<div class="common_box central_box">
		        		<!--<div class="common_title">Download</div>-->
		        		<div class="common_title"> ডাউনলোড </div>
		        		<div class="common_body">
	        				<div class="common_marquee_body">
	        				    
	        				    <?php
 $getssccorner = "SELECT * FROM `corner` WHERE `corner_type` = 6 ORDER BY `id` DESC LIMIT 3";
 $qgetssccorner=$mysqli->query($getssccorner);
while($shqgetssccorner=$qgetssccorner->fetch_assoc()){
 ?>	        				    
							<ul class="common_list_marque">
	        						<li>
	<a href="admin_zone/pannel/upload/corner/<?php echo $shqgetssccorner['file_path'];?>" target="_blank"><?php echo $shqgetssccorner['description']; ?></a>
	        						</li>
	        					</ul>
	        					<?php } ?>
                                	        					<!--<button type="button" class="btn btn-warning btn-xs right"><a href="#">Show More</a></button>-->
	        					<button type="button" class="btn btn-xs right" style="background-color: #4f5e5e;border-color: #202023;"><a href="corner.php?corner=6"> আরও দেখাও </a></button>
	    					</div>
		        		</div>
		        	</div>
		        </div> 
		 <div class="col-md-8">
		        	<div class="common_box central_box">
		        		<!--<div class="common_title">Examination Order</div>-->
		        		<div class="common_title"> মুজিব ও সুবর্ণ জয়ন্তী কর্ণার </div>
		        		<div class="common_body">
	        			
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
            <img src="assets/images/mojib_corner.png">
            </div>
            <div class="item">
            <img src="assets/images/suborno.jpg">
            </div>
            </div>
             </div>
		
	        					<button type="button" class="btn btn-xs right" style="background-color: #4f5e5e;border-color: #202023;"><a href="corner.php?corner=4"> আরও দেখাও </a></button>
	    				
		        		</div>
		        	</div>
		        </div>            
                            </div>
<div class="col-md-4">
    <div class="common_box">
                    <div class="important-notice-item">
                    <h4>ই-সেবা</h4>
                    <ul>
                    <li><a href="https://eboardresults.com/v2/home" target="_blank"> বোর্ড পরীক্ষার ফলাফল</a></li>
                    <li><a href="https://corona.gov.bd/" target="_blank"> করোনার তথ্য</a></li>
                    <li><a href="https://surokkha.gov.bd/enroll" target="_blank"> কোভিড-১৯ টিকা রেজিস্ট্রেশন করুন এখান থেকে</a></li>
                         
                         
                                            </ul>
                </div>
                </div>
                <div class="common_box">
        			<div class="common_title"> সামাজিক যোগাযোগ </div>
	        		<div class="common_body services_side_menu" style="background: white;">

						<a href="https://www.facebook.com/avjm.govt.girls.highschool?ref=embed_page" target="_blank">
					        <div class="info-box info-box-big">
					            <div class="info-box-icon bg-white">
					                <img src="assets/images/facebook.png">
					            </div>
					            <div class="info-box-content">
					                <div class="info-box-number"> ফেসবুক </div>
					            </div>
					        </div>    
					    </a>
					    

						<a href="https://www.youtube.com/" target="_blank">
					        <div class="info-box info-box-big">
					            <div class="info-box-icon bg-white">
					                <img src="assets/images/youtube.png">
					            </div>
					            <div class="info-box-content">
					                <div class="info-box-number"> ইউটিউব </div>
					            </div>
					        </div>    
					    </a>


	        		</div>
 </div>
 <div class="common_box">
                    <div class="important-notice-item">
                    <h4>জরুরী হটলাইন</h4>
                    <img src="assets/images/hotline.jpg" alt="" style="width: 43%;margin-left: 27%;" />
                </div>
                </div>
 
  
 </div>
 

    <div class="footer_top">
    	
<section class="content">
    		<div class="row">
    			<div class="col-md-4">
    				<h3 class="footer_title"> যোগাযোগের তথ্য </h3>
    				<div class="footer_info">
	    				<p><?php echo $shqgetinstituteinfo['institutions_name_bangla'];?></p>
	    				<p><?php echo $shqgetinstituteinfo['institutions_address'];?></p>
	    				<p> ফোনঃ <?php echo $shqgetinstituteinfo['institutions_contact'];?></p>
	    				<p> ই-মেইলঃ <?php echo $shqgetinstituteinfo['institutions_email'];?></p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<h3 class="footer_title"> গুরুত্বপূর্ণ লিংক </h3>
    				<div class="footer_info">
	    				<ul>
	    				    <li><a href="http://dshe.gov.bd/" target="_blank"><i class="fa fa-angle-right"></i> শিক্ষা মন্ত্রণালয় </a></li>
	    					<li><a href="http://dhakaeducationboard.portal.gov.bd/" target="_blank"><i class="fa fa-angle-right"></i> ঢাকা শিক্ষা বোর্ড </a></li>	
	    					<li><a href="http://banbeis.gov.bd/" target="_blank"><i class="fa fa-angle-right"></i> ব্যানবেইস </a></li>	
	    					<li><a href="http://www.ebook.gov.bd/" target="_blank"><i class="fa fa-angle-right"></i> ই-বুক </a></li>	
	    				</ul>
    				</div>
    			</div>
    			
<div class="col-md-4">
    				<h3 class="footer_title"> ম্যাপ </h3>
    				<div class="footer_info" style="margin-left: -1%;">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14596.257263998792!2d89.8834345!3d23.8518498!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe1983fbbae0d3%3A0xd1505cf0df6ff203!2z4Kau4Ka54Ka-4Kam4KeH4Kas4Kaq4KeB4KawIOCmrOCmvuCmsuCmv-CmleCmviDgpongpprgp43gppog4Kas4Ka_4Kam4KeN4Kav4Ka-4Kay4Kef!5e0!3m2!1sbn!2sbd!4v1695706651943!5m2!1sbn!2sbd" width="350" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    				</div>
    			</div>
    		</div>
    	</section>    </div>
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
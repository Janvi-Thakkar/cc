<!DOCTYPE html>
<html lang="en">
<head>
	<title>DK Portfolio Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!--  -->
    <link rel="stylesheet" href="css/teams2.css" type="text/css">
    



<style type="text/css">
  footer
  {
    position: relative !important;
  }
  footer h2
  {
    box-shadow: none !important;
    transition: none;
  }
</style>
</head>
<body>
  <?php
    include 'header.php';
  ?>


<div style="">
          <section class="portfolio section" id="portfolio" style="margin-top: 86px;">
	<div class="container">
		<div class="row">
			<div class="section-title padd-15">
				<h2 style="font-style:italic; font-size:45px;">Meet Our Team</h2>
			</div>
		</div>
		<div class="row">
			<div class="portfolio-filter padd-15">
                <h1 style="font-size:30px;">Core Team Of Coders Team</h1>

                </div>
		</div>
          <div class="row">

          	<!----portfolio items----->
          	<div class="portfolio-item padd-15" data-category="web-design">
          		<div class="portfolio-item-inner shadow-dark">
          			<div class="portfolio-img">
          				<img src="images/bhumi1.jpg" alt="portfolio">
          			</div>
          			<div class="portfolio-info">
                        <h4>Bhumi Sharma : President</h4>
                        <div class="icon">
                        	<i class="fa fa-code"></i>
                        </div>
          			</div>
          		</div>
          	</div>

          	<!-----portfolio items end------->


	<!----portfolio items----->
          	<div class="portfolio-item padd-15" data-category="courses">
          		<div class="portfolio-item-inner shadow-dark">
          			<div class="portfolio-img">
          				<img src="images/meet1.jpg" alt="portfolio">
          			</div>
          			<div class="portfolio-info">
                        <h4>Meet Prajapati : Secretary</h4>
                        <div class="icon">
                        	<i class="fa fa-code"></i>
                        </div>
          			</div>
          		</div>
          	</div>

          	<!-----portfolio items end------->



          		<!----portfolio items----->
          	<div class="portfolio-item padd-15" data-category="courses">
          		<div class="portfolio-item-inner shadow-dark">
          			<div class="portfolio-img">
          				<img src="images/arpan1.jpg" alt="portfolio">
          			</div>
          			<div class="portfolio-info">
                        <h4>Arpan Prajapati : Manager</h4>
                        <div class="icon">
                        	<i class="fa fa-code"></i>
                        </div>
          			</div>
          		</div>
          	</div>

          	<!-----portfolio items end------->


          		<!----portfolio items----->
          	<div class="portfolio-item padd-15" data-category="project">
          		<div class="portfolio-item-inner shadow-dark">
          			<div class="portfolio-img">
          				<img src="images/aman.jpg" alt="portfolio">
          			</div>
          			<div class="portfolio-info">
                        <h4>Aman Shaikh : Vice-President</h4>
                        <div class="icon">
                        	<i class="fa fa-code"></i>
                        </div>
          			</div>
          		</div>
          	</div>

          	<!-----portfolio items end------->


          		<!----portfolio items----->
          		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          	<div class="portfolio-item padd-15" data-category="project">
          		<div class="portfolio-item-inner shadow-dark">
          			<div class="portfolio-img">
          				<img src="images/sat.jpeg" alt="portfolio">
          			</div>
          			<div class="portfolio-info">
                        <h4>Satiyak Shaikh : Chairman</h4>
                        <div class="icon">
                        	<i class="fa fa-code"></i>
                        </div>
          			</div>
          		</div>
          	</div>

          	<!-----portfolio items end------->


          		<!----portfolio items----->
          	<div class="portfolio-item padd-15" data-category="courses">
          		<div class="portfolio-item-inner shadow-dark">
          			<div class="portfolio-img">
          				<img src="images/ravi1.jpg" alt="portfolio">
          			</div>
          			<div class="portfolio-info">
                        <h4>Ravi Patel : Treasurer</h4>
                        <div class="icon">
                        	<i class="fa fa-code"></i>
                        </div>
          			</div>
          		</div>
          	</div>

          	<!-----portfolio items end------->

          		<!----portfolio items----->
          	<div class="portfolio-item padd-15" data-category="courses">
          		<div class="portfolio-item-inner shadow-dark">
          			<div class="portfolio-img">
          				<img src="images/sanskriti.jpeg" alt="portfolio">
          			</div>
          			<div class="portfolio-info">
                        <h4>Sanskruti Panchal : Vice-Secretary</h4>
                        <div class="icon">
                        	<i class="fa fa-code"></i>
                        </div>
          			</div>
          		</div>
          	</div>

          	<!-----portfolio items end------->





<!---lightbox---->
<div class="lightbox">
    <div class="lightbox-content">
    <div class="lightbox-close">&times;</div>
    	<img src="images/Capture.png" class="lightbox-img" onclick="nextItem()">
    	<div class="lightbox-caption">
    		<div class="caption-text"></div>
    		<div class="caption-counter"></div>
    	</div>
    </div>
    <div class="lightbox-controls">
    	<div class="prev-item" onclick="prevItem()"><i class="fa fa-angle-left"></i></div>
    	<div class="next-item" onclick="nextItem()"><i class="fa fa-angle-right"></i></div>
    </div>

</div>
<!---lightbox end--->







  <section class="testimonial text-center">
        <div class="container">

            <div class="heading white-heading">
               Testimonials
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="images/sat.jpeg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Dev Kapadia</h4>
                                <span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>

                        </div>
                                 


                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/dev3.jpg" class="img-circle img-responsive" /><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>ABC</h4>
                           <span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>XYZ</h4>
                                                       <span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
                        </div>
                    </div>

                       <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/bhumi1.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>XYZ</h4>
                                                       <span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
                        </div>
                    </div>

<div id="next">
                        <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/dev1.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>XYZ</h4>
                                                       <span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
                        </div>
                    </div>

                       <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/dev1.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>XYZ</h4>
                                                       <span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
                        </div>
                    </div>

                     <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/arpan.jpeg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>XYZ</h4>
                                                       <span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
                        </div>
                    </div>

                     <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="images/ravi1.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>XYZ</h4>
                                                       <span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
<span class="fa fa-star checked" style="font-size:30px;"></span>
                        </div>
                    </div>

</div>


                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

                <div class="btn-container">
<button type="button" id="togggle" style="margin-top:20px;" onclick="read()">Read More</button>
</div>

            </div>
        </div>
    </section>





<div style="margin-top:30px;margin-bottom: 60px;">
	
  <a href="feedback_form.html">

  <button class="glow-on-hover" type="button">Feedback</button>
  </a>
</div>


</div></div>
</section>
</div>


<script src="js/teams.js"></script>
<script src="js/header.js"></script>


	</body>
 
</html>
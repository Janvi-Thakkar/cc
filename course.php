<?php
	  $con=mysqli_connect("localhost","root","","janvi");
	  $sql_select= "SELECT * FROM courses WHERE course_status=1 ORDER BY course_status DESC,courses_id DESC";
	  $data= mysqli_query($con,$sql_select);
	  $courses_data=array();
	  while($row=mysqli_fetch_assoc($data)){
		  $courses_data[]=$row;
	  }
   
    
    $sql_select2= "SELECT * FROM courses WHERE course_status=2 ORDER BY course_status DESC,courses_id DESC";
	  $data2= mysqli_query($con,$sql_select2);
	  $courses_data2=array();
	  while($row2=mysqli_fetch_assoc($data2)){
		  $courses_data2[]=$row2;
	  }

	// course_status=0 -> Completed;
	// course_status=1 -> ongoing;
	// course_status=2 -> upcoming;
	  
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript">
 var framefenster = document.getElementsByTagName("iFrame");
 var auto_resize_timer = window.setInterval("autoresize_frames()", 400);
 function autoresize_frames() {
   for (var i = 0; i < framefenster.length; ++i) {
       if(framefenster[i].contentWindow.document.body){
         var framefenster_size = framefenster[i].contentWindow.document.body.offsetHeight;
         if(document.all && !window.opera) {
           framefenster_size = framefenster[i].contentWindow.document.body.scrollHeight;
         }
         
         framefenster[i].style.height = framefenster_size + 20 + 'px';
       }
   }
 }


 
</script>

   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
         <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
 
    <link rel="stylesheet" type="text/css" href="css/course.css">
    <link rel="stylesheet" type="text/css" href="css/course2.css">
    <title>Coder's Club</title>
    <style type="text/css">
      header,nav,.nav_bar_container,.navbar_img_container img
      {
        line-height: normal !important;
      }
      .navbar_item
      {
        padding :15px !important;
        padding-bottom: 2px !important;
        line-height:normal !important;
        margin: 0px !important;
      }

      .nav_bar_container,.navbar_img_container
      {
        margin: 0px !important;
        padding: 2.8px !important;
      }
      li
      {
        line-height: normal;
      }
      .navbar_logo
      {
        margin: 0px !important;
        line-height: normal;
        padding: 0px !important;
      }
      footer h2
      {
        font-size: 35px !important;
      }
      footer #copyright
      {
        width: 100% !important;
        text-align: center; 
        display: block !important;

      }
      footer .social_media .btn
      {
        text-align: center;
        background-color: #333;
      }
      footer .social_media .btn i
      {
        margin: 0px;
        padding: 0px;
      }
      @media only screen and (max-width: 875px)
      {
        .navbar_item
        {
          padding: 5px !important;
          margin: 0px !important;
          line-height: normal;

        }
      }

#upco_heading
{
  animation: zoomout 3s;
   -webkit-animation: zoomout 3s;
}

#ongo_heading
{
  animation: fadeIn 3.5s ; 
  -webkit-animation: fadeIn 3.5s ; 
}
#comp_heading
{
  animation: zoomout 3s;
   -webkit-animation:  zoomout 3s;
}
#trans_left{
  animation:  rotate 2s;
   -webkit-animation:  rotate 2s;
}
#trans_right{
  animation:translatefromRight 2s;
  -webkit-animation:  translatefromRight 2s;

}
}


@keyframes zoomout
{
  from {transform: scale(2.5);}
  to{transform: scale(1);}
}
@-webkit-keyframes zoomout
{
  from {transform: scale(2.5);}
  to{transform: scale(1);}
}



@keyframes rotate
{
  form{transform: rotateY(0deg);}
  40%{transform: rotateY(90deg);}
 to{transform: rotateY(0deg);}
}
@-webkit-keyframes rotate
{
  form{transform: rotateY(0deg);}
  50%{transform: rotateY(90deg);}
 to{transform: rotateY(0deg);}
}


@keyframes translatefromRight
{
  from{transform: translateX(40%);opacity: 0}
  /*50%{opacity: 0}*/
  to{transform: translateX(0%);opacity: 1}
}
@-webkit-keyframes translatefromX
{
  from{transform: translateX(50%);opacity: 0}
  to{transform: translateX(0%);opacity: 1}
}


@keyframes rotateonX
{
  from{transform: rotateX(-90deg);}
  to{transform: rotateX(0deg);}
}
@-webkit-keyframes rotateonX
{
  from{transform: rotateX(-90deg);}
  to{transform: rotateX(0deg);}
}


@keyframes translatefromLeft
{
  from{transform: translateX(-40%);opacity: 0}
  to{transform: translateX(0%);opacity: 1}
}
@-webkit-keyframes translatefromLeft
{
  from{transform: translateX(-20%);opacity: 0}
  to{transform: translateX(0%);opacity: 1}
}

@keyframes fadeIn
{
  from{opacity: 0}
  to{opacity: 1}
}
@-webkit-keyframes fadeIn
{
  from{opacity: 0}
  to{opacity: 1}
}
    </style>
    </head>

    <body>
      <?php
            include 'header.php';
        ?>

        

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
<div class="main-div">
  <div id="content">
    <h1 class="ml9">
     <span
         class="txt-rotate letters"
         data-period="2000"
        data-rotate='[ "Learn With Fun","Data Science", "Python Programming","C Programming", "Backend Development", "Frontend Development", "Web Development" ]'></span>
  
     </span>
    </h1>
  </div>
</div>
<div class="blink_me title1 "><h1>Find Suitable Course for You!!</h1></div>
<br>
<h1 class="upco_heading" >Upcoming Courses</h1>
<div class="row">
<?php
foreach($courses_data2 as $key=>$value){
				?>

  <div class="col-lg-4 col-md-6 col-sm-6 trans_right" >
    <div class="product-card">
        <div class="card  z-depth-4">
        <div class="head">
        <div class="number-box">
							<span>
                                 <?php  echo $value['course_title'] ?> 
                            </span>
						</div>
                        </div>
            <div class="card-image">
                <a href="#" class="btn-floating btn-large price waves-effect waves-light brown darken-3"><?php  switch($value['price']){
								 
                 case 0:echo "Free";
                break;
              case NULL:echo "Free ";
                break;
              default:echo $value['price'] ."RS.";
                break;
                }
            ?> </a>
                <img src="<?php  echo $value['image'] ?>" style="height:250px" alt="Course">
                <span class="card-title"><span><h4>
			 				<?php  switch($value['course_status']){
								 
							     case 1:echo "Started On:01/01/2020 ";
									break;
								case 2:echo "Starting From:01/01/2020 ";
									break;
								default:echo "Course";
									break;
							    }
							?>
			 			 </h4></span></span>
            </div>
           
            <div class="card-content">
                <div class="row">
                    <div class="col s12">
                    <p > <?php  echo $value['description'] ?> </p>
			
			<br>
                <ul>
                <h4 class="subtitles" style="color:blue;">What will You Learn?</h4>
                     <li><h6><?php  echo $value['benefits'] ?></h6></li>
                    
		</ul>
        <h4 class="subtitles" style="color:blue;">Prerequisites</h4>
        <ul>
                    <li><h6><?php  echo $value['prerequisites'] ?></h6></li>
        </ul>

		<h5 class="subtitles" style="color:blue;">Students Enrolled: <?php  echo $value['registered_students'] ?> </h5> 
             
            
                    
                    
                </div>
                
                <br>
               
                <div style="position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    color: #fff;
    padding:5px;
    width:100%">
    <div class="row" style="">
               <!-- <a href="course_form.php" style="text-decoration:none" ><span class=" first" > 
			   Enroll Now   
    </span></a> -->
    <form action="course_form.php" method="post"  >
    <input type="hidden" name="course_id" value="<?php  echo $value['course_id'] ?>">
    <input type="hidden" name="course_price" value="<?php  echo $value['price'] ?>">
    <input type="submit" name="enroll" class="first" value="Enroll Now">
    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php
				  
                }
   
                ?>

              </div>
              </div>

<br>
<br>



<h1 class="ongo_heading" >OnGoing Courses</h1>

              <div class="row">
<?php
foreach($courses_data as $key=>$value){
				?>

  <div class="col-lg-4 col-md-6 col-sm-6 trans_left" >
    <div class="product-card">
        <div class="card  z-depth-4">
        <div class="head">
        <div class="number-box">
							<span>
                                 <?php  echo $value['course_title'] ?> 
                            </span>
						</div>
                        </div>
            <div class="card-image">
                <a href="#" class="btn-floating btn-large price waves-effect waves-light brown darken-3"><?php  switch($value['price']){
								 
                 case 0:echo "Free";
                break;
              case NULL:echo "Free ";
                break;
              default:echo $value['price'] ."RS.";
                break;
                }
            ?> </a>
                <img src="<?php  echo $value['image'] ?>" style="height:250px" alt="Course">
                <span class="card-title"><span><h4>
			 				<?php  switch($value['course_status']){
								 
							     case 1:echo "Strated On:01/01/2020 ";
									break;
								// case 2:echo "Starting From:01/01/2020 ";
								// 	break;
								default:echo "Course";
									break;
							    }
							?>
			 			 </h4></span></span>
            </div>
           
            <div class="card-content">
                <div class="row">
                    <div class="col s12">
                    <p > <?php  echo $value['description'] ?> </p>
			
			<br>
                <ul>
                <h4 class="subtitles" style="color:blue;">What will You Learn?</h4>
                     <li><h6><?php  echo $value['benefits'] ?></h6></li>
                    
		</ul>
        <h4 class="subtitles" style="color:blue;">Prerequisites</h4>
        <ul>
                    <li><h6><?php  echo $value['prerequisites'] ?></h6></li>
        </ul>

		<h5 class="subtitles" style="color:blue;">Students Enrolled: <?php  echo $value['registered_students'] ?> </h5> 
             
          
                    
                    
                </div>
                
                <br>
               
                <div style="position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    color: #fff;
    padding:5px;
    width:100%">
    <!-- <div class="row" style="">
               <a href="course_form.php" style="text-decoration:none" ><span class=" first" > 
			   Enroll Now   
    </span></a>
                </div> -->
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<?php
				  
                }
   
                ?>

              </div>
              </div>
         
              <h1 class="comp_heading" >Completed Courses</h1>
 <iframe id="myIframe" frameborder="0"   src="completed_course.php" style="width:100%;overflow-y:hidden; seamless:seamless; scrolling=no;">


</iframe> 
<?php
  include 'footer.php';
 ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    
            <script type="text/javascript" src="js/courses.js"></script>
            <script type="text/javascript" src="js/course2.js"></script>
            <script src="js/header.js"></script>
<script>

$(document).on("scroll", function (s) {
  // navBarScrollEffect();
  // ZoomBlocks();
  animate_blocks("ongo_heading", "ongo_heading");
  animate_blocks("upco_heading", "upco_heading");
  animate_blocks("comp_heading", "comp_heading");
  animate_blocks("trans_right", "trans_right");
  animate_blocks("trans_left", "trans_left");
});

function animate_blocks(block_class, animation_id) {
  var scroll = $(document).scrollTop();
  var top = $("." + block_class).position().top;
  var winow_height = $(window).height();
  var page_position = winow_height + scroll - 150;
  var top = top;
  if (page_position > top) {
    $("." + block_class).attr("id", animation_id);
  } else {
    $("." + block_class).attr("id", "");
  }
}

  </script>
           
    </body>
    </html>

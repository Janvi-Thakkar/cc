<!DOCTYPE html>
<html>
<head>
	<title>Coders Club</title>

<link rel="icon" type="text/css" href="images/logo.png">

<link href="https://fonts.googleapis.com/css2?family=Noticia+Text:ital@1&display=swap" rel="stylesheet">
 <style type="text/css">
  *
  {
    margin:0px;
    padding: 0px;
    box-sizing: border-box;

  }

    ::-webkit-scrollbar {
      width: 10px;
      position: absolute;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      
      background-color: transparent;
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: rgb(0,0,255,.5); 
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #b30000; 
    }
    main
  {
    margin: 0px;
    padding: 0px;
    transition: all 1s;
    overflow-x: hidden;
    width: 100%;
  }

  /*-------------------------------main display part----------------------------------*/
  @font-face {
  font-family: display_font;
  src: url('css/bungee.ttf');
}
   #display_image
   {
    height: 100vh;
    width:100%;
   }
   .display_image_container
   {
     height: 100vh;
    width:100%;
    position: relative;
    background: url('images/display_image.jpg') no-repeat center;
    background-size: 100% 100%;
    /*filter: brightness(50%);*/
    filter: grayscale(100%);
     background-color: black;

   }
   #display_title
   {
   font-family: 'display_font', cursive;
   font-size: 7vw;
    /*color: white;*/
    /*text-shadow: 0px 0px 5px black,0px 0px 5px black,0px 0px 5px black;*/
    position: absolute;
    width: 100%;
    transition: transform 1s;
    background: rgb(14,84,230);
background: linear-gradient(171deg, rgba(14,84,230,1) 25%, rgba(232,233,237,1) 34%, rgba(13,87,235,1) 43%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
    text-align: center;
    top: 35%;
    left: 0;
   }
   .display_btn
   {
    width: 35px;
    height: 35px;
    cursor: pointer;
    display: inline-block;
   }
   #display_sub_title
   {
    font-family: cursive;
    font-size: 30px;
    width: 100%;
    
    color: blue;
    text-shadow: 2px 2px black,2px 2px black;
    text-align: center;
    display: block;
  }
  #display_sub_title span
  {
    padding: 5px;
    padding-top:2px;

    box-shadow: 3px 3px 2px 1px blue; 
    background-color: white;
    margin: 0px;
    color: blue;
  }
  #display_social
  {

    width: 100%;
    display: block; 
  }
  .social_btn
  {
    width: 100%;
    height: 100%;
    border-radius: 100px;
    border:1px solid black;
  }
  .social_btn:hover
  {
    width: 120%;
    height: 120%;
    box-shadow: 2px 2px 5px white,-2px -2px 5px white;
  }
 
   @media only screen and (max-width: 768px)
   {
    .display_image_container
    {
      background-size: 200% 100%;
    }
    #display_image
    {
      height: 100vh;
    }
     #display_title
     {
      font-size: 60px;
      width: 100%;
      left: 0;
     }
      #display_sub_title
      {
        font-size: 20px;
      }
   }
   
  /*-----------------------------------------------Intro part-------------------------------------------------*/
  .intro_container
  {
    margin: 40px auto;
    min-height: 420px;
    width: 80%;
    margin-right: auto;
    margin-left: auto;
    transition: width 1s;
    padding: 5px;
    /*box-shadow: 2px 2px 10px black;*/ 
    
      

    overflow-x: hidden;
  }
  .intro_heading
  {
    text-align: center;
    font-size: 50px;
    font-family: 'Trade Winds',cursive;

  }
  .intro_logo img
  {
    width: 300px;
    height: 300px;
    margin-top: 50px;
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
  .intro_logo
  {
    margin: 10px;
    margin-right: 20px;
    float: left;  
  }
  .intro_content
  {
    width: 90%;
  }
  .intro_content p
  {
    font-size: 25px;
    font-family: 'Noticia Text', serif;
    overflow-wrap: break-word;
    padding: 8px;
  }
  #view_more_btn
  {
    display: none;
  }
  
   @media only screen and (max-width: 905px)
   {
    
    .intro_logo
    {
      width: 100%;
      float: none;
    }
    .intro_logo img
    {
      width: 200px ;
      height: 200px;

    }
    .intro_content
    {
      width: 100%;
    }
    .view_more
    {
      display: none;
    }
    #view_more_btn
    {
      width: 100%;
      text-align: center;
      display: block;
      font-size: 30px;
     }
   }
   /*-------------------------mission part---------------------------------------------*/
.mission_container
{
  margin: 40px auto;

  min-height: 320px;
  transition: width 1s;
  width: 80%;
  margin-right: auto;
  margin-left: auto;
  padding: 5px;
  /*box-shadow: 2px 2px 10px black;*/
  overflow-x: hidden;
  overflow-y: hidden;
  b
     
}
.mission_logo img
{
  height: 300px;
  width: 400px;
  margin-left: auto;
  margin-right: auto;
  display: block;
}
.mission_logo
{
  margin: 10px;
  margin-right: 20px;
  margin-left: 20px;
  float: right;  
}
.mission_heading
{
  text-align: center;
  font-size: 50px;
  font-family: 'Trade Winds',cursive;
}
.mission_content p
{
  font-size: 25px;
  font-family: 'Noticia Text', serif;
  overflow-wrap: break-word;
  padding: 8px;
}


@media only screen and (max-width: 996px)
{
  
  .mission_logo
  {
    width: 100%;
    float: none;
  }
  .mission_logo img
  {
     width: 300px ;
      height: 200px;
  }
  .mission_content
  {
    width: 100%;
  }
}
/*-----------------------------------------------vision part---------------------------------------------*/
.vision_container
{
  margin: 40px auto;
  width: 80%;
  transition: width 1s;
  margin-right: auto;
  margin-left: auto;
  min-height: 320px;
  padding: 5px;
  overflow-x: hidden;
  overflow-y: hidden;
  bo
      
  /*box-shadow: 2px 2px 10px black;*/
}
.vision_logo img
{
  height: 300px;
  width: 300px;
  border-radius: 100000000px;
  margin-left: auto;
  margin-right: auto;
  display: block;
}
.vision_logo
{
  margin: 10px;
  margin-right: 20px;
  margin-left: 20px;
  float: left;  
}
.vision_heading
{
  text-align: center;
  font-size: 50px;
  font-family: 'Trade Winds',cursive;
}
.vision_content p
{
  width: 90%;
  font-size: 25px;
  font-family: 'Noticia Text', serif;
  overflow-wrap: break-word;
  padding: 8px;
}


@media only screen and (max-width: 970px)
{
 

  .vision_logo
  {
    width: 100%;
    float: none;
  }
  .vision_logo img
  {
     width: 200px ;
      height: 200px;
  }
  .vision_content p
  {
    width: 100%;
  }
}

@media only screen and (max-width: 857px)
  {
    .intro_container,.vision_container,.mission_container
    {
      width: 95%;
      height: auto;
     
    }
  }
/*--------------------------------------------------------------------------------animation part----------------------------------------------------------------------*/
#intro_header
{
  animation: zoomout 1.5s ; 
  -webkit-animation: zoomout 1.5s ; 
}
#intro_logo
{
  animation: rotate 1s;
  -webkit-animation: rotate 1s;
}
#intro_content,#vision_content
{
  animation: translatefromRight 2s;
  -webkit-animation: translatefromRight 2s;
}
#mission_logo
{
  animation: zoomout .5s ;
   -webkit-animation: zoomout .5s ;
}
#mission_heading
{
  animation: rotateonX 2s;
   -webkit-animation: rotateonX 2s;
}
#mission_content,#vision_heading
{
  animation: translatefromLeft 2s;
   -webkit-animation:  translatefromLeft 2s;
}
#vision_logo
{
  animation :fadeIn 3s;
   -webkit-animation:fadeIn 3s;
}



@keyframes zoomout
{
  from {transform: scale(2);}
  to{transform: scale(1);}
}
@-webkit-keyframes zoomout
{
  from {transform: scale(2);}
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
  from{transform: translateX(20%);opacity: 0}
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
  from{transform: translateX(-20%);opacity: 0}
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
 <input type="hidden" id="hidden_navid" value="0">

 <main>
     <!-- main display -->
    <div style="position: relative;">
      <div class="display_image_container" id="display_image">
      </div>
      <p class="display_title" id="display_title">Coders Club<br>
      <span id="display_sub_title"><span>improving your lives through learning</span></span>
      <span id="display_social">
        <a href=""><span class="display_btn"><img src="images/facebook.jpg" class="social_btn"></span></a>
        <a href=""><span class="display_btn"><img src="images/instagram.png" class="social_btn"></span></a>
        <a href=""><span class="display_btn"><img src="images/telegram.jpg" class="social_btn"></span></a>
        <a href=""><span class="display_btn"><img src="images/linked.png" class="social_btn"></span></a>
        <a href=""><span class="display_btn"><img src="images/utube.jpg" class="social_btn"></span></a>
      </span>
      </p>
    </div>
    <!-- club introduction -->
    <div class="intro_container zoom_container" >
     
      <div class="intro_logo" style="margin-top: 30px;">
        <img src="images/logo.png">
      </div>
      <div class="intro_content" style="clear: none;">
          <h1 class="intro_heading" >Introduction</h1>
        <p style="text-align: center;">
          Coders Club was founded by the team with vision to provide new opportunities to anyone by providing life-transforming learning experience.<br>
          It is now a leading Club of LDCE and growing very rapidly.<br>
          Till now the club has reached over <b>250+ </b>
          learners across different colleges to learn future skills.<br>
          <span class="view_more" >
           Our main motto is by connecting you with th best instructors & guides , coders-club helps you to reach your goals and pursye your dreams.
          </span>
        </p>
      </div>

      <div id="view_more_btn" onclick="viewMore()">
        <i class="fa fa-angle-double-down" id="down"></i>
        <i class="fa fa-angle-double-up" id="up" style="display: none;"></i>
      </div>
    </div>
    <hr style="width: 80%;background-color: grey;margin: 5px auto;height: 2px;">
<!-- ----------------------------------------------------mission part------------------------------------------------ -->
    <div class="mission_container zoom_container">
      <div class="mission_logo">
        <img src="images/mission.png">
      </div>
      <div class="mission_content" style="clear: none;">
         <h1 class="mission_heading" >Mission</h1>
        <p style="text-align: center;">
         Our <b>Mission</b> is to increase access to high-quality education ,<br> enhance teaching and leaving on campus and online and advance learning<br> through reserch for everyone.
        </p>
      </div>
    </div>
<hr style="width: 80%;background-color: grey;margin: 5px auto;height: 2px;">
   <!-- ------------------------------------------------------ vision part---------------------------------------------------------- -->
   <div class="vision_container zoom_container">
      <div class="vision_logo">
        <img src="images/vision.jpg">
      </div>
      <div class="vision_content" style="clear: none;">
         <h1 class="vision_heading" >Vision</h1>
        <p style="text-align: center;">
        Our <b>Vision</b> is to create opportunities and a world where anyone , anywhere can leave and transform his/her life by accessing the best<br> effective and 
        innovative learning experience.
        </p>
      </div>
    </div>
 </main>

 <?php
  include 'footer.php';
 ?>

 
<script type="text/javascript">
  //on start of page
  var nav_val = $('#hidden_navid').val();
  $(document).ready(function()
  {
    // if($(window).width()<=500)
    var scroll = $(document).scrollTop();
     var img_height = $('#display_image').height();
    if(scroll<=img_height-100)
    {
      $('.nav_bar_container').css({'position':'fixed','backgroundColor':'rgb(0,0,0,0.0)'}); 
      $('.navbar_menu').css({'backgroundColor':'rgb(0,0,0,0.0)','border':'none'});
      $('.navbar_item').css({'text-shadow':'2px 2px 10px blue'});
      $('.navbar_item').eq(nav_val).css({'text-shadow':'2px 2px 8px rgb(0,255,0),2px 2px 8px rgb(0,255,0)','fontSize':'20px'});
    }
    

  });

  //navbar hover effect
  var hover_shadow;
  $('.navbar_item').on('mouseenter',function(e){
    hover_shadow = $(this).css('text-shadow');
    $(this).css('text-shadow','2px 2px 10px red');
  });
  $('.navbar_item').on('mouseleave',function(e){
    $(this).css('text-shadow',hover_shadow);
  });
  //for mobile view nav bar icon
   $('#navbar_bar_icon').click(function(){
    if($('.navbar_menu').css('transform')=='matrix(1, 0, 0, 1, -250, 0)')
    {
      $('.navbar_menu').css('transform','matrix(1, 0, 0, 1, 0, 0)'); 
      $('#display_title').css('transform','rotateY(90deg)');
      
    }
    else if($('.navbar_menu').css('transform')=='matrix(1, 0, 0, 1, 0, 0)')
    {
      $('.navbar_menu').css('transform','matrix(1, 0, 0, 1, -250, 0)'); 
      $('#display_title').css('transform','rotateY(0deg)');
    }
  });

  //scrolll function
  $(document).on('scroll',function(s){
       navBarScrollEffect();
       // ZoomBlocks();
       animate_blocks('intro_heading','intro_header');
       animate_blocks('intro_logo','intro_logo');
       animate_blocks('intro_content p','intro_content');
       animate_blocks('mission_logo','mission_logo');
       animate_blocks('mission_heading','mission_heading');
       animate_blocks('mission_content p','mission_content');
       animate_blocks('vision_logo','vision_logo');
       animate_blocks('vision_heading','vision_heading');
       animate_blocks('vision_content p','vision_content');
  });

  function animate_blocks(block_class,animation_id)
  {
    var scroll = $(document).scrollTop();
    var top = $('.'+block_class).position().top;
    var winow_height = $(window).height();
    var page_position = winow_height + scroll-150;
    var top = top;
    if(page_position>top)
    {
      $('.'+block_class).attr('id',animation_id);
    } 
    else
    {
      $('.'+block_class).attr('id','');
    }
  }

  function ZoomBlocks()
  {
     var scroll = $(document).scrollTop();
     var height = $(window).height();
     var window_width = $(window).width();
     height=height/2;
     var scrollPos = scroll+height;
     for(var i=0;i<3;i++)
     {
      var top = $('.zoom_container').eq(i).position().top;
      var con_height = $('.zoom_container').height();
      if(scrollPos>=top && scrollPos<=top+height)
      { 
        $('.zoom_container').eq(i).css('width','90%');
      }
      else
      {
        if(window_width<=857)
        {
          $('.zoom_container').eq(i).css('width','95%');
        }
        else
        {
          $('.zoom_container').eq(i).css('width','80%');  
        }
        
      } 
     }
     
  }
// nav bar effects function
function navBarScrollEffect()
{
  var img_height = $('#display_image').height();
   var scroll = $(document).scrollTop();
   if(scroll>=img_height)
   {
     $('.nav_bar_container').css({'position':'fixed','backgroundColor':'#333'});
     $('.navbar_item').css({'text-shadow':'none'});
      $('.navbar_item').eq(nav_val).css({'text-shadow':'2px 2px 10px rgb(0,255,0),2px 2px 10px rgb(0,255,0),2px 2px 10px rgb(0,255,0) ','fontSize':'20px'});

     if($(window).width()<768)
     {
      $('.navbar_menu').css({'backgroundColor':'#333','border':'1px solid white'});
     }
     else
     {
      $('.navbar_menu').css({'backgroundColor':'#333','border':'none'});
     }
     
   }
   else
   {
    $('.navbar_item').css({'text-shadow':'2px 2px 10px blue'});
    $('.navbar_item').eq(nav_val).css({'text-shadow':'2px 2px 10px rgb(0,255,0),2px 2px 10px rgb(0,255,0),2px 2px 10px rgb(0,255,0) ','fontSize':'20px'});
    if(scroll<=100)
    {
     $('.nav_bar_container').css({'position':'fixed','backgroundColor':'rgb(0,0,0,.0)'});
     $('.navbar_menu').css({'backgroundColor':'rgb(0,0,0,0.0)','border':'none'});
    }
    else
    {
      $('.nav_bar_container').css({'position':'absolute','backgroundColor':'rgb(0,0,0,.0)'});
      $('.navbar_menu').css({'backgroundColor':'rgb(0,0,0,0.0)','border':'none'});
    }
   }
}

function viewMore(e)
{
  $('.view_more').slideToggle();
  if($('#up').css('display')=="none")
  {
    $('#up').css('display','block');
    $('#down').css('display','none');

  }
  else
  {
    $('#up').css('display','none');
    $('#down').css('display','block');
  }
}
 
</script>

</body>

</html>

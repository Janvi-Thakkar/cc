<?php 
	$con = mysqli_connect('localhost','root','','janvi');
	$sql_select = "SELECT * FROM activities";
	$get_data = mysqli_query($con,$sql_select);
	$activities = array();
	while ($row = mysqli_fetch_assoc($get_data)) 
	{
		$activities[] = $row;
	}
 
	if(isset($_POST['SUBMIT']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$number=$_POST['number'];
		$message=$_POST['message'];
	
	$sql="INSERT INTO activity_form(NAME,EMAIL,NUMBER,MSG) VALUES('$name','$email','$number','$message')";
	$query=mysqli_query($con,$sql);
    
    if($query)
    {
    	header("location:activity_form.php");
    }
    }
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">

		*
		{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;

		}
		.heading_act
		{
          margin-top: 7%;
          width: 100%;
          display: block;
          text-align: center;
          font-weight: bolder;
		}
		@media (max-width: 400px)
		{
			.heading_act
		    {
               margin-top: 20%;
               margin-bottom: 2%;
               font-weight: bolder;
               align-items: center;
               justify-content: center;
               text-align: center;
               font-size: 25px !important;
		    }

		}
		
		.body_activity
		{
			/*background-image: linear-gradient(rgb(0, 0, 153),rgb(0, 0, 102));*/
			background-color: #F0F8FF;
			/*margin-bottom: 100px;*/
		}
		.main_form
		{
			position: relative;
			margin-right: 0px;
			width: 100%;
			margin-top: 0px;
		}
		@media (max-width: 1200px)
		{
            .main_form
		   {
		   	margin-top: 20px;
		   }
		}

		@media (max-width: 600px)
		{
			.main_form
			{
			   margin-top: 40%;	
			}
		}
		@media (max-width: 765px)
		{
			.main_form
			{
			   margin-top: 35%;	
			}
		}

		.field
		{
			background-color: rgb(249,249,249);
			height: 40px;
			width: 100%;
			border : 1px solid #d9d9d9;
			padding: 5px;
		}
		textarea {
			resize: none;
			width: 100%;
		}
		.field:hover 
		{
			background-color: white;
			border: 1px solid #ffcc00;
		}
	     .field:focus
		{
			background-color: white;
			border: 1px solid #ffcc00;
			outline: 0px;
		}
		.field_msg:hover 
		{
			background-color: white;
			border: 1px solid #ffcc00;
		}
		.field_msg:focus
		{
			background-color: white;
			border: 1px solid #ffcc00;
			outline: 0px;
		}
		.rows
		{
			
			background-color: #fbfbfb;
			padding : 20px;
		    	/*margin-top: 500px;*/
			border: 1px solid black;
			/*padding-left: 40px;*/
        }
		.form-row
		{
			margin-bottom: 5%;
			/*background-color: #d6d6c2;*/


		}
		input[type=submit]
		{
			border-radius: 25px;
	        background-color: #ffcc00;
	        color: black;
	        border: none;
	        padding: 15px 30px;
	        cursor: pointer;
	        float: center;
	        margin-bottom: 20px; 
	        outline-style: none;
		}
		input[type=submit]:active
		{
			background-color: black;
			color: white;

		}
		input[type=submit]:hover
		{
			background-color: black;
			color: white;

		}

		
		.field_msg
		{
			background-color: rgb(249,249,249);
			border: 1px solid #d9d9d9;
		}









 .cards-wrapper {
  position: relative;
  height: 100%;
  list-style: none;
  margin: 0;
  padding: 0%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.card-wrapper {
  display: block;
  float: left;
  position: relative;
  margin: 0;
  width: 100%;
  /*height: 300px;*/
  padding: 0 0 100%;
  perspective: 700px;
}
.card-object {
  color: #FFF;
  display: block;
  float: left;
  position: absolute;
  top: 6%;
  left: 6%;
  width: 88%;
  height: 88%;
  transform-style: preserve-3d;
  box-shadow: 2px 2px 10px black;
}

<?php
	foreach ($activities as $key => $value) {
?>
.card-object.card-<?php echo $key+1; ?> .front {
  background: #222222 url("<?php echo $value['image']; ?>") 90% 35% no-repeat;
  background-size: 115%;
}
.card-object.card-<?php echo $key+1; ?> .back .img-wrapper {
  background: transparent url("<?php echo $value['image']; ?>") 100% 100%;
  background-size: 160%;
}
.card-object.card-<?php echo $key+1; ?> .back .avatar {
  background: transparent url("<?php echo $value['image']; ?>") 40% 20%;
  background-size: 130% 130%;
}

<?php		
	}

?>




.card-object.flip-in.animate_card_odd {
  animation: flip-2-hor-top-fwd 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) both;
}
.card-object.flip-in.animate_card_even {
  animation: flip-2-hor-bottom-fwd 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) both;
}
 .card-object.flip-out.animate_card_odd {
  animation: flip-2-hor-top-fwd 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) reverse both;
}
.card-object.flip-out.animate_card_even {
  animation: flip-2-hor-bottom-fwd 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) reverse both;
}
.card-object-hf .back {
  transform: rotateX(180deg);
}
.face {
  color: #fff;
  text-decoration: none;
  display: flex;
  justify-content: center;
  align-items: flex-end;
  flex-wrap: wrap;
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}
.face.front {
  z-index: 20;
  overflow: hidden;
  background-repeat: no-repeat;
  background-position: 50% 50%;
}
.face.front::before {
  position: absolute;
  top: -1px;
  right: -1px;
  bottom: -1px;
  left: -1px;
  content: "";
  background: linear-gradient(45deg, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.5) 40%, rgba(0, 0, 0, 0.1) 100%) no-repeat;
  opacity: .7;
  z-index: 20;
  transition: opacity .2s ease;
}
.face.front::after {
  position: absolute;
  top: 7%;
  right: 7%;
  bottom: 7%;
  left: 7%;
  border: 1px solid rgba(255, 255, 255, 0.35);
  z-index: 100;
  content: "";
}
.face.front .title-wrapper {
  position: absolute;
  bottom: 3%;
  left: 25%;
  right: 25%;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  flex-wrap: wrap;
  z-index: 100;
  transform: translateY(0);
  transition: transform .28s ease;
}
.face.front .title-wrapper .title {
  position: relative;
  font-family: 'Archivo Black', sans-serif;
  width: 100%;
  text-transform: none;
  font-size: 30px;
  line-height: 1;
  opacity: .8;
  transition: opacity .2s ease;
}
.face.front .title-wrapper .title::after {
  display: block;
  margin: 7% auto 8% auto;
  width: 100%;
  height: 1px;
  content: "";
  background-color: #fff;
  opacity: .5;
  transform: scale(0);
  transition: transform .15s;
}
.face.front .title-wrapper .subtitle {
  font-size: 15px;
  line-height: 1;
  letter-spacing: 1px;
  text-transform: uppercase;
  opacity: 0;
  transition: opacity .15s;
}
.face.front:hover::before {
  opacity: .9;
}
.face.front:hover .title-wrapper {
  transform: translateY(-50%);
}
.face.front:hover .title-wrapper .title {
  opacity: 1;
}
.face.front:hover .title-wrapper .title::after {
  transform: scale(1);
  opacity: .5;
  transition-delay: .15s;
  transition-duration: .2s;

}
.face.front:hover .title-wrapper .subtitle {
  opacity: 1;
  transition-delay: .2s;
  transition-duration: .2s;
}
.face.back {
  color: #222;
  background: #fff;
  z-index: 10;
}
.info-container {
  position: absolute;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  align-items: flex-start;
  top: 6%;
  right: 6%;
  bottom: 6%;
  left: 6%;
  padding: 0;
}
.img-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 38%;
  z-index: 10;
}
.img-wrapper::after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(14, 6, 70, 0.6);
  opacity: .7;
}
.avatar {
  position: absolute;
  left: 50%;
  height: 68%;
  width: 25.84%;
  display: block;
  border-radius: 50%;
  margin-top: 25.08%;
  margin-left: -12.92%;
  background-color: #fff;
  border: 3px solid #FFF;
  z-index: 20;
}
.info-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  position: absolute;
  top: 50.92%;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 4% 15% 15%;
}
.info-title {
  font-size: 20px;
  font-family: 'Archivo Black', sans-serif;
  text-align: left;
  padding: 0;
  margin: 0;
  text-align: center;
  display: block;
  width: 100%;
}
.info-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 5% 0 0;
  margin: 8% 0 0;
  border-top: 1px solid #e0e0e0;
}
.info-content-item {
  color: #222;
  font-size: 13px;
  line-height: 1;
  text-align: center;
  display: inline-block;
  padding: 0;
  margin: 0;
  text-transform: none;
  color: #4d4d4d;

  margin-right: 2px;
}
.info-content-item span {
  display: block;
  font-weight: bold;
  font-size: 12px;
  margin-top: 7px;
  text-transform: none;
  color: #222;
}
.info {
  position: absolute;
  bottom: 30px;
  left: 5%;
  right: 5%;
  font-size: 1em;
  text-align: center;
}
.info a {
  color: #8c0f8c;
  text-decoration: none;
}
.info a:hover {
  text-decoration: underline;
}
/* ----------------------------------------------
 * Generated by Animista on 2017-21-5 2:48:23
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */
/**
 * ----------------------------------------
 * animation flip-2-hor-top-fwd
 * ----------------------------------------
 */
@keyframes flip-2-hor-top-fwd {
  0% {
    transform: translateY(0) translateZ(0) rotateX(0);
    transform-origin: 50% 0%;
  }
  100% {
    transform: translateY(-100%) translateZ(100px) rotateX(-180deg);
    transform-origin: 50% 100%;
  }
}
/**
 * ----------------------------------------
 * animation flip-2-hor-bottom-fwd
 * ----------------------------------------
 */
@keyframes flip-2-hor-bottom-fwd {
  0% {
    transform: translateY(0) translateZ(0) rotateX(0);
    transform-origin: 50% 100%;
  }
  100% {
    transform: translateY(100%) translateZ(100px) rotateX(180deg);
    transform-origin: 50% 0%;
  }
}
footer
{
	margin-top: 20px !important;
}

	</style>
	
</head>
<body class="body_activity">
		<?php
	include 'header.php';
	?>
	<br>
	<main style="margin-top: 90px;">
		
	
	
	
		<div class="container-fluid" style="">
			<div class="row" style="margin-top: 30px;">
				<div class="col-lg-8">
					<h1 class="heading_act" style="margin-top: 0px;">Activities Done By Us</h1>
					<div class="row">
						<?php
							foreach($activities as $key => $value) {
						?>
							<div class="col-sm-6 col-md-4 bg-dark">
								<div class="card-wrapper">
							        <div class="card-<?php echo $key+1 ?> <?php if($key+1%2==0){echo 'animate_card_even';}else{echo 'animate_card_odd';} ?> card-object card-object-hf">
							            <a class="face front" href="#">
							                <div class="title-wrapper">
							                    <div class="title" style="color: white;font-weight: bolder;" ><?php echo $value['activity_short_name'] ?></div>
							                    <div class="subtitle" style="color: white;font-weight: bolder;"><?php echo $value['activity_form'] ?></div>
							                </div>
							            </a>
							            <a class="face back" href="#">
							                <div class="img-wrapper">
							                    <div class="avatar"></div>
							                </div>
							                <div class="info-wrapper">
							                    <div class="info-title"><?php echo $value['activity_full_name'] ?></div>
							                    <ul class="info-content">
							                        <li class="info-content-item col-3">Participants <span><?php echo $value['participants'] ?></span></li>
							                        <li class="info-content-item col-3">Rounds <span> <?php echo $value['rounds'] ?></span></li>
							                        <li class="info-content-item col-3">Winners <span><?php echo $value['winners'] ?></span></li>
							                    </ul>
							                </div>
							            </a>
							        </div>
							    </div>
							</div>
							<?php
								}
							?>
	
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 offset-3 col-sm-offset-3 col-lg-offset-0 col-8" >
					<div class="main_form" >
						<form method="POST" action="#" style="" >
								
	
							<div class="rows">
	
								<h3 style="font-size: 33px;line-height: 43px;text-align: center">Contact Us For The Best Learning</h3>
								<p style="text-align: center;">Please call or email contact form and we will be happy to teach you.</p>
	
								<div class="first_row">
									<div class="form-row">
									<span><input type="text" name="name" class="field" value="" size="40"  placeholder="Name:" required="required" /></span>
									<p class="val" id="f1"></p>
									</div>
								</div>
								<div>
									<div class="form-row">
										<span><input type="email" name="email" class="field" value="" size="40" placeholder="Email Address:" required="required" /></span>
										<p id="f2"></p>
									</div>
								</div>
								<div >
									<div class="form-row">
										<span><input type="tel" name="number" class="field" value="" size="40" placeholder="Phone Number:" required="required" maxlength="10" /></span>
										<p id="f3"></p>
									</div>
								</div>
								<div >
									<div class="form-row">
										<span><textarea name="message" class="field_msg" cols="40" rows="10" placeholder="Write your message here..."></textarea></span>
									</div>
								</div>
								<div>
									<div>
										<input type="submit" name="SUBMIT" value="SEND MESSAGE"  onclick="check(this.form);" />
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>

	</main>

		
	<script type="text/javascript">

			function check(form) 
			{
				
				var a=form.name.value;
		        var b=form.email.value;
				var c=form.number.value;

				
				if(a=="")
				{
					document.getElementById('f1').innerHTML="<p style='color:red;'>Enter your name</p>";
				}
				else
				{
					document.getElementById('f1').innerHTML="";
				
			    }
			    
			     if(b=="")
				{
					document.getElementById('f2').innerHTML="<p style='color:red;'>Enter your email id</p>";
				}
				else
				{
					document.getElementById('f2').innerHTML="";
				
			    }

			     if(c=="")
				{
					
					document.getElementById('f3').innerHTML="<p style='color:red;'>Enter your Mobile no</p>";
				}
				else
				{
			
					document.getElementById('f3').innerHTML="";
				
			    }
		
			}

			var $cards = $('.card-object'),
		    $faceButtons = $('.face');

		$faceButtons.on('click', flipCard);

		function flipCard(event) {
		  event.preventDefault();
		  
		  var $btnFace = $(this),
		      $card = $btnFace.parent('.card-object');
		  
		  if( $card.hasClass('flip-in') ) {
		    closeCards();
		  } else {
		    closeCards();
		    openCard($card);
		  }
		  
		}

		function closeCards() {
		  $cards.each( function() {
		    $(this)
		      .filter('.flip-in')
		      .removeClass('flip-in')
		      .queue( function() {
		        // Force reflow hack
		        var reflow = this.offsetHeight;
		        $(this)
		          .addClass('flip-out')
		          .dequeue();
		      })
		      
		  });
		}

		function openCard($card) {
		  $card
		    .removeClass('flip-out')
		    .queue( function() {
		      // Force reflow hack
		      var reflow = this.offsetHeight;
		      $(this)
		        .addClass('flip-in')
		        .dequeue();
		    });
		    
		}
	</script>
	<script src="js/header.js"></script>

</body>
<?php
	include 'footer.php';
?>
</html>
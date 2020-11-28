<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
		*
		{
			padding: 0px;margin: 0px;
			box-sizing: border-box;
		}
		#cc_logo_container
		{
			width: 100%;
			height: 300px;
			margin-top: 150px;
		}
		#cc_logo
		{
			background-color: white;
			height: 300px;
			margin-bottom: 10px;
			width: 300px;
			border-radius: 1000px; 
			animation-name: zoomimg;
			animation-duration: 1s;
			display: none;
			animation-iteration-count: 1;
			margin-left: auto;
			margin-right: auto;
		}
		.letter
		{
			animation-name: ani;
			animation-duration: .5s;
			animation-iteration-count: 1;
			margin:0px;
			color:white;
			font-size: 100px;
			margin-top: 10px;
			height: 200px;
			text-shadow: 10px 10px 10px gold;
			display: none;
		}
		@media only screen and (max-width: 600px)
		{
			#cc_logo_container
			{

			}
			.letter
			{
				font-size: 50px;
			}

		}
		.loader
		{
			animation-name: load;
			animation-duration: 1s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			animation-direction: alternate-reverse;
		}
		@keyframes load
		{
			from{margin-left: 0%}
			to{margin-left: 90%;}
		}
		/*#marker
		{
			animation-name: marker;
			animation-duration: .1s;
			animation-iteration-count: infinite;
			animation-direction: alternate-reverse;
		}
		@keyframes marker
		{
			from{opacity: 0}
			to{opacity: 1}
		}*/
		@keyframes zoomimg
		{
			from{height: 600px;width: 600px}
			to{height: 300px;width:  300px;}
		}
		@keyframes ani 
		{
			0%{font-size: 15vw;text-shadow: none;position: absolute;}
			55%{text-shadow: none;font-size: 3vw;position: absolute;}
			100%{text-shadow: 5px 5px 50px gold,5px 5px 10px white,-5px -5px 50px gold,-5px -5px 10px white;position: normal;}
		}
	</style>
</head>
<body  >
	
	<div style="width: 100%;height: 100vh;position: fixed;background-color: black;text-align: center;vertical-align: middle;">

	<div id="cc_logo_container">
		<img src="images/logo.png" id="cc_logo" height="300" width="300" >
		
	</div>
		<div style="height: 5px;width: 20%;margin-left:40%;margin-top: 20px;background-color: white;display: none;" id="loader">
			<span style="background-color: red;width: 10%;height:5px;display: block;" class="loader"></span>
		</div>
		
	<div >
		<span  class="letter">
			c
		</span>
		<span  class="letter">
			o
		</span>
		<span  class="letter">
			d
		</span>

		<span  class="letter">
			e
		</span>

		<span  class="letter">
			r
		</span>
		<span  class="letter">
			s
		</span>

		<span style="margin-left: 20px;" class="letter">
			c
		</span>
		<span  class="letter">
			l
		</span>
		<span  class="letter">
			u
		</span>
		<span  class="letter">
			b
		</span>
		<!-- <span style="border-right: 2px solid gold;height: 90px;margin-top: 20px;display: inline-block;padding: 0px;" id="marker">
			
		</span> -->
	</div>
		
</div>



<script type="text/javascript">
	var i=0;
	var len = $('.letter').length;
	function loader()
	{
			$('.letter').eq(i-1).css('textShadow','none');
			if(i==len)
			{
				$('#cc_logo').css('display','block');
				$('#loader').css('display','block');
				clearInterval(load);

			}
			else
			{
				$('.letter').eq(i).css('display','inline-block');
				i++;
			}	
	}

 var load = setInterval(loader,500);	
</script>
</body>
</html>
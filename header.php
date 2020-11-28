
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Trade+Winds&family=Vast+Shadow&display=swap" rel="stylesheet">

<style type="text/css">
	*
	{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;

	}
	.nav_bar_container
	{
		position: fixed;
		background-color: #333;
		width: 100%;
		top: 0;
		left: 0;
		padding: 10px;
		color: white;
		z-index: 11111111;	
	}
	.navbar_logo
	{
		height: 60px;
		width: 60px;
		/*margin-right: 25px;*/
		border-radius: 1000px;
		/*box-shadow: 1px 1px 20px blue,1px 1px 0px blue,1px 1px 10px blue;*/
	}
	.navbar_img_container
	{
		display: inline-block;
	}
	.navbar_bar_icon
	{
		display: none;
		cursor: pointer;
	}
	.navbar_menu
	{
		display: inline-block;
		list-style-type: none;
		float: right;
		margin-right: 5%;
	}
	.navbar_item
	{
		display: inline-block;
		font-family: 'trade winds';
		padding: 15px;
		font-size: 21px;
		cursor: pointer;
	}
	.navbar_menu a
	{
		text-decoration: none;
		color: rgb(255,255,255,1);
	}
	.navbar_menu a:hover
	{
		text-decoration: none;
		color: rgb(255,255,255,1);	
		text-shadow:  1px 1px 10px red,1px 1px 10px red,1px 1px 10px red;
	}
	.navbar_menu a:active
	{
		text-shadow: 1px 1px 10px rgb(0,255,0),1px 1px 10px rgb(0,255,0),1px 1px 10px rgb(0,255,0);
	}
	.navbar_icon
	{
		display: none;
	}
	@media only screen and (max-width: 875px)
	{
		.navbar_img_container
		{
			display: block;
			width: 100%;
		}	
		.navbar_bar_icon
		{
			display:block;
			float: right;
			font-size: 25px;
			margin-top: 15px;
			margin-right: 20px;
		}
		.navbar_menu
		{
			display: block;
			transform: matrix(1,0,0,1,-250,0);
			transition: transform 1s;
			width: 250px;
			/*transform: translateY(100%);*/
			position: fixed;
			height: 100vh;
			top:80px;
			left: 0;
			background-color: #333;
			border:1px solid white;
		}
		.navbar_icon
		{
			display: inline-block;
		}
		.navbar_item
		{
			display: block;
			width: 100%;
		}	
		.navbar_item i
		{
			margin-right: 10px;
		}

	}

</style>
<header>
	<nav>
		<div class="nav_bar_container">
			<div class="navbar_img_container">
				<img src="images/logo.png" class="navbar_logo">
				<i class="fa fa-bars navbar_bar_icon" id="navbar_bar_icon"></i>
			</div>
			<div class="navbar_menu">
				<div class="navbar_list">
					<a href="index.php"><span class="navbar_item"><i class="navbar_icon fa fa-home"></i> Home</span></a>
					<a href="teams.php"><span class="navbar_item"><i class="navbar_icon fas fa-info-circle"></i> portfolio</span></a>
					<a href="course.php"><span class="navbar_item"><i class="navbar_icon fa fa-book-open"></i> Courses</span></a>
					<a href=""><span class="navbar_item"><i class="navbar_icon fas fa-users"></i> Testinomals</span></a>
					<a href="activity.php"><span class="navbar_item"><i class="navbar_icon fas fa-tasks"></i> Activities</span></a>
					
				</div>
			</div>
		</div>
	</nav>
</header>
<!-- <script type="text/javascript" src="js/header.js"></script>
 -->


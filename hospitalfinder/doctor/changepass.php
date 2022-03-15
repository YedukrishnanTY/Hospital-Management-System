<?php
session_start();
//$uname=$_SESSION['uname'];
if(isset ($_SESSION['uname']))
{
	$uname=$_SESSION['uname']; 
	$id=$_SESSION['id']; 

include("db.php");
$obj=new db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
label
{color:#000000
}
table tr td
{
width:auto;
}
</style>
	<title>Hospital Finder|Home</title>

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Medically Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!--//meta tags ends here-->
	<!--booststrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" />
	<!-- gallery-->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<!-- clients-->

	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!-- banner text slider-->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!-- banner text slider-->

	<link href="//fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600" rel="stylesheet">
	<!--//style sheet end here-->
</head>

<body>
	<div class="banner" id="home">
		<div class="w3-agile-logo">
			<div class=" head-wl">
				
				<div class="w3-header-top-right">
					<div class="email-right">
					<?php
			 $logid=$_SESSION['id'];
			$select10="select * from doctor where docname=(select docname from doctor where logid=$logid)";
			$res10=$obj->exe($select10);
			?>
			<?php
			while($row10=mysqli_fetch_array($res10))
			{
		  ?>
					<p><span class="fa fa-user" aria-hidden="true"></span> <a href="" class="info"> <?php echo $row10[1];?></a></p>
<?php
}
?>
					</div>
					<div class="w3-header-top-right-text">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-w3layouts">

			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<h1><a class="navbar-brand " href="index.php">Doctor</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li><a href="viewschedule.php">Schedule</a></li>
						<li><a href="viewpgm.php">Campaign Programs</a></li>
						<li><a href="viewquery.php">Queries</a></li>
						<li><a href="viewappoint.php">Appointments</a></li>
							
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="changepass.php">Change Password</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>


		<div class="container">

			<!-- header -->
			<header>

				<div class="flexslider-info">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								
									
									</div>
								</li>
							</ul>
						</div>
					</section>
				</div>
			</header>
		</div>
		<div class="clearfix"> </div>
	</div>

	<!-- //header -->
	
	
	
<!-- about -->
<div class="line">
</div>
	<div class="about" id="changepass">
		<div class="container">
			<div class="w3ls-heading">
			<br/>  <br/>  <br/>  <br/>  <br/> 
				<h3 class="title">Change Password</h3>
			</div>
			
			<form name="form_editc" method="post" enctype="multipart/form-data" class="login"  action="changepasspro.php">
                
                <table class="table">
				     
                   <tr><td><label>Current Password</label></td><td>
				   <input type="hidden" value="<?php echo $id;?>" name="id">
                    <input type="password" name="cpass"/></td></tr>
					
					 <tr><td><label>New Password</label></td><td>
                    <input type="password" name="npass"/></td></tr>
                
                </table>
				<input type="submit" name="submit" value="Submit" onClick="return changepass()" >
            </form>
			<script type="text/javascript">
function changepass()
{
	if(document.form_editc.cpass.value=="")
{
alert("Enter Current Password");
document.form_editc.cpass.focus();
return false;
    }
	if(document.form_editc.npass.value=="")
{
alert("Enter New Password");
document.form_editc.npass.focus();
return false;
    }

}
</script>
	
	<!--footer-->
<div class="clearfix"></div>
</div>
</div>
	<div class="footer">
		<nav>
			<ul class="nav-buttom">
				<li><a href="index.php">Home</a></li>
						<li><a href="viewschedule.php">Work Schedule</a></li>
						<li><a href="viewpgm.php">Campaign Programs</a></li>
						<li><a href="viewquery.php">Customer Queries</a></li>
						<li><a href="viewappoint.php">Appointments</a></li>
			</ul>
		</nav>
		
	</div>
	<footer>
		<p>&copy;2019 Hospital Finder. All Rights Reserved </p>
	</footer>
	<!--menu script-->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<script src="js/bootstrap.js"></script>
	<!--//menu script-->
	<!--FlexSlider banner-->

	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!--End-slider-script-->
	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //OnScroll-Number-Increase-JavaScript -->
	<script src="js/jquery.chocolat.js"></script>

	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.w3_agile_gallery_grid a').Chocolat();
		});
	</script>
	<!-- //gallery -->
	<!--client carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				itemsDesktop: [768, 1],
				itemsDesktopSmall: [414, 1],
				lazyLoad: true,
				autoPlay: true,
				navigation: true,

				navigationText: false,
				pagination: true,

			});

		});
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->
</body>

</html>
<?php
 }
 else
 {
 ?>
 <script>
 alert("Invaid Login");
 window.location="../index.php";
 </script>
 <?php
 }
 ?>
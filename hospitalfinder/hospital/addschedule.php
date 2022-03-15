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
	<title>Hospital Finder | Home </title>

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
				<div class="agileinfo-social-grids">
					
				</div>
				<div class="w3-header-top-right">
					<div class="email-right">
<?php
			 $logid=$_SESSION['id'];
			$select10="select * from hospital where hosname=(select hosname from hospital where logid=$logid)";
			$res10=$obj->exe($select10);
			?>
			<?php
			while($row10=mysqli_fetch_array($res10))
			{
		  ?>
					<p><span class="fa fa-hospital" aria-hidden="true"></span> <a href="" class="info"> <?php echo $row10[1];?></a></p>
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
					<h1><a class="navbar-brand " href="index.php">Hospital</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
						<li><a href="adddep.php">Departments</a></li>
						<li><a href="addfacility.php">Facilities</a></li>
						<li><a href="addpgm.php">Programs</a></li>
						<li><a href="adddoctor.php">Doctors</a></li>
						
						<li><a href="addschedule.php">Schedule</a></li>
						<li><a href="addbooking.php">Bookings</a></li>
						
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li><a href="addlab.php">Add Lab</a></li>
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
								
							</ul>
						</div>
					</section>
				</div>
			</header>
		</div>
		<div class="clearfix"> </div>
	</div>

	<!-- //header -->
	
	
	<!--subscribe-->
	<div class="about" id="schedule">
		<div class="container">
		 <br/> <br/> <br/> <br/> <br/>
			<h3 class="title">Add Schedule</h3>
			<?php
			 $logid=$_SESSION['id'];
			$sql5="select * from hospital where logid=$logid";
			$res5=$obj->exe($sql5);
			$sql6="select * from doctor where hosname=(select hosname from hospital where logid=$logid)";
			$res6=$obj->exe($sql6);
			$select8="select CURRENT_DATE";
							$res8=$obj->exe($select8);
							$row8=mysqli_fetch_array($res8);
							$date=$row8[0];
			
		  ?>
			</p>
			<form name="form_edit5" method="post" enctype="multipart/form-data" class="login"  action="addschedulepro.php">
                
                <table class="table table-condensed">
				<?php
			while($row5=mysqli_fetch_array($res5))
			{
		  ?>
                    
					<tr><td><label>Hospital Name</label></td><td>
                    <input type="text" name="hosname" value="<?php echo $row5[1];?>" placeholder="Hospital Name" class="form-control" readonly="" /></td></tr>
					 <?php
			}
			?>
				<tr><td><label>Doctor Name</label></td><td>
                    <select name="docname" ><option value="0">--SELECT--</option>
<?php
while($row6=mysqli_fetch_array($res6))
{
	
	
?>
<option><?php echo $row6[1];?></option>
<?php

}
?>
</select></td></tr>
					
				<tr><td><label>Date</label></td><td>
                    <input type="date" name="date" placeholder="Date" class="form-control" required="required" min="<?php echo $date;?>" /></td></tr>
					
					<tr><td><label>From Time</label></td><td>
                    <input type="time" name="ftime" placeholder="From Time" class="form-control" required="required" /></td></tr>
					
					<tr><td><label>To Time</label></td><td>
                    <input type="time" name="totime" placeholder="To Time" class="form-control" required="required" /></td></tr>
					 
                </table>
				<div class=" col-md-4 w3layouts_more-buttn">
											<a href="viewschedule.php">View Schedule</a>
										</div>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<input type="submit" name="submit" value="Submit" onClick="return schedule()" >
            </form>
			<script type="text/javascript">
function schedule()
{
	if(document.form_edit5.hosname.value=="")
{
alert("Hospital Name Missing");
document.form_edit5.hosname.focus();
return false;
    }
	if(!(isNaN(document.form_edit5.hosname.value)))
{
alert("Only alphabets are allowed");
document.form_edit5.hosname.focus();
return false;
}
if(document.form_edit5.docname.value=="0")
{
alert("select Doctor");
document.form_edit5.docname.focus();
return false;
}
}
</script>
			
		</div>
	</div>
	<!--//subscribe-->
	
	
	<!--footer-->

	<div class="footer">
		<nav>
			<ul class="nav-buttom">
						<li><a href="adddep.php">Departments</a></li>
						<li><a href="addfacility.php">Facilities</a></li>
						<li><a href="addpgm.php">Programs</a></li>
						<li><a href="adddoctor.php">Doctors</a></li>
						<li><a href="addschedule.php">Schedule</a></li>
						<li><a href="addbooking.php">Bookings</a></li>
						<li><a href="changepass.php">Change Password</a></li>
						<li><a href="logout.php">Logout</a></li>
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
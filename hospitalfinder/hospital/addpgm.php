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
	<div class="about" id="program">
		<div class="container">
		<br/> <br/> <br/> <br/> <br/>
			<h3 class="title">Add Health Campaign Programs</h3>
			<?php
			 $logid=$_SESSION['id'];
			$sql4="select * from hospital where logid=$logid";
			$res4=$obj->exe($sql4);
			
			$select8="select CURRENT_DATE";
							$res8=$obj->exe($select8);
							$row8=mysqli_fetch_array($res8);
							$date=$row8[0];
		  
		  ?>
			</p>
			<form name="form_edit3" method="post" enctype="multipart/form-data" class="login"  action="addpgmpro.php">
                
                <table class="table table-condensed">
				<?php
			while($row4=mysqli_fetch_array($res4))
			{
		  ?>
                    
					<tr><td><label>Hospital Name</label></td><td>
                    <input type="text" name="hosname" value="<?php echo $row4[1];?>" placeholder="Hospital Name" class="form-control" readonly="" /></td></tr>
					 <?php
			}
			?>
					<tr><td><label>Program Name</label></td><td>
                    <input type="text" name="pname" placeholder="Program Name" class="form-control" /></td></tr>
					 
					 <tr><td><label>Program Date</label></td><td>
                    <input type="date" name="pdate" min="<?php echo $date;?>" class="form-control" /></td></tr>
					 
					 <tr><td><label>Program Time</label></td><td>
                    <input type="time" name="ptime" placeholder="Program Time" class="form-control" /></td></tr>
					 
					<tr><td><label> Program Venue</label></td><td>
                    <textarea rows="4" cols="100" name="pvenue" placeholder="Program Venue" required="required" ></textarea></td></tr>
					
					<tr><td><label> About</label></td><td>
                    <textarea rows="4" cols="100" name="about" placeholder="About" required="required" ></textarea></td></tr>
				 
                </table>
				<div class=" col-md-4 w3layouts_more-buttn">
											<a href="viewpgm.php">View Programs</a>
										</div>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				<input type="submit" name="submit" value="Submit" onClick="return program()" >
            </form>
			
			<script type="text/javascript">
function program()
{
	if(document.form_edit3.hosname.value=="")
{
alert("Hospital Name Missing");
document.form_edit3.hosname.focus();
return false;
    }
	if(!(isNaN(document.form_edit3.hosname.value)))
{
alert("Only alphabets are allowed");
document.form_edit3.hosname.focus();
return false;
}
if(document.form_edit3.pname.value=="")
{
alert("Enter Program Name");
document.form_edit3.pname.focus();
return false;
    }
	if(!(isNaN(document.form_edit3.pname.value)))
{
alert("Only alphabets are allowed");
document.form_edit3.pname.focus();
return false;
}
if(document.form_edit3.pdate.value=="")
{
alert("Enter Date");
document.form_edit3.pdate.focus();
return false;
    }
	if(document.form_edit3.ptime.value=="")
{
alert("Enter Time");
document.form_edit3.ptime.focus();
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
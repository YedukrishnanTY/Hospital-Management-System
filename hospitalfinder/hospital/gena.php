<?php
session_start();
//$uname=$_SESSION['uname'];
if(isset ($_SESSION['uname']))
{
	$uname=$_SESSION['uname']; 

include("db.php");
$obj=new db();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Medically a Medical Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>

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
						<li><a href="index.php">Home</a></li>
						<li><a href="logout.php">Logout</a></li>
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
	<div class="about" id="department">
		<div class="container">
		<br/> <br/> <br/> <br/> <br/>
			<h3 class="title"> Admit Card Generation</h3>
			<?php
	
				$id=$_GET['un'];
				$logid=$_SESSION['id'];
							$select="select * from payment where payid=$id";
							$res=$obj->exe($select);
							$row=mysqli_fetch_array($res);
						?>
						</p>
				<form name="form_rec" method="post" class="login" enctype="multipart/form-data" action="genapro.php">
                
                <table class="table">
                    
					
					<tr><td><label>Name</label></td><td>
                    <input type="text" readonly="" name="username" value="<?php echo $row[1];?>" > <input type="hidden" name="id" value="<?php echo $id;?>" ></td></tr>
					
					<tr><td><label>Doctor Name</label></td><td>
                    <input type="text" readonly="" name="docname" value="<?php echo $row[2];?>" ></td></tr>
					
					<tr><td><label>Department Name</label></td><td>
                    <input type="text" readonly="" name="department" value="<?php echo $row[3];?>" ></td></tr>
					
					<tr><td><label>Hospital Name</label></td><td>
                    <input type="text" readonly="" name="hosname" value="<?php echo $row[4];?>" ></td></tr>
					
					<tr><td><label>Date</label></td><td>
                    <input type="text" readonly="" name="date" value="<?php echo $row[5];?>" ></td></tr>
					
					<tr><td><label>Doctor Fee</label></td><td>
                    <input type="text" readonly="" name="tamount" value="<?php echo $row[6];?>" ></td></tr>
					
					<tr><td><label>Booked Amount</label></td><td>
                    <input type="text" readonly="" name="bamount" value="<?php echo $row[7];?>" ></td></tr>
					
					<tr><td><label>Total Amount</label></td><td>
                    <input type="text" readonly="" name="balance" value="<?php echo $row[8];?>" ></td></tr>
					
                </table>
				<input type="submit" name="submit" value="Submit" onClick="return valid()">
            </form>
		  
			</p>
			
           
			
			
			
		</div>
	</div>
	<!--//subscribe-->
	
	
	<!--footer-->

	<div class="footer">
		<nav>
			<ul class="nav-buttom">
				<li><a href="index.php">Home</a></li>
						<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		
	</div>
	<footer>
		<p>&copy;2019 hosptal Finder. All Rights Reserved </p>
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
	
	
	<script type="text/javascript">
function valid()
{
		if(document.form_rec.date.value=="")
{
alert("Date missing");
document.form_rec.date.focus();
return false;
    }
	if(document.form_rec.username.value=="")
{
alert("name missing");
document.form_rec.username.focus();
return false;
    }
	if(document.form_rec.docname.value=="")
{
alert("doctorname missing");
document.form_rec.docname.focus();
return false;
    }
	if(document.form_rec.hosname.value=="")
{
alert("hospital name missing");
document.form_rec.hosname.focus();
return false;
    }
	if(document.form_rec.tamount.value=="")
{
alert("total amount missing");
document.form_rec.tamount.focus();
return false;
    }
	
	if(document.form_rec.bamount.value=="")
{
alert("Booking Amount missing");
document.form_rec.bamount.focus();
return false;
    }
	if(document.form_rec.balance.value=="")
{
alert("Balance missing");
document.form_rec.balance.focus();
return false;
    }
	}
	</script>
	
	
	
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
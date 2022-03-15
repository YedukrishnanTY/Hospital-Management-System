<?php
session_start();
//$uname=$_SESSION['uname'];
if(isset ($_SESSION['uname']))
{
	$uname=$_SESSION['uname']; 

include("db.php");
$obj=new db();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Hospital Finder | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Medical Care a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- flexslider-css-file -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- //flexslider-css-file -->

<link rel="stylesheet" href="css/easy-responsive-tabs.css">

<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons-css-file -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">	<!-- bootstrap-css-file -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">	<!-- style-css-file -->


<!-- gallery -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //gallery -->

<!-- fonts -->
 <link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
 <link href="//fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
 <!-- //fonts -->
 
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Default-JavaScript-File -->
	
<script src="js/bootstrap.js"></script>	<!-- //bootstrap-JavaScript-File -->
		
</head>
<!-- Head -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top"> 
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Hospital Finder</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php">Medical Care</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
							<li><a href="index.php">Go Back</a></li>
							<li><a href="logout.php"> &nbsp; Logout</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
		<!--banner-->
		<!--Slider-->
			<div class="w3l_banner_info">
				<div class="col-md-5 banner-form-agileinfo">
				</div>
				<div class="col-md-7 slider">
					<div class="callbacks_container">
								
					</div>
				</div>
				<div class="clearfix"></div>
			<!--//Slider-->
			
			</div>
		<!--//banner-->
		
	</div>	
	<!-- //banner --> 

<!-- about -->
<div class="line">
</div>
	<div class="about" id="about">
		<div class="container">
			<div class="w3ls-heading">
				<h3>About</h3>
				<?php
				 $id=$_GET['id'];
			$select="select * from hospital where hosname=(select hosname from hospital where hosid=$id)";
			$res=$obj->exe($select);
			
			?>
			
			</div>
			<div class="col-md-6 about-left">
				<div class="w3labout-img boxw3-agile"> 
				<?php
					while($row=mysqli_fetch_array($res))
			{
			?> 	
					<img src="../uploads/<?php echo $row[6];?>" alt="" class="img-responsive" />
					<div class="agile-caption">
						<h3><?php echo $row[1];?></h3>
						
					</div> 
				</div>
			</div>
			<div class="col-md-6 about-right">
				<h2> <?php echo $row[1];?></h2>
				<br/>
				<p> Email:  <?php echo $row[2];?></p>
				<p> Phone: <?php echo $row[3];?></p>
				<p> Location: <?php echo $row[4];?></p>
				<p> Address: <?php echo $row[5];?></p>
				<?php
				}
				?>
				
			<h2> Departments</h2><br>
			<?php
			$select1="select * from department where hosname=(select hosname from hospital where hosid=$id)";
			$res1=$obj->exe($select1);
			 $no1=mysqli_num_rows($res1);
		  if($no1==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
		  <?php
		  }
		  ?>
			<?php
					while($row1=mysqli_fetch_array($res1))
			{
			?> 
			
			 <?php echo $row1[1];?>,
			<?php
				}
				?>	
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //about -->
	<!-- team -->	<!-- Our specialists -->
		<div class="line">
		</div>
	<div class="team" id="team">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Our Specialists</h3>
				<?php
				$id=$_GET['id'];
			$select2="select * from doctor where hosname=(select hosname from hospital where hosid=$id)";
			
			$res2=$obj->exe($select2);
			 $no=mysqli_num_rows($res2);
		  if($no==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
			</div>
			<?php
					while($row2=mysqli_fetch_array($res2))
			{
			?> 
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid  agile_team_gridf">
					<div class="agile_team_grid_main">
						<img src="../uploads/<?php echo $row2[10];?>" alt=" " height="300" width="300">
						<div class="p-mask">
							<ul class="social-icons">
								<h4><a href="index3.php?id=<?php echo $row2[0]; ?>">Read More</a></h4>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<p><?php echo $row2[1];?></p>
						<p><?php echo $row2[7];?></p>
					</div>
				</div>
				</div>
				<?php
						}
						?>
						<?php
						}
						?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->	<!-- //Our specialists -->
	
<!-- Laboratories -->
<div class="line">
</div>
	<div class="laboratories" id="facility">
		<div class="w3l-about w3l-gallery">
			<div class="container">
				<div class="w3ls-heading">
				<?php
				
				$id=$_GET['id'];
			$select3="select * from facilities where hosname=(select hosname from hospital where hosid=$id) ";
			
			$res3=$obj->exe($select3);
		  $no3=mysqli_num_rows($res3);
		  if($no3==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
				<?php
						}
						?>
							<h3>Facilities</h3>
				</div>
				<?php
					while($row3=mysqli_fetch_array($res3))
			{
			?> 
				<div class="gallery-grids">
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									
										<img src="../uploads/<?php echo $row3[3];?>" alt="" height="200" width="300" /><br>
						<h4><?php echo $row3[1];?></h4>
															
								</figure>
							</div>
						</div>
						</div>
						<?php
						}
						?>
						
						
						<div class="clearfix"> </div>
						<script src="js/lightbox-plus-jquery.min.js"> </script>
				</div>
			</div>
		</div>
	</div>
<!-- //Laboratories	-->	

<!-- appointment form -->
<div class="line">
</div>
<div class="appointment" id="pgm">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Campaign Programs</h3>
			<?php
			$id=$_GET['id'];
			$select5="select * from programs where hosname=(select hosname from hospital where hosid=$id)";
			$res5=$obj->exe($select5);
			 $no5=mysqli_num_rows($res5);
		  if($no5==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
		</div>
		<?php
					while($row5=mysqli_fetch_array($res5))
			{
			?>
		<div class="appointment-grid">
			<div class="col-md-4 appointmnet-left">
				<div class="inner">
					<div class="working-grid">
						<h4><?php echo $row5[1];?></h4>
						<p><i class="fa fa-calendar" aria-hidden="true"></i><span>Profram Date</span> <span class="span1"><?php echo $row5[3];?></span></p>
						<p><i class="fa fa-calendar" aria-hidden="true"></i><span>Profram Time</span> <span class="span1"><?php echo $row5[4];?></span></p>
						<p><i class="fa fa-calendar" aria-hidden="true"></i><span>Profram Venue</span> <span class="span1"><?php echo $row5[5];?></span></p>
						<p><?php echo $row5[6];?></p>
					<div class="clearfix"></div>
					</div>
					
				</div>
				</div>
			</div>
			<?php
					}
					?>
					<?php
					}
					?>
					
		</div>
	
</div>
<!-- //appointment form -->
	
<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2019 Hospital Finder. All rights reserved </p>
</div>
<!-- //copyright -->



<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>





<!--banner Slider starts Here-->
		<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

							<!--banner Slider starts Here-->
							<!--start-date-piker-->
							<link rel="stylesheet" href="css/jquery-ui.css" />
									<script src="js/jquery-ui.js"></script>
									<script>
										$(function() {
										$( "#datepicker" ).datepicker();
										});
									</script>
							<!--/End-date-piker-->
							
<!-- js for smooth scrollings -->
	<script src="js/SmoothScroll.min.js"></script>
<!-- js for smooth scrollings -->

<!-- flexisel -->
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
<!-- //flexisel -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
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


<!-- Scrolling Nav JavaScript --> 
    <script src="js/scrolling-nav.js"></script>  
<!-- //fixed-scroll-nav-js --> 


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
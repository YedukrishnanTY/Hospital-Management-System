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
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Hospital Finder | Home</title>
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
<script type="text/javascript" language="javascript">
function getslocation(str)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("rose").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","ajaxsearch.php?locat="+str,true);
xmlhttp.send(null);
}





</script>
		
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
						<h1><a class="navbar-brand" href="index.php">User Home</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
							<li><a href="index.php"> &nbsp; Home</a></li>
							<li><a href="admit.php"> &nbsp; Admit Cards</a></li>
							<li><a href="query.php"> &nbsp; Queries</a></li>
							<li><a href="complaint.php"> &nbsp; complaints</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> &nbsp; <?php echo $uname;?> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="changepass.php"> &nbsp; Change Password</a></li>
									<li><a href="logout.php"> &nbsp; Logout</a></li>
								</ul>
							</li>
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
					<img src="images/alt1.png" alt="" />
				</div>
				<div class="col-md-7 slider">
					<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="slider_banner_info">
											 <h4>WE make healthy</h4>
											
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
											<h4>Medicine is a science</h4>
											
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
											<h4>Nothing cures health</h4>
											
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
											<h4>We do best treatment</h4>
											
										</div>

									</li>
								</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			<!--//Slider-->
			
			</div>
		<!--//banner-->
		
	</div>	
	<!-- //banner --> 
	

<!-- classes -->	<!-- blog -->


	<div id="hospital" class="banner-bottom blog" >
		<div class="container" >
			<div class="w3ls-heading" >
				<h3>Medical Care Hospital</h3>
				<?php
			$select5="select * from hospital where status=1";
			$res5=$obj->exe($select5);
			$select6="select * from department";
			$res6=$obj->exe($select6);
			?>
			</div>
				<div id="rose">
			<div class="w3layouts_classes_grids" >
				<ul id="flexiselDemo1">	
				<?php
					while($row5=mysqli_fetch_array($res5))
			{
			?> 
					<li>
					
						<div class="w3_agile_class_grid">
							<div class="w3layouts_team_grid agileits_w3layouts_class">
								<img src="../uploads/<?php echo $row5[6];?>" alt=" " class="img-responsive" />
								<div class="w3layouts_team_grid_pos">
									<div class="wthree_text">
										
									</div>
								</div>
							</div>
							<div class="w3_agileits_class_grid">	
								<h3><?php echo $row5[1];?> Hospital</h3><hr/>
								<button><a href="index2.php?id=<?php echo $row5[0]; ?>">Hospital Details</a></button>
							</div>
						</div>
						
					</li>
					<?php
								}
								?>
				</ul>
			</div>
			</div>
		</div>
	</div>
	
<!-- //classes -->	<!-- //blog -->

<!-- team -->	<!-- Our specialists -->
		
	<div class="team" id="team">
		<div class="container">
			<div class="w3ls-heading">
				<h3> Our Specialists</h3>
				<?php
			$select2="select * from doctor ";
			$res2=$obj->exe($select2);
			?>
			</div>
			<?php
					while($row2=mysqli_fetch_array($res2))
			{
			?>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid  agile_team_gridf">
					<div class="agile_team_grid_main">
						<img src="../uploads/<?php echo $row2[10];?>" alt=" " height="300" width="300" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
					
						<h4><?php echo $row2[1];?> <br><?php echo $row2[7];?></h4>
						
					</div>
				</div>
				</div>
				<?php
				}
				?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->	<!-- //Our specialists -->
<!-- Laboratories -->

	<div class="laboratories" id="gallery">
		<div class="w3l-about w3l-gallery">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Gallery</h3>
				</div>
				<div class="gallery-grids">
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/0.jpg" data-lightbox="example-set" data-title="">
										<img src="images/0.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/4.jpg" data-lightbox="example-set" data-title="">
										<img src="images/4.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/5.jpg" data-lightbox="example-set" data-title="">
										<img src="images/5.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/7.jpg" data-lightbox="example-set" data-title="">
										<img src="images/7.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/17.jpg" data-lightbox="example-set" data-title="">
										<img src="images/17.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/9.jpg" data-lightbox="example-set" data-title="">
										<img src="images/9.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/23.jpg" data-lightbox="example-set" data-title="">
										<img src="images/23.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/13.jpg" data-lightbox="example-set" data-title="">
										<img src="images/13.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/s3.jpg" data-lightbox="example-set" data-title="">
										<img src="images/s3.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/2.jpg" data-lightbox="example-set" data-title="">
										<img src="images/2.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/s4.jpg" data-lightbox="example-set" data-title="">
										<img src="images/s4.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="images/14.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
										<img src="images/14.jpg" alt="" />
									</a>
								</figure>
							</div>
						</div>
						<div class="clearfix"> </div>
						<script src="js/lightbox-plus-jquery.min.js"> </script>
				</div>
			</div>
		</div>
	</div>
<!-- //Laboratories	-->


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
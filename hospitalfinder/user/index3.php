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
input[type=date] {
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
							
							<li><a href="index.php"> Back To Home</a></li>
							<li><a href="logout.php"> Logout</a></li>
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
				$select8="select CURRENT_DATE";
							$res8=$obj->exe($select8);
							$row8=mysqli_fetch_array($res8);
							$date=$row8[0];
			$select="select * from doctor where docname=(select docname from doctor where docid='$id' )";
			$res=$obj->exe($select);
			$select1="select * from schedule where docname=(select docname from doctor where docid='$id' ) and date>=$date";
			$res1=$obj->exe($select1);
			?>	
			</div>
			<div class="col-md-6 about-left">
				<div class="w3labout-img boxw3-agile"> 
				<?php
					while($row=mysqli_fetch_array($res))
			{
			?> 	
					<img src="../uploads/<?php echo $row[10];?>" alt="" height="500" width="500" />
					<div class="agile-caption">
						<h3><?php echo $row[1];?></h3>
						
					</div> 
				</div>
			</div>
			<div class="col-md-6 about-right">
				<h2> <?php echo $row[1];?></h2>
				<br/>
				<p> Department: <?php echo $row[7];?></p>
				<p> Age: <?php echo $row[3];?></p>
				<p> Email: <?php echo $row[4];?></p>
				<p> Gender: <?php echo $row[5];?></p>
				<p> Phone: <?php echo $row[6];?></p>
				<p> Qualification: <?php echo $row[8];?></p>
				<p> Experience: <?php echo $row[9];?></p> <br/>
				<?php
				}
				?>
				<h2> Work Schedule</h2> <br/>
			
			 <table class="table">
				
					<thead>
						<tr>
							
							<th>Available Date</th>
							<th>Time From</th>
							<th>Time To</th>
						</tr>
					</thead>
					<tbody>
					<?php
					while($row1=mysqli_fetch_array($res1))
			{
			?> 
						<tr>
							
							<td><?php echo $row1[3];?></td>
							<td><?php echo $row1[4];?></td>
							<td><?php echo $row1[5];?></td>
							</tr>
							<?php
				}
				?>	
							</tbody>
							</table>
			
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //about -->


	<!-- about -->
<div class="line">
</div>
	<div class="about" id="apoint">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Appointment</h3><br/>
			</div>
			<?php
				$id=$_GET['id'];
				$logid=$_SESSION['id'];
			$select2="select * from doctor where docname=(select docname from doctor where docid='$id' )";
			$res2=$obj->exe($select2);
			$select3="select * from schedule where docname=(select docname from doctor where docid='$id' )";
			$res3=$obj->exe($select3);
			$select4="select * from user where logid=$logid";
			$res4=$obj->exe($select4);
			?>
			<form name="form_edit" method="post" enctype="multipart/form-data" class="login"  action="apointpro.php">
                
                <table class="table">
				<?php
					while($row4=mysqli_fetch_array($res4))
			{
			?>
                    
                   
                    <input type="hidden" required value="<?php echo $row4['username'];?>" name="uname"/>
					<?php

				}
				?>
					<?php
					while($row2=mysqli_fetch_array($res2))
			{
			?>
                  <tr><td><label>Doctor Name</label></td><td>
					<input type="text" required value="<?php echo $row2[1];?>" name="docname" readonly=""/>
					<input type="hidden" required value="<?php echo $id;?>" name="docid" readonly=""/></td></tr>
					<tr><td><label>Department Name</label></td><td>
					<input type="text" required value="<?php echo $row2[7];?>" name="dep" readonly=""/></td></tr>
					 <tr><td><label>Hospital Name</label></td><td>
					<input type="text" required value="<?php echo $row2[2];?>" name="hosname" readonly=""/></td></tr>
					<tr><td><label>Total Amount</label></td><td>
            <input type="text" required  name="tamount" value="<?php echo $row2[11]; $bamount=($row2[11]/10);?>"  readonly=""/>	</td></tr>
					 <tr><td><label> Booking Amount</label></td><td>
            <input type="text" required name="bamount" readonly="" placeholder="Booking Amount" value="<?php $row2[11]; $bamount=($row2[11]/10); echo $bamount; ?>" /> </td></tr>	
					
					<?php

				}
				?>
				
                  <tr><td><label>Date</label></td><td>
				  <select name="date" required>
				  <?php
					while($row3=mysqli_fetch_array($res3))
			{
			?>
			<option value="<?php echo $row3[3];?>"><?php echo $row3[3];?></option>
			<?php

				}
				?>
				</select>
					</td></tr>
					
					
				<tr><td><label>Account Number</label></td><td>
                    <input type="text" required placeholder="Account Number" name="acno"/></td></tr>
					
					<tr><td><label>Cvv</label></td><td>
                    <input type="password" required placeholder="Cvv" name="cvv"/></td></tr>
                </table>
				<input type="submit" name="submit" value="Submit" onClick="return valid()" >
            </form>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //about -->
	
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
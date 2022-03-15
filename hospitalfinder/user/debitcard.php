
	<?php
	error_reporting(0);
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
							<li><a href="index.php">Home</a></li>
							<li><a href="debitcard.php"> &nbsp; Debit Card</a></li>
							<li><a href="admit.php"> &nbsp; Admit Cards</a></li>
							<li><a href="query.php"> &nbsp; Queries</a></li>
							<li><a href="complaint.php"> &nbsp; complaints</a></li>
							
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> &nbsp; Settings<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="changepass.php"> &nbsp; Change Password</a></li>
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
	<div class="about" id="debitcard">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Debitcard</h3><br/>
			</div>
			<?php
			 $logid=$_SESSION['id'];
			$selectt="select * from user where logid=$logid";
			$ress=$obj->exe($selectt);
			?>
			<form name="form_editd" method="post" enctype="multipart/form-data" class="login"  action="debitpro.php">
                
                <table class="table">
				<?php
					while($rows=mysqli_fetch_array($ress))
			{
			?>
                    
                  
                    <input type="hidden"  value="<?php echo $rows['username'];?>" name="uname"/>
					<?php

				}
				?>
					
                  
					<tr><td><label>Account Number</label></td><td>
                    <input type="text" placeholder="Account Number"  required="required" name="acno"/></td></tr>
					
					<tr><td><label>Cvv</label></td><td>
                    <input type="text" placeholder="Cvv" required name="cvv"/></td></tr>
					
					<tr><td><label>Balance</label></td><td>
                    <input type="text" placeholder="Balance" required name="balance"/></td></tr>
					
                
				
				<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Submit" onClick="return debit()" ></td></tr></table>
            </form>
			<a href="#myModal" class="w3more" data-toggle="modal"><i class="fa fa-mail-forward" aria-hidden="true"></i> Account Balance</a>
			<script type="text/javascript">
function debit()
{
	if(document.form_editd.uname.value=="")
{
alert("User Name Missing");
document.form_editd.uname.focus();
return false;
    }
	if(!(isNaN(document.form_editd.uname.value)))
{
alert("Only alphabets are allowed");
document.form_editd.uname.focus();
return false;
}
if((isNaN(document.form_editd.acno.value)))
{
alert("Only numbers are allowed");
document.form_editd.acno.focus();
return false;
}
var phone=document.form_editd.acno.value.length;
var max=12;
if((phone<max) || (phone>max))
{
alert("Please Enter  12 digit Account Number");

document.form_editd.acno.focus();
return false;
}
if((isNaN(document.form_editd.cvv.value)))
{
alert("Only numbers are allowed");
document.form_editd.cvv.focus();
return false;
}
if((isNaN(document.form_editd.balance.value)))
{
alert("Only numbers are allowed");
document.form_editd.balance.focus();
return false;
}
var ph=document.form_editd.cvv.value.length;
var maxx=3;
if((ph<maxx) || (ph>maxx))
{
alert("Please Enter  3 digit cvv Number");

document.form_editd.cvv.focus();
return false;
}
}
</script>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //about -->
<!-- modal --><!-- for pop up -->
<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="span2" aria-hidden="true">&times;</span></button>						
				<h4 class="modal-title"> Account Balance</h4>
			</div> 
		<div class="modal-body">
			<div class="agileits-w3layouts-info">
			<?php
			 $logid=$_SESSION['id'];
			$sqla="select * from userac where username=(select username from user where logid=$logid)";
			$resa=$obj->exe($sqla);
		  $noa=mysqli_num_rows($resa);
		  if($noa==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
		  
			</p>
			 <?php
			while($rowa=mysqli_fetch_array($resa))
			{
			?>
				 <table class="table">
				
					<thead>
						<tr>
							
							<th>User Name</th>
							<th>Account Number</th>
							<th> Cvv</th>
							<th>Balance </th>
						</tr>
					</thead>
					<tbody>
					
						<tr>
							
							<td><?php echo $rowa[1];?></td>
							<td><?php echo $rowa[2];?></td>
							<td><?php echo $rowa[3];?></td>
							<td><?php echo $rowa[4];?></td>
							</tr>
							</tbody>
							</table>
							<?php
							}
							?>
							<?php
							}
							?>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- //modal --><!-- //for pop up -->


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
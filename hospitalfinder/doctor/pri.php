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
<script type="text/javascript" language="javascript">
function getsapart(str)
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
  
xmlhttp.open("GET","cname1.php?locat="+str,true);
xmlhttp.send(null);
}

function getsapartt(str)
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
    document.getElementById("rosee").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","cname2.php?locatt="+str,true);
xmlhttp.send(null);
}

function getsaparttt(str)
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
    document.getElementById("roseee").innerHTML=xmlhttp.responseText;
    }
  }
  
xmlhttp.open("GET","cname3.php?locattt="+str,true);
xmlhttp.send(null);
}


</script>

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
							<li><a href="pri.php">Prescriptions</a></li>
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
				<h3 class="title">Add Prescriptions</h3>
			</div>
			 <?php
$logid=$_SESSION['id']; 
$sql2="select docid from doctor where logid='$logid'";
$res2=$obj->exe($sql2);
$row2=mysqli_fetch_array($res2);
$doc=$row2[0];
$sql1="select CURRENT_DATE";
$res1=$obj->exe($sql1);
$row1=mysqli_fetch_array($res1);
$date=$row1[0];
$sql="select * from tbl_medicine";
$res=$obj->exe($sql);
?>
			<form name="form_edit" method="post" enctype="multipart/form-data" class="login"  action="conpro.php">
                
                <table class="table" border="1" bordercolor="#000000">
				     
                  <tr><td><label>Date</label></td>
<td><input type="text" name="date" value="<?php echo $date;?>" readonly=""/><input type="hidden" name="docname" value="<?php echo $doc;?>"/></td></tr>
<tr><td><label>Enter Patient Userid</label></td>
<td><input type="text" name="pid" onChange="getsapart(this.value)"/></td></tr>
<tr id="rose"></tr>
<tr><td><label>Enter Disease</label></td>
<td><input type="text" name="d"/>
<tr><td><label>Primary Analysis</label></td>
<td><textarea cols="23" rows="5" name="Address1"></textarea></td>
<tr><td><label>Primary Diagnosis</label></td>
<td><textarea cols="23" rows="5" name="Address2"></textarea></td>
<tr><td><label>Priscription</label></td>
<td><textarea cols="23" rows="5" name="Address3"></textarea></td>
<!--<tr><td><label>Medicine</label></td>
<td><select name="Medicine" onChange="getsapartt(this.value)">
<option value="0">--select--</option>
<?php
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row['Med_ID'];?>"><?php echo $row['Medname'];?></option>
<?php
}
?></select></td></tr>
<tr id="rosee"></tr>
<tr>
<td><label>Enter Quantity</label></td>
<td><input type="text" name="qty"/></td></tr>
<tr>
<td><label>Medicine Timing</label></td><td><select name="ss" onChange="getsaparttt(this.value)">
<option value="0">--select--</option>
<option value="hourly">Hourly</option>
<option value="other">Other</option>
</select></td></tr>
<tr id="roseee"></tr>-->
<tr><td>
<input type="checkbox" name="Follow_Up" id="myCheck" onChange="myFunction()"> Follow Up</td>
				<td><textarea name="check" id="demo" style="display:none;"></textarea></td></tr>
                   </table>				<center><input type="submit" name="submit" value="Add Medicines" style="background-color:#0000FF;font-size:20px;color:#FFFFFF" onClick="return valid()" >
			</center>
            </form>
			<script type="text/javascript">
function valid()
{
	if(document.form_edit.pid.value=="")
{
alert("Enter  Patient Register Id");
document.form_edit.pid.focus();
return false;
    }
	if((isNaN(document.form_edit.pid.value)))
{
alert("Only Numbers are allowed");
document.form_edit.pid.focus();
return false;
}
if(document.form_edit.d.value=="")
{
alert("Enter Disease");
document.form_edit.d.focus();
return false;
    }
if(document.form_edit.Address1.value=="")
{
alert("Enter Primary Analysis Details");
document.form_edit.Address1.focus();
return false;
    }
	
if(document.form_edit.Address2.value=="")
{
alert("Enter Primary Diagnosis Details");
document.form_edit.Address2.focus();
return false;
    }

if(document.form_edit.Address3.value=="")
{
alert("Enter Priscription Details");
document.form_edit.Address3.focus();
return false;
    }
<!--if((document.form_edit.c[][0].checked==false) && (document.form_edit.c[][1].checked==false ))-->

}
</script>
			
<script>
function myFunction() {
  var x = document.getElementById("myCheck").checked;
  document.getElementById("demo").innerHTML = x;
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
<?php

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

function showHint(s)
{


//var s=document.form1.t1.value;
//alert(s);
if (s.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkusernamepro1.php?q="+s,true);
xmlhttp.send();
}
function showHintt(ss)
{


//var s=document.form1.t1.value;
//alert(ss);
if (ss.length==0)
  { 
  document.getElementById("txtHintt").innerHTML="";
  return;
  }
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
    document.getElementById("txtHintt").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkusernameproo1.php?qq="+ss,true);
xmlhttp.send();
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
						<h1><a class="navbar-brand" href="index.php">Hospital Finder</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li><a href="index.php">Home</a></li>
							<li><a href="viewhospital.php"> &nbsp; Find Hospitals</a></li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> &nbsp; Register <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="userregister.php">User</a></li>
									<li><a href="hosregister.php">Hospital</a></li>
								</ul>
							</li>
							<li><a href="login.php"> &nbsp; Login</a></li>
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
	<div class="about" id="hospitalregister">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Hospital Registration</h3><br/>
			</div>
			<?php
			$select1="select * from location";
			$res1=$obj->exe($select1);
			?>
			<form name="form_edit1" method="post" enctype="multipart/form-data" class="login"  action="hosregpro.php">
                
                <table class="table">
                    
					<tr><td><label> Name</label></td><td>
                    <input type="text" name="name" placeholder="Name" /></td></tr>
					
					<tr><td><label> Email</label></td><td>
                    <input type="text" name="email" placeholder="Email" onChange="showHintt(this.value)" /><p id="txtHintt"></td></tr>
					
					<tr><td><label>Phone</label></td><td>
                    <input type="text" name="phone" placeholder="Phone" onChange="showHint(this.value)"  /><p id="txtHint"></td></tr>
					
					<tr><td><label> Building Name</label></td><td>
                    <input type="text" required="required"  placeholder="Building Name" name="address"/></td></tr>
						
						<tr><td><label>Location</label></td><td>
					<select name="location" ><option value="0">--SELECT--</option>
					<?php
					while($row1=mysqli_fetch_array($res1))
			{
			?>
					<option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
				<?php

				}
				?>
			</select></td></tr>
						<tr><td><label> Map Path</label></td><td>
                    <input type="text" name="path" placeholder="Map Path" required="required" /></td></tr>
						
					<tr><td><label>Image</label></td><td>
                    <input type="file" name="img" placeholder="Image" required="required" /></td></tr>
					
                   <tr><td><label>Username</label></td><td>
                    <input type="text"  placeholder="Username" name="uname"/></td></tr>
					
                   <tr><td><label>Password</label></td><td>
                    <input type="password"  placeholder="Password" name="pwd"/></td></tr>
                   
                </table>
				<input type="submit" name="submit" value="Submit" onClick="return reg()" >
            </form>
			<script type="text/javascript">
function reg()
{
	if(document.form_edit1.name.value=="")
{
alert("Enter Name");
document.form_edit1.name.focus();
return false;
    }
	if(!(isNaN(document.form_edit1.name.value)))
{
alert("Only alphabets are allowed");
document.form_edit1.name.focus();
return false;
}
var email=document.form_edit1.email.value;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
 

if(document.form_edit1.email.value=="")
{
alert("enter your emailid");
document.form_edit1.email.focus();
return false;
}

 if(reg.test(email)== false)
 {
	  
        alert("Please enter a valid Email id");
        document.form_edit1.email.focus();
       return false;
    }

if(document.form_edit1.phone.value=="")
{
alert("Enter Contact Number");
document.form_edit1.phone.focus();
return false;
    }
var phone=document.form_edit1.phone.value.length;
if((isNaN(document.form_edit1.phone.value)))
{
alert("Only numbers are allowed");
document.form_edit1.phone.focus();
return false;
}
var phonee = document.form_edit1.phone.value;
var phoneNum = /(6|7|8|9)/;
if(phoneNum.test(phonee) == false)
{
alert("Mobile Number Should Start With 6/7/8/ or 9");
document.form_edit1.phone.focus();
return false;
}
var max=10;
if((phone<max) || (phone>max))
{
alert("Please Enter  10 digit Contact Number");

document.form_edit1.phone.focus();
return false;
}
if(document.form_edit1.address.value=="")
{
alert("Enter address");
document.form_edit1.address.focus();
return false;
    }
	if(document.form_edit1.location.value=="0")
{
alert("select District");
document.form_edit1.location.focus();
return false;
}
if(document.form_edit1.path.value=="")
{
alert("Enter path");
document.form_edit1.path.focus();
return false;
}
if(document.form_edit1.uname.value=="")
{
alert("Enter Username");
document.form_edit1.uname.focus();
return false;
    }
if(document.form_edit1.pwd.value=="")
{
alert("Enter Password");
document.form_edit1.pwd.focus();
return false;
    }

}
</script>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //about -->


<!-- about -->
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
<?php
session_start();
//$uname=$_SESSION['uname'];
if(isset ($_SESSION['uname']))
{
	$username=$_SESSION['uname']; 
	include("../db.php");
	$obj=new db();
?>
<!DOCTYPE HTML>
<html>
<head>


<title> Panel | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include("header.php");
include("sidemenu.php");

?>
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 13px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">	
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Add Patient Test Details</h3>
				 
					 	<?php
						 $sql="select * from test";
		  $res=$obj->exe($sql);
		  ?>
							<form name="form" method="post" enctype="multipart/form-data" class="login"  action="addptestpro.php">
                
                <table class="table">
				  <tr><td><label>Patient name</label></td>
<td><input type="text" name="pname" plceholder="Enter Patient Name"></td></tr>
                   <tr><td><label>Select Test</label></td>
<td><select name="tname">
<option value="0">--Select--</option>
<?php
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row['tid'];?>"><?php echo $row['tname'];?></option>
<?php
}
?>
</select></td></tr>
<tr><td><label>Test value</label></td>
<td><input type="text" name="value" plceholder="Enter Test value"></td></tr>
		
                </table>
				<input type="submit" name="submit" value="Add" onClick="return login()" >
            </form>
			 
			<script type="text/javascript">
function login()
{
	if(document.form.pname.value=="")
{
alert("Enter patient name");
document.form.pname.focus();
return false;
    }
	if(document.form.tname.value=="0")
{
alert("Select test name ");
document.form.tname.focus();
return false;
    }
	if(document.form.value.value=="")
{
alert("Enter value");
document.form.value.focus();
return false;
    }

	}
	</script>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		
		 
		<?php
		include("footer.php");
		?>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->

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
 
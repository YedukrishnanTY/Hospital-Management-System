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
<title>Cab Admin Panel | Home</title>
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
					<h3 class="title1">Change Password</h3>
					<?php
					$logid=$_SESSION['id']; 
					
					
					?>
					 	
							
				 <form name="form_editc" method="post" class="login"  action="changepasspro.php" enctype="multipart/form-data">
                
                <table class="table">
				
                              
			<tr><td><label>Current Password</label></td><td>
                    <input type="password" name="cpass" placeholder="Current Password" required="required"/></td></tr>
					<tr><td><label>New Password</label></td><td>
                    <input type="password" name="npass" placeholder="New Password" required="required"/></td></tr>
					
				   <tr><td><label>Confirm New Password</label></td><td>
                    <input type="password" name="cnpass" placeholder="Re-Enter New Password" required="required"/></td></tr>
					 <input type="hidden" class="margin-right" name="id" value="<?php echo $logid;?>">
						<script type="text/javascript">
function changepass()
{
	if(document.form_editc.cpass.value=="")
{
alert("Enter Current Password");
document.form_editc.cpass.focus();
return false;
    }
	if(document.form_editc.npass.value=="")
{
alert("Enter New Password");
document.form_editc.npass.focus();
return false;
    }
	if((document.form_editc.npass.value)!=(document.form_editc.cnpass.value))
{
alert("Password Missmatch");
document.form_editc.cnpass.focus();
return false;
    }

}
</script>
                </table> 
				<br>
				<div align="left" style="font-size:20px"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<input type="submit" name="submit" value="Update" onClick="return changepass()" >
				</div>

            </form>
		
					   
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
 window.location="../login/login.php";
 </script>
 <?php
 }
 ?>
 
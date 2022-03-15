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
<title>  Panel | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include("header.php");
include("sidemenu.php");

?>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		
		
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">View patient test Details</h3>
					 <?php
					 
		  $sql="select * from ptest,test where test.tid=ptest.tid";
		  $res=$obj->exe($sql);
		  $no=mysqli_num_rows($res);
		  if($no==0)
		  {
			  echo "&quot;No records here!!&quot;";
		  }
		  else
		  {
		  ?>
					<div class="panel-body widget-shadow">
						<table class="table">
							<thead>
						  <tr>
							<th>Patient Name</th>
							<th>Test name</th>
							<th>Value</th>
							
							
						  </tr>
						</thead>
						<tbody>
						<?php
			while($row=mysqli_fetch_array($res))
			{
		  ?>
						  <tr>
							<td><?php echo $row['pname'];?></td>
							<td><?php echo $row['tname'];?></td>
							<td><?php echo $row['value'];?></td>
							
							
							<td>
								   
                      <a href="delptest.php?id=<?php echo $row['ptid'];?>" style="color:#FF0000">Delete</a> 
							
                           <!-- <font style="color:#FF0000; font-style:italic;" >Approved</font>-->
                           
							
                          
                            
						</td>  </tr>
						</tbody>
					   <?php
			}
		  ?>
						</table>
						 <?php
			}
		  ?>
					</div>
		
		  </div>
		  </div>
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
 
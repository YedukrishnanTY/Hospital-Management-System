<?php
session_start();
include("db.php");
$obj=new db();
$id=$_POST["id"];
$cpass=$_POST["cpass"];
$npass=$_POST["npass"];
$sql="select * from login where  password='$cpass' and logid='$id'";
$res=$obj->exe($sql);
$no=mysqli_num_rows($res);
if($no==1)
{
	$sql1="update  login set password='$npass' where logid='$id'";
	$re=$obj->exe($sql1);
	?>	 <script>
		alert("password change successfully");
		window.location="index.php#changepass";
    </script>
	<?php }
else
{
	?>
    <script>
		alert("password not change try again");
		window.location="index.php#changepass";
    </script>
    <?php
}
?>
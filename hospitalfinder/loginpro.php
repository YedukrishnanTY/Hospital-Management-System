
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid black;
  border-bottom: 16px solid blue;
  border-left: 16px solid black;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 5s linear infinite;
  animation: spin 5s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<body>

<br /><br /><br /><br />
<center><h2>Loading...</h2><div class="loader"></div></center>

 <?php
 session_start();
 include"db.php";
 $obj=new db();
 $uname=$_POST['uname'];
 $pwd=$_POST['pwd'];
 $select="select * from login where username='$uname' and password='$pwd' and status=1";
 $res=$obj->exe($select);
 $row=mysqli_fetch_array($res);
	$_SESSION['id']=$row['logid'];
	$_SESSION['uname']=$row['username'];
	
	 if($row['utype']=="user")
	 { 
	 ?>
	 
	 <script>
window.location="user/index.php";
</script>

<?php 
}
else if($row['utype']=="doctor")
	 { 
	 ?>
	  <script>
window.location="doctor/index.php";
</script>
<?php 
}
else if($row['utype']=="lab")
	 { 
	 ?>
	  <script>
window.location="lab/index.php";
</script>

<?php 
}
else if($row['utype']=="hospital")
	 { 
	 ?>
	 
	 <script>
window.location="hospital/index.php";
</script>

<?php 
}
else
	 { 
	 ?>
	 
	 <script>
	 alert("Invalid Login");
window.location="login.php";
</script>

<?php 
}
?>
</body>
</html>
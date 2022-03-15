<?php
include("db.php");
$obj=new db();
$lname=$_POST["lname"];
$city=$_POST["city"];
$dis=$_POST["dis"];
$pin=$_POST["pin"];
$email=$_POST["email"];
$uname=$_POST["username"];
$pwd=$_POST["password"];

$insert="insert into login values(NULL,'$uname','$pwd','lab',1)";
$obj->exe($insert);
$sql="insert into lab (lname,city,district,pin,email) values('$lname','$city','$dis',$pin,'$email')";
$res=$obj->exe($sql);

?>
<script>
alert(' Success');
window.location="addlab.php";

</script>

<?php
include("db.php");
$obj=new db();
$hosname=$_POST["hosname"];

$docname=$_POST["docname"];
$age=$_POST["age"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$qual=$_POST["qual"];
$exp=$_POST["exp"];

$uname=$_POST["uname"];
$pwd=$_POST["password"];


$insert="insert into login values(NULL,'$uname','$pwd','pharmacist',1)";
$obj->exe($insert);
$select="select max(logid) from login";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];
$insert1="insert into pharmacist values (NULL,'$docname','$hosname','$age','$email','$gender','$phone','$qual','$exp','$uname','$logid',1)";

$obj->exe($insert1);

//$obj->exe($insert2);
?>
<script>
alert(' Sucessfully Details Added');
window.location="addph.php";

</script>

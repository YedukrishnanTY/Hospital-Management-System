<?php
include("db.php");
$obj=new db();
$hosname=$_POST["hosname"];
$dname=$_POST["dname"];
$docname=$_POST["docname"];
$age=$_POST["age"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$qual=$_POST["qual"];
$exp=$_POST["exp"];
//$img=$_POST["image"];
$uname=$_POST["uname"];
$pwd=$_POST["password"];
$tamount=$_POST["tamount"];


if(isset($_POST['submit']))
{ 
$y=$_FILES['image']['name'];
$r=$_FILES['image']['tmp_name'];
move_uploaded_file($r,"../uploads/".$y);
} 
$insert="insert into login values(NULL,'$uname','$pwd','doctor',1)";
$obj->exe($insert);
$select="select max(logid) from login";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];
$insert1="insert into doctor values (NULL,'$docname','$hosname','$age','$email','$gender','$phone','$dname','$qual','$exp','$y','$tamount','$uname','$logid',1)";

$obj->exe($insert1);

//$obj->exe($insert2);
?>
<script>
alert(' Sucessfully Details Added');
window.location="adddoctor.php";

</script>

<?php
include("db.php");
$obj=new db();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$location=$_POST['location'];
$address=$_POST['address'];
//$image=$_POST['img'];
$path=$_POST['path'];

if(isset($_POST['submit']))
{ 
$y=$_FILES['img']['name'];
$r=$_FILES['img']['tmp_name'];
move_uploaded_file($r,"uploads/".$y);
} 

$uname=$_POST['uname'];
$password=$_POST['pwd'];

$select="select max(logid+1) from login";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$logid=$row[0];

$insert="insert into hospital (hosname,email,phone,location,bname,image,username,logid,status,map) values('$name','$email','$phone','$location','$address','$y','$uname',$logid,1,'$path')";


$insert1="insert into login values(NULL,'$uname','$password','hospital',1)";
$obj->exe($insert);
$obj->exe($insert1);
//$obj->exe($insert2);
//echo $insert;
//echo $insert1;
?>
<script>
alert(' Sucessfully Details Added');
window.location="login.php";

</script>
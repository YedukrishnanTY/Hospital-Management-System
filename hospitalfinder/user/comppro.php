<?php
include("db.php");
$obj=new db();
//$id=$_POST["id"];
$username=$_POST["uname"];
$message=$_POST["complaint"];
$sql="insert into complaints (username,complaint) values('$username','$message')";
$res=$obj->exe($sql);
?>
<script>
alert(' Successfully Sent');
window.location="complaint.php";

</script>
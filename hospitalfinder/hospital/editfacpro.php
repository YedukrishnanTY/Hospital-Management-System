<?php
include("db.php");
$obj=new db();

$id=$_POST["fid"];
$fname=$_POST["fname"];
$hos=$_POST["hosname"];

$sql="update facilities set fname='$fname',hosname='$hos' where fid=$id";
$res=$obj->exe($sql);
?>
<script>
alert(' Sucessfully Details Added');
window.location="viewfac.php";

</script>

<?php
include("db.php");
$obj=new db();

$pid=$_POST["pgmid"];
$pname=$_POST["pgmname"];
$hos=$_POST["hosname"];
$pd=$_POST["pgmdate"];
$pt=$_POST["pgmtime"];
$pv=$_POST["pgmvenue"];

$sql="update programs set pgmname='$pname',hosname='$hos',pgmdate='$pd',pgmtime='$pt',pgmvenue='$pv' where pgmid=$pid";
$res=$obj->exe($sql);
?>
<script>
alert(' Sucessfully Details Added');
window.location="viewpgm.php";

</script>

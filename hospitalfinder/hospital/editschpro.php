<?php
include("db.php");
$obj=new db();

$pid=$_POST["sid"];
$hos=$_POST["hosname"];
$doc=$_POST["docname"];
$pd=$_POST["date"];
$pt=$_POST["from"];
$pv=$_POST["to"];

$sql="update schedule set hosname='$hos',docname='$doc',date='$pd',time1='$pt',time2='$pv' where id=$pid";
$res=$obj->exe($sql);
?>
<script>
alert(' Sucessfully Details Added');
window.location="viewschedule.php";

</script>

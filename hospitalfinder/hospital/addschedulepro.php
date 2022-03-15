<?php
include("db.php");
$obj=new db();
$hosname=$_POST["hosname"];
$docname=$_POST["docname"];
$date=$_POST["date"];
$ftime=$_POST["ftime"];
$totime=$_POST["totime"];

$sql="insert into schedule (hosname,docname,date,time1,time2) values('$hosname','$docname','$date','$ftime','$totime')";
$res=$obj->exe($sql);
?>
<script>
alert(' Success');
window.location="addschedule.php";

</script>

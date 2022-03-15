<?php
include("db.php");
$obj=new db();
$hosname=$_POST["hosname"];
$pname=$_POST["pname"];
$pdate=$_POST["pdate"];
$ptime=$_POST["ptime"];
$pvenue=$_POST["pvenue"];
$about=$_POST["about"];
 
$sql="insert into programs (pgmname,hosname,pgmdate,pgmtime,pgmvenue,about) values('$pname','$hosname','$pdate','$ptime','$pvenue','$about')";
$res=$obj->exe($sql);
?>
<script>
alert(' Success');
window.location="addpgm.php";

</script>

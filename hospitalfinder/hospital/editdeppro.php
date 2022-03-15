<?php
include("db.php");
$obj=new db();

$id=$_POST["depid"];
$department=$_POST["department"];
//$hos=$_POST["hosname"];

$sql="update department set department='$department' where depid=$id";
$res=$obj->exe($sql);
?>
<script>
alert(' Sucessfully Details Added');
window.location="viewdepart.php";

</script>

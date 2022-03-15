<?php
include("../db.php");
$obj=new db();
$tname=$_POST["tname"];
$min=$_POST["min"];
$max=$_POST["max"];

$sql="insert into test (tname,min,max) values('$tname','$min','$max')";
$res=$obj->exe($sql);

?>
<script>
alert(' Success');
window.location="addtest.php";

</script>

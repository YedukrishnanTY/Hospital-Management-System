<?php
include("../db.php");
$obj=new db();
$pname=$_POST["pname"];
$tid=$_POST["tname"];
$value=$_POST["value"];

$sql="insert into ptest (pname,tid,value) values('$pname',$tid,'$value')";
$res=$obj->exe($sql);

?>
<script>
alert(' Success');
window.location="addptest.php";

</script>

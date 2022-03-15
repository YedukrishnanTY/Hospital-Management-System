<?php
include("db.php");
$obj=new db();
$uname=$_POST["uname"];
$acno=$_POST["acno"];
$cvv=$_POST["cvv"];
$bal=$_POST["balance"];
$sql="insert into userac (username,acno,cvv,balance) values('$uname','$acno','$cvv','$bal')";
$res=$obj->exe($sql);
?>
<script>
alert(' Success');
window.location="debitcard.php";

</script>

<?php
include("db.php");
$obj=new db();

$username=$_POST["username"];
$docname=$_POST["docname"];
$department=$_POST["department"];
$hosname=$_POST["hosname"];
$date=$_POST["date"];
$tamount=$_POST["tamount"];
$bamount=$_POST["bamount"];
$balance=$_POST["balance"];
$id=$_POST["id"];
$sql="insert into admitcard (username,docname,department,hosname,date,tamount,bamount,balance) values('$username','$docname','$department','$hosname','$date','$tamount','$bamount','$balance')";
$res=$obj->exe($sql);
$sql1="update payment set status='generated' where payid=$id";
$res1=$obj->exe($sql1);
?>
<script>
alert(' Sucessfully Details Added');
window.location="index.php";

</script>

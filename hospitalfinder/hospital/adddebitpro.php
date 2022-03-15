<?php
include("db.php");
$obj=new db();

$hosname=$_POST["hosname"];
$acno=$_POST["acno"];
$cvv=$_POST["cvv"];
$balance=$_POST["balance"];
 
$sql="insert into hospitalac (hosname,acno,cvv,balance) values('$hosname','$acno',$cvv,$balance)";
$res=$obj->exe($sql);
//echo "$sql";
?>
<script>
alert(' Success');
window.location="adddebit.php";

</script>

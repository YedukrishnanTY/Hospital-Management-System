<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();

error_reporting(0);
include("../db.php");
$ob=new db();
$pid=$_SESSION['st1'];
$pa=$_POST['pa'];
$med=$_POST['Medicine'];
$qty=$_POST['qty'];
$ss=$_POST['ss'];
$d=$_POST['c'];
$id=$_POST['idd'];

$sq="select Stock from tbl_stock where Med_ID='$med'";
$re=$ob->exe($sq);
$ro=mysqli_fetch_array($re);
$st=$ro[0];

$new=$st-$qty;

 $r=implode(',',$d);



if($st<$qty)
{?>
<script>
alert('Quantity is Greater Than Available Quantity');
window.location="pri.php";
</script>
<?php
}
if($st>$qty)
{ 
$sql8="insert into tbl_medmore(Pre_id,Med_ID,Price,qty,Timing,Selection,status)values('$pa','$med','$id','$qty','$ss','$r','0')";
$res8=$ob->exe($sql8);
$z="update tbl_stock set Stock='$new' where Med_ID='$med'";
$resz=$ob->exe($z);
//echo "$sql2";
?>
<script>
window.location="addprimore.php";
</script>
<?php

}
?>
</body>

</html>

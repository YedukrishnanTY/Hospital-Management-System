<?php
					  //error_reporting(0);
session_start();
include("../db.php");
	$obj=new db();
$name=$_POST['name'];
//$id=$_POST['idd'];
$pa=$_POST['pid'];
$docname=$_POST['docname'];
$d=$_POST['d'];
$ad1=$_POST['Address1'];
$ad2=$_POST['Address2'];
$ad3=$_POST['Address3'];
//$med=$_POST['Medicine'];
$date=$_POST['date'];
//$qty=$_POST['qty'];
//$ss=$_POST['ss'];
$check=$_POST['check'];
//$d=$_POST['c'];



 
$sql2="insert into tbl_pr(Date,Docid,Patient_ID,Name,dis,PrmryAnlys,PrmryDig,Prscrptn,Flwup,status)values('$date','$docname','$pa','$name','$d','$ad1','$ad2','$ad3','$check','0')";
$res3=$obj->exe($sql2);
$sq1="select max(Pre_id) from tbl_pr";
$re1=$obj->exe($sq1);
$ro1=mysqli_fetch_array($re1);
$st1=$ro1[0];
//$_SESSION['st1']=$st1;
//echo "$sql2";
//header("location:addprimore.php");

?>
<script>
window.location="addprimore.php";
</script>
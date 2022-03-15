<?php
include("db.php");
$obj=new db();
//$rid=$_POST["id"];
$username=$_POST["uname"];
$hos=$_POST["hospital"];
$r=$_POST["review"];
$sql="insert into review (username,hosname,review) values('$username','$hos','$r')";
$res=$obj->exe($sql);
?>
<script>
alert(' Success');
window.location="review.php";

</script>

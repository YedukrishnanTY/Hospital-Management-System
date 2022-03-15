<?php
include("db.php");
$obj=new db();
$dname=$_POST["dname"];
$hosname=$_POST["hosname"];
$sql="insert into department (department,hosname) values('$dname','$hosname')";
$res=$obj->exe($sql);

?>
<script>
alert(' Success');
window.location="adddep.php";

</script>

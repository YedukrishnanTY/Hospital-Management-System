<?php
include("db.php");
$obj=new db();
//$id=$_POST["id"];
$uname=$_POST["uname"];
$docname=$_POST["doctor"];
$query=$_POST["query"];

$sql="insert into queries (username,docname,que) values('$uname','$docname','$query')";
$res=$obj->exe($sql);
?>
<script>
alert(' Success');
window.location="query.php";

</script>

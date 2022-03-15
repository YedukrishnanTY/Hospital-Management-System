<?php
include("db.php");
$obj=new db();
//$id=$_POST["id"];
$name=$_POST["name"];
$docname=$_POST["docname"];
$query=$_POST["query"];
$reply=$_POST["reply"];

$sql="insert into qreply (username,docname,que,reply) values('$name','$docname','$query','$reply') ";
$res=$obj->exe($sql);
?>
<script>
alert(' Success');
window.location="viewquery.php";

</script>

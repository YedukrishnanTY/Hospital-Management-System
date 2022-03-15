<?php
include("db.php");
$obj=new db();
$hosname=$_POST["hosname"];
$fname=$_POST["fname"];
//$image=$_POST["image"];
if(isset($_POST['submit']))
{ 
$y=$_FILES['image']['name'];
$r=$_FILES['image']['tmp_name'];
move_uploaded_file($r,"../uploads/".$y);
} 
$sql="insert into facilities (fname,hosname,fimage) values('$fname','$hosname','$y')";
$res=$obj->exe($sql);
?>
<script>
alert(' Success');
window.location="addfacility.php";

</script>

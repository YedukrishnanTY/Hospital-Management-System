<?php
include"db.php";
 $obj=new db();
 $userid=$_GET['un'];
 
 $delete= "delete from schedule where id='$userid'";
 $obj->exe($delete);
 
 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="viewschedule.php";
    </script>
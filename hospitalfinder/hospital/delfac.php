<?php
include"db.php";
 $obj=new db();
 $userid=$_GET['un'];
 
 $delete= "delete from facilities where fid='$userid'";
 $obj->exe($delete);
 
 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="viewfac.php";
    </script>
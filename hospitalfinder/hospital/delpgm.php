<?php
include"db.php";
 $obj=new db();
 $userid=$_GET['un'];
 
 $delete= "delete from programs where pgmid='$userid'";
 $obj->exe($delete);
 
 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="viewpgm.php";
    </script>
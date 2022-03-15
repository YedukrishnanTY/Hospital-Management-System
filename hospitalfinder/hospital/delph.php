<?php
include"db.php";
 $obj=new db();
 $userid=$_GET['un'];
 
 $delete= "delete from pharmacist where phid='$userid'";
 $obj->exe($delete);
 
 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="viewph.php";
    </script>
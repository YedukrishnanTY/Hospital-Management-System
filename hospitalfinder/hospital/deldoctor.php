<?php
include"db.php";
 $obj=new db();
 $userid=$_GET['un'];
 
 $delete= "delete from doctor where docid='$userid'";
 $obj->exe($delete);
 
 ?>
<script>
		alert("Sucessfully Details Deleted");
		window.location="viewdoctor.php";
    </script>
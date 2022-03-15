<?php
include"../db.php";
 $obj=new db();
 $cid=$_GET['id'];
 
 
 $delete1="delete from test where tid=$cid";
 $obj->exe($delete1);
 ?>
<script>
		alert("Test Deleted");
		window.location="viewtest.php";
    </script>
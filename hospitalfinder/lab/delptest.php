<?php
include"../db.php";
 $obj=new db();
 $cid=$_GET['id'];
 
 
 $delete1="delete from ptest where ptid=$cid";
 $obj->exe($delete1);
 ?>
<script>
		alert("Test details Deleted");
		window.location="viewptest.php";
    </script>
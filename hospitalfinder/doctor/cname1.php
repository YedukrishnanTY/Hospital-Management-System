<?php
$name=$_GET['locat'];
include("../db.php");
$obj=new db();
$sql="select name from user where userid=$name";
$res=$obj->exe($sql);
$row=mysqli_fetch_array($res);
$n=$row[0];

$e=bin2hex(openssl_random_pseudo_bytes(1));
?>

  
 <td><label>Name</label></td>
<td><br /><input type="text" name="name" value="<?php echo $n;?>"/><br /><br /></td>

   
  
 
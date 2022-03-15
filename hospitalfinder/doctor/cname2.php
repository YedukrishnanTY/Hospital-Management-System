<?php
$name=$_GET['locatt'];
include("../db.php");
$obj=new db();
$sql="select Price from tbl_stock where Med_ID='$name'";
$res=$obj->exe($sql);
$row=mysqli_fetch_array($res);
$namee=$row[0];
?>

   
 <td><label>Medicine Price</label></td>
<td><input type="text" name="idd" value="<?php echo $namee;?>"/></td>

   
  
 
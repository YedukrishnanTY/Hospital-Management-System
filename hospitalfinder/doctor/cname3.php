<?php
$name=$_GET['locattt'];
include("../db.php");
$obj=new db();
//$sql="select Price from tbl_medicine where tbl_medicine.Medname='$name'";
//$res=$obj->execute($sql);
//$row=mysqli_fetch_array($res);
//$namee=$row[0];
  if($name=='hourly')
  {
?>

 
 <td><label>Select Hour Difference</label></td>
<td><input type="checkbox" name="c[]" value="1"/>1
<input type="checkbox" name="c[]" value="2"/>2
<input type="checkbox" name="c[]" value="3"/>3</td>
<?php
}
if($name=='other')
{
?>

<td><label>Select</label></td>
<td><input type="checkbox" name="c[]" value="fn"/>FN
<input type="checkbox" name="c[]" value="an"/>AN
<input type="checkbox" name="c[]" value="night"/>NIGHT</td>

   <?php
   }
   ?>
  
 
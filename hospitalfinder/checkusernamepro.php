<?php
 $a=$_GET['q'];
	include("db.php");
$ob=new db();
	$query="select  * from user where phone='$a'";
	$res=$ob->exe($query);
	$r=mysqli_num_rows($res);
	if($r>0)
	{
	?>
		<p style="color:#FF0000">Contact Number already taken</p>
		<?php
	}
	else
	{
		?>
		<p style="color:#00CC00">Contact Number Available</p>
		<?php
	}

	?>

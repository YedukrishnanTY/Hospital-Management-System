<?php
 $aa=$_GET['qq'];
	include("db.php");
$ob=new db();
	$query="select  * from hospital where email='$aa'";
	$res=$ob->exe($query);
	$r=mysqli_num_rows($res);
	if($r>0)
	{
	?>
		<p style="color:#FF0000">Email ID already taken</p>
		<?php
	}
	else
	{
		?>
		<p style="color:#00CC00">Email ID Available</p>
		<?php
	}

	?>

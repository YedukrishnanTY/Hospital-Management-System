<?php
 include("db.php");
 $obj=new db();
 error_reporting(0);
$bamount=$_POST["bamount"];
$tamount=$_POST["tamount"];
$uname=$_POST["uname"];
$docname=$_POST["docname"];
$docid=$_POST["docid"];
$hosname=$_POST["hosname"];
$dep=$_POST["dep"];
$date=$_POST["date"];
$cardno=$_POST["acno"];
$cvv=$_POST["cvv"];

$selectb="select * from userac where username='$uname' and acno=$cardno and cvv=$cvv";
$resb=$obj->exe($selectb);
$no=mysqli_num_rows($resb);

						if($no==0)
						{
						?>
						<script>
alert(' Invalid Card Number Or Cvv ');
window.location="index3.php?id=<?php echo $docid;?>";

</script>
<?php
}
else
{

$select="select balance from userac where acno=$cardno and cvv=$cvv ";
$res=$obj->exe($select);
$row=mysqli_fetch_array($res);
$b=$row[0];

$select5="select balance from hospitalac where hosname='$hosname' ";
$res5=$obj->exe($select5);
$row5=mysqli_fetch_array($res5);
$bb=$row5[0];



//echo $b;
$bal=$b-$bamount;
//echo $bamount;
$baln=$tamount-$bamount;

$buil=$bb+$bamount;

$sql="insert into payment  values(NULL,'$uname','$docname','$dep','$hosname','$date','$tamount',$bamount,$baln,'Booked')";
$sql1="update userac set balance=$bal where acno=$cardno and cvv=$cvv ";
//$sql2="update adminac set balance='$ad'";
$sql3="update hospitalac set balance=$buil where hosname='$hosname'";
$res=$obj->exe($sql);
$res1=$obj->exe($sql1);
//$res2=$obj->exe($sql2);
$res3=$obj->exe($sql3);
//echo $sql."<br>";
//echo $sql1."<br>";
?>
<script>
alert(' Thank You ');
window.location="index.php";

</script>
<?php
}
?>
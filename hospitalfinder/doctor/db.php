
<?php
class db
{
	var $con,$res;
		
	function connection()
	{
		$this->con=mysqli_connect("localhost","root","");
		mysqli_select_db($this->con,"hospital_finder");	
	}
	
	function exe($sql)
	{
		$this->connection();
		return $this->res=mysqli_query($this->con,$sql);	
	}
	
	function msg($ms)
	{
		$this->message="<script>alert('" . $ms . "')</script>";
		return $this->message;
	}

	function redirect($location)
	{
		echo '<meta http-equiv="Refresh" Content="0; URL='.$location.'">';
		exit;
	}
	
}
?>


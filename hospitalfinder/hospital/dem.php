<!-- contact -->
<div class="contact" id="viewele">
	<div class="contact-top">
		<h3>Elections</h3>
		<?php
			$id=$_GET['id'];
			$logid=$_SESSION['id'];
			$select3="select * from election";
			$res3=$obj->exe($select3);
			$select4="select * from user where logid=$logid";
			$res4=$obj->exe($select4);
			
				while($row4=mysqli_fetch_array($res4))
				{
				?>
	</div>
	<div class="container">
		<div class="contact-main w3agile">
			<div class="col-md-7 contact-left">
			  <div class="contact-bottom">
			  	<form name="form_edit" enctype="multipart/form-data" class="login" action="viewelepro.php" method="post">
			  		<input type="text" placeholder="Name" name="name" value="<?php echo $row4[6];?>">
					<?php
					}
					?>
					<?php
					while($row3=mysqli_fetch_array($res3))
				{
				?>
			  		<input type="text" class="no-mar" placeholder="Election name" name="elname">
					<?php echo $row3[1];
					$_SESSION['elname']=$row3[1];
					
					
					?>
					 <input type="radio" name="can"  value="<?php echo $row3[2];?>" /> <label id="label"><?php echo $row3[2];?></label>
                    <input type="radio" name="can" value="<?php echo $row3[3];?>" /><label id="label"><?php echo $row3[3];?></label>
					 <input type="radio" name="can" value="<?php echo $row3[4];?>" /><label id="label"><?php echo $row3[4];?></label>
					
			  		<input type="submit" value="Submit" name="submit" onClick="return valid()">
			  	<button><a href="#" data-toggle="modal" data-target="#myModal2">View Results<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></button>
				
            </form>
		</div>
		
		<?php
		}
		?>
			  </div>
			 </div>
			 <div class="col-md-5 map">
			 </div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
	
	<!-- contact -->
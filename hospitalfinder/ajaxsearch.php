<?php
include("db.php");
$obj=new db();
$locat=$_GET['locat'];
$select="SELECT * FROM hospital WHERE location='$locat' OR hosname='$locat'";
$res=$obj->exe($select);
//echo $select;
$num=mysqli_num_rows($res);
if($num==0)
{
?>
<div class="w3layouts_classes_grids">
<ul>
<li>
					
						<div class="w3_agile_class_grid">
							<div class="w3layouts_team_grid agileits_w3layouts_class">
								<?php
								echo "<h3>Sorry We Could Not Found Anything</h3>";

								?>
								<div class="w3layouts_team_grid_pos">
									<div class="wthree_text"></div>
								</div>
							</div>
							
						</div>
						
					</li>
					
				</ul>
			</div>
			<?php
			}
			else
			{
			?>
	<div class="w3layouts_classes_grids">
	
				<div style="height:30%; width:100%; float:left">
					<div style="height:50%; width:50%; float:left">
				<?php
					while($row=mysqli_fetch_array($res))
			{
			?> 
					
					
						<div class="w3_agile_class_grid" height="10" width="30">
							<div class="w3layouts_team_grid agileits_w3layouts_class">
								<img src="uploads/<?php echo $row[6];?>" alt=" " class="img-responsive"  />
								<div class="w3layouts_team_grid_pos">
									<div class="wthree_text">
										
									</div>
								</div>
							</div>
							<div class="w3_agileits_class_grid">	
								<h3><?php echo $row[1];?> Hospital</h3><hr/>
								<button><a href="index2.php?id=<?php echo $row[0]; ?>">Hospital Details</a></button>
							</div>
						</div>
						
						<div class="w3ls-heading" >
				<h3>Root Map</h3>
				</div>
					<iframe src="<?php echo $row[10];?>"></iframe>
					<?php
								}
								?>
								
								</div>
				</div>
			</div>
			
		</div>
		<?php
		}
		?>
		
			
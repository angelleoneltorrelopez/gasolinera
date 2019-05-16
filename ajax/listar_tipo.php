<?php
	
	/* Connect To Database*/
	require_once ("../conexion.php");

	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){


	$query = mysqli_query($con,"SELECT * FROM  tipo ");
	//loop through fetched data
	
	if ($query){
		
	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th >Tipo</th>
						<th >Cantidad </th>
						<th></th>
					</tr>
				</thead>
				<tbody>	
						<?php 
						while($row = mysqli_fetch_array($query)){	
							$idtipo=$row['idtipo'];
							$cantidad=$row['cantidad'];
						?>	
						<tr>
							<td class='text-center'><?php echo $idtipo;?></td>
							<td ><?php echo $cantidad;?></td>
							
						</tr>
						<?php }?>
				</tbody>			
			</table>
		</div>	

	
	
	<?php	
	}	
}
?>          
		  

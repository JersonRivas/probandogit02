<!DOCTYPE html>
 <html>
 
		 <head>
		<style>
		table, td, th {
		    border: 3px solid green;
		}
		
		table {
		    border-collapse: collapse;
		    width: 85%;
		}
		
		th {
		    text-align: left;
		}
		</style>
		</head>
		 
 <body>
   	<div name="imagen1" align="center">
 	<img src="images/imagen1.jpg" width="1100" height="170"/>
 	</div>
 	<div name="middle" align="center">
  	<table>
 
  		 <?php
				  $servername = "us-cdbr-iron-east-03.cleardb.net";
				  $username = "b74ba3320e82ec";
				  $password = "2d194843";
				  $dbname = "ad_bb6ddb2f34daf52";
				  // Create connection
				  $conn = new mysqli($servername, $username, $password, $dbname);
				  // Check connection
				  if ($conn->connect_error) {
				  
				      die("Connection failed: " . $conn->connect_error);
				  }
				  $sql = "SELECT * from servicios";
				  $result = $conn->query($sql);
				  if ($result->num_rows > 0) {
			     	?>
						<tr>
						<th scope="col">Codigo</th> 
						<th scope="col">Nombre</th> 
						<th scope="col">Descripcion</th> 
						<th scope="col">Imagen</th>
						</tr>			
						
				    <?php
				      while($row = $result->fetch_assoc()) {
		   			?>
				      <tr>
				      <td><?php echo $row['codigo_servicio']?></td>
				      <td><?php echo $row['nombre_servicio']?></td>
				      <td><?php echo $row['descripcion_servicio']?></td>
				      <td><img src="<?php echo $row['imagen_servicio']?>"/></td>
				      </tr>
				     <?php }
				  } else {
				      echo "0 results";
				  }
				  $conn->close();
		 ?> 
		 	
 	</table>
 		 </div>
 			<div name="imagen2" align="center">
		 	<img src="images/imagen2.jpg" width="1100" height="190"/>
 			</div>
 </body>
 </html>
 
 
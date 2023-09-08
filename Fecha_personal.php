<?php 

#date_default_timezone_set("America/Colombia/Bogota");


$nombre = "camilo rincon";
$edad = 25;
//$aPeliculas  =  array("Volvel al futuro-1","Titanic-again","El dia despues de mañana sipi");

$aPeliculas =["Volver al futuro","Titanic","El dia despues de mañana"]; // otra forma


?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ficha personal</title>
	<!--CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
			<main class="container">
					<div class="row">
						<div class="col-12 text-center py-5">
							<h1>Ficha personal</h1>
							</div>
					</div>
					<div class="row">
						<div class="col-12">
							<table  class="table table-hover border"">
											<tr>
												<th>Fecha</th>
												<td><?php  echo date("d/m/y") ; ?></td>
											</tr>
											<tr>
												<th>Nombre y apellido</th>
												<td><?php   echo $nombre;   ?></td>		
											</tr>
												<tr>
												<th>Edad</th>
												<td><?php   echo $edad;   ?></td>		
											</tr>
												<tr>
												<th>Peliculas favoritas</th>
												<td><?php  echo $aPeliculas[0]; ?><br>
							 							<?php  echo $aPeliculas[1]; ?><br>
														<?php  echo $aPeliculas[2]; ?>	</td>
											</tr>
							</table>
						</div>

					</div>

			</main>

			
	
</body>
</html>
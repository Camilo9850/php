<?php
ini_set('display_errors', 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


?>


<?php

$aPacientes = array();
$aPacientes[] =array(
"DNI" => "33.765.012" ,
"nombre" => "Ana acuña",
"Edad" => "45",
"Peso" => "81.5",
);


$aPacientes[] =array(
"DNI" => "23.684.385" ,
"nombre" => "Gonzalo Bustamante",
"Edad" => "66",
"Peso" => "79",
);

$aPacientes[] =array(
"DNI" => "23.684.385" ,
"nombre" => "Juan  Irraola",
"Edad" => "28",
"Peso" => "79",
);

$aPacientes[] =array(
"DNI" => "23.684.385" ,
"nombre" => "Beatriz Ocampo",
"Edad" => "50",
"Peso" => "79",
);




//print_r($aProductos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listado de productos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

	<main class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="py-5">Listado de pacientes</h1>
				</div>
		</div>
		<div class="row">
				<div class="col-12">
					<table class="table table-hover border">
						<thead>
							<tr>
								<th>DNI</th>
								<th>Nombre y apellido</th>
								<th>Edad</th>
								<th>Peso</th>
							
							</tr>
						</thead>
						<tbody>

							<?php  for($i=0; $i < count($aPacientes); $i++){  ?>
							
									
								
									<tr>
											<td><?php  echo $aPacientes[$i]["DNI"] ; ?></td>
											<td><?php  echo $aPacientes[$i]["nombre"] ; ?></td>
											<td><?php  echo $aPacientes[$i]["Edad"] ; ?></td>
											<td><?php  echo $aPacientes[$i]["Peso"] ; ?></td>
											
											
											
											
									</tr>
									
							<?php 
						
						
							 }
							 ?>

						</tbody>		

					</table>
				</div>
				
		</div>
	</main>
	
</body>
</html>
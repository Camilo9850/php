<?php
ini_set('display_errors', 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


?>


<?php

$aProductos = array();
$aProductos[] =array(
"nombre" => "Smart Tv 55/ 4K UHD" ,
"marca" => "Hitachi",
"modelo" => "554ks28",
"stock" => "60",
"precio" => "50000",

);
$aProductos[] =array(
"nombre" => "Samsumg Galaxy A30 Blanco" ,
"marca" => "Samsumg",
"modelo" => "Galaxy A30",
"stock" => "0",
"precio" => "22000",

);

$aProductos[] =array(
"nombre" => "Aire Acondiccionado Split Frio/Color Surrey 290F" ,
"marca" => "Surrey",
"modelo" => "553AIQ1201E",
"stock" => "5",
"precio" => "45000",

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
					<h1 class="py-5">Listado de productos</h1>
				</div>
		</div>
		<div class="row">
				<div class="col-12">
					<table class="table table-hover border">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Marca</th>
								<th>Modelo</th>
								<th>Stock</th>
								<th>Precio</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody>

							<?php 
							$contador=0;
							$sumatoriaPrecio=0;
							for ($contador= 0; $contador < count($aProductos); $contador++ ){
									$sumatoriaPrecio += $aProductos[$contador]["precio"];
								 ?>
									<tr>
											<td><?php  echo $aProductos[$contador]["nombre"] ; ?></td>
											<td><?php  echo $aProductos[$contador]["marca"] ; ?></td>
											<td><?php  echo $aProductos[$contador]["modelo"] ; ?> </td>
											<td><?php  echo $aProductos[$contador]["stock"] > 10 ? "Hay stock":($aProductos[$contador]["stock"] > 0 && $aProductos[$contador]["stock"] <=  10 ? " poco stock" : " no  hay stock"); ?></td>
											<td><?php  echo $aProductos[$contador]["precio"] ; ?></td>
											<td><button class="btn btn-primary">Comprar</button></td>
											
											
									</tr>
									
							<?php 
						
						
							 }
							 ?>

						</tbody>		

					</table>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="table table-hover border">
								<p> El subtotal es : <?php echo  $sumatoriaPrecio ?></p>
						</div>
					
					</div>
				</div>
		</div>
	</main>
	
</body>
</html>
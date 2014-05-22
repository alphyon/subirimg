<?php include "./funciones/Coneccion.php";?>
<?php $sql = "SELECT * FROM imgarchivo;";
	$dato = consultaD($con,$sql,3);
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
	<style>
		body{
			background-color: #eee;
		}
		.container-fluid{
			width: 500px;
		}
		
	</style>
</head>
<body>
<div class="jumbotron">
	<div class="container">
	<a href="index.php" class="btn btn-success">inicio</a>
		<table class="table table-condensed table-bordered">
		<tr class="info">
			<td>id</td>
			<td>nombre</td>
			<td>imagen</td>
		</tr>
			<?php foreach ($dato as  $fila) {?>
			<tr>
				<td><?php print $fila[0]; ?></td>
				<td><?php print $fila[2]; ?></td>
				<td><img src=".<?php print $fila[1]; ?>" alt="<?php print $fila[2]; ?>" class="img-thumbnail"></td>
			</tr>				
			<?php } ?>
		</table>
  	
	</div>
</div>	
</body>
</html>
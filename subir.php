<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
	<style>
		.container-fluid{
			width: 500px;
		}
		.jumbotron{
			background-color: #fff;
		}
	</style>
</head>
<body>
<p>Se ha realizado una modificación en el archivo 'Coneccion.php' en el return de la
funcion consultaA() se a modificado para que devuelva el valor de las filas afectadas
en ves del mensaje </p>
<div class="jumbotron">
	<div class="container-fluid">
		<div class="panel panel-default">
  			<div class="panel-heading">
    			<h3 class="panel-title">Accion Realizada</h3>
  			</div>
  		<div class="panel-body">

<?php 
include "./funciones/Coneccion.php";
$fnombre = md5($_FILES['archivo']['name']).'_'.(rand()*1000);
$ext = strstr($_FILES['archivo']['name'], '.');
$ruta ="/img/".$fnombre.$ext;
$archivo = copy($_FILES['archivo']['tmp_name'], "./img/".$fnombre.$ext);
if($_REQUEST['tipo']=='dir'){
	if($archivo){
	$sql = "INSERT INTO imgarchivo (id,ruta,nombre) VALUES
			(null,'".$ruta."','".$fnombre."');";
	if(consultaA($con,$sql) != 0){
		print "Imagen almacenada";
		
	}else{
		unlink(".".$ruta);
		print "algun error ha ocurrido";
	}
	print "<a href='galeria.php'>ver archivos</a>";
}

}else{
	print "Pos No intenten guardar la imagen en la base de datos :P";
}

 ?>

 </div></div></div></div></body></html>
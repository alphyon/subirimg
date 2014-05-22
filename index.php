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
<div class="jumbotron">
	<div class="container-fluid">
		<div class="panel panel-default">
  			<div class="panel-heading">
    			<h3 class="panel-title">Seleccione la imagen</h3>
  			</div>
  		<div class="panel-body">
    		<form action="subir.php" method="post" enctype="multipart/form-data">
    			<div class="container">
    				<div class="row">
    					<div class="col-xs-4">imagen </div>
    					<div class="col-xs-2">
    						<input type="file" name="archivo" class="form controls">
    					</div>
    				</div>
    				<br>
                    <div class="row">
                        <div class="col-xs-6">
                            <input type="radio" name="tipo" class="form controls" value="bdd">Base de Datos
                        </div>
                    </div>
                    <br><div class="row">
                        <div class="col-xs-6">
                            <input type="radio" name="tipo" class="form controls" value="dir" checked>Directorio
                        </div>
                    </div>
                    <br>
    				
    				<div class="row">
    					<div class="col-xs-4"></div>
    					<div class="col-xs-2">
    						<input type="submit" name="bot" value="enviar" class="btn btn-info">
    					</div>
    				</div>
    			</div>
    		</form>
  		</div>
	</div>
</div>
</div>

	
</body>
</html>
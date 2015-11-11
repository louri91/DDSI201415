<html>

<?php 
include_once 'conexionDDSI.php';
$conn = dbConnect();
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<h1 class="text-center">Insertar Servidor</h1>

<title>MAAG Servidores - Servidores</title>
</head>
<body>

<div class="container">
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
  <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation" class="active"><a href="listadoServidores.php">Servidor</a></li>
    </ul>
    <br>

	<FORM method=POST action="scriptInsertarServidor.php" class="form-horizontal">

	<div class="form-group">

    		<label for="IDS" class="col-sm-2 control-label">ID</label>
    		<div class="col-sm-10">
      			<input type=text class="form-control" name= "IDS" placeholder="ID">
    		</div>
  	</div>

	<div class="form-group">

    		<label for="CPUs" class="col-sm-2 control-label">CPU's</label>
    		<div class="col-sm-10">
      			<input type=text class="form-control" name= "CPUs" placeholder="CPU's">
    		</div>
  	</div>

	<div class="form-group">
    		<label for="GBRAM" class="col-sm-2 control-label">GB RAM</label>
    		<div class="col-sm-10">
      			<input type=text class="form-control" name="GBRAM" placeholder="Gb's Ram">
    		</div>
  	</div>


	<div class="form-group">
		<label for="ESTADO" class="col-sm-2 control-label">Estado</label>
  	    	<div class="col-sm-10">
		<select class="form-control input-sm", name='ESTADO' placeholder= "Estado">
			<option value='ALTA'>Alta</option>
			<option value='BAJA'>Baja</option>
			<option value='MANUTENCION'>Manutencion</option>
			<option value='LIBRE'>Libre</option>
			<option value='OCUPADO'>Ocupado</option>
		</select>
		</div>
	</div>

  	<div class="form-group">
    		<label for="PRECIO" class="col-sm-2 control-label">Precio</label>
    		<div class="col-sm-10">
      			<input type=text class="form-control" name="PRECIO" placeholder="Precio">
    		</div>
  	</div>
  	

	<p class="text-right">
	<br>
	<button type="submit" class="btn btn-primary">	Enviar	</button>
	</p>

</FORM>
</div>
	</body>
</html>
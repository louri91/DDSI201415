<html>
<?php 
include_once 'conexionDDSI.php';
$conn = dbConnect();
$query="SELECT * FROM cliente ORDER BY Apellidos_C";
$result = $conn->query($query);
$rows = $result->fetchAll();
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<title>MAAG Servidores</title>
<h1 class="text-center">Insertar Cliente</h1>

</head>
<div class="container">
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation" class="active"><a href="listadoClientes.php">Cliente</a></li>
    <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation"><a href="listadoServidores.php">Servidor</a></li>

    </ul>
    <br>
<body>
	<FORM method=POST action="scriptInsertarCliente.php" class="form-horizontal">
	<div class="form-group">
    <label for="DNI" class="col-sm-2 control-label">DNI</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name= "DNI_C",id="DNI_C" placeholder="DNI">
    </div>
  </div>
	<div class="form-group">
    <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name="Nombre_C",id="Nombre_C" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="Apellidos" class="col-sm-2 control-label">Apellidos</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name="Apellidos_C",id="Apellidos_C" placeholder="Apellidos">
    </div>
  </div>
  	<div class="form-group">
    <label for="Direccion" class="col-sm-2 control-label">Direccion</label>
        <div class="col-sm-10">
      <input type=text class="form-control" name="Direccion_C",id="Direccion_C" placeholder="Direccion">
        </div>
	</div>
	
	  <div class="form-group">
    <label for="Telefono" class="col-sm-2 control-label">Telefono</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name="Telefono_C",id="Telefono_C" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="Ciudad" class="col-sm-2 control-label">Ciudad</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name="Ciudad_C",id="Ciudad_C" placeholder="Ciudad">
    </div>
  </div>
	<p class="text-right">
	<br>
	<button type="submit" class="btn btn-primary">
	Enviar
	</button>
	</p>

</FORM>
</div>
	</body>
  </div>
</html>

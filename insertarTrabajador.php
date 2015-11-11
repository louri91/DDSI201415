<html>

<?php 
include_once 'conexionDDSI.php';
$conn = dbConnect();
$query="SELECT * FROM GrupoTrabajo ORDER BY ID_GT";
$query2="";

$result = $conn->query($query);
$rows = $result->fetchAll();
?>
<head>
<h1 class="text-center">Insertar Trabajador</h2>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta content="text/html; charset=utf-8" /><link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<title>MAAG Servidores</title>
</head>
<div class="container">
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation" class="active"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
    <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation"><a href="listadoServidores.php">Servidor</a></li>

    </ul>
<body>
<br>
	<FORM method=POST action="scriptInsertarTrabajador.php" class="form-horizontal">
	<div class="form-group">
    <label for="DNI" class="col-sm-2 control-label">DNI</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name= "DNI_T" placeholder="DNI">
    </div>
  </div>
	<div class="form-group">
    <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name="Nombre_T",id="Nombre_T" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="Apellidos" class="col-sm-2 control-label">Apellidos</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name="Apellidos_T",id="Apellidos_T" placeholder="Apellidos">
    </div>
  </div>
  	<div class="form-group">
    <label for="Area" class="col-sm-2 control-label">Area de Trabajo</label>
        <div class="col-sm-10">
	<select class="form-control input-sm" name='Especialidad_T' id='Especialidad_T' >
	<option value='RRHH'>RRHH</option>
	<option value='Ventas'>Ventas</option>
	<option value='IT'>IT</option>
	</select>
	</div>
	</div>
	
	  <div class="form-group">
    <label for="Direccion" class="col-sm-2 control-label">Direccion</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name="Direccion_T",id="Direccion_T" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="Telefono" class="col-sm-2 control-label">Telefono</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name="Telefono_T",id="Telefono_T" placeholder="Telefono">
    </div>
  </div>	
  	<div class="form-group">
  	<label for="Contrato" class="col-sm-2 control-label">Tipo de contrato</label>
  	    <div class="col-sm-10">
	<select class="form-control input-sm", name='TipoContrato' placeholder= "Tipo de Contrato">
	<option value='Practicas'>Practicas</option>
	<option value='Indefinido'>Indefinido</option>
	<option value='Temporal'>Temporal</option>
	</select>
	</div>
	</div>
	
	  	<div class="form-group">
  	<label for="GrupoTrabajo" class="col-sm-2 control-label">Grupo de Trabajo</label>
  	    <div class="col-sm-10">
	<select class="form-control input-sm", name='GrupoTrabajo' id='ID_GT' placeholder= "Grupo de trabajo">
		<?php
		foreach ($rows as $row){
		?>
		<option value='<?php echo $row['ID_GT']; ?>'> <?php echo $row['ID_GT']; ?></option>; 
        <?php } ?>
	</select>
	</div>
	</div>


	<p class="text-right">
	<br>
	<button type="submit" class="btn btn-primary">
	Enviar
	</button>
	</p>

</FORM>
	</body>
	</div>
</html>

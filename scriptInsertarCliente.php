<html>
<title>MAAG Servidores</title>
<head><link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
    
<div class="container">
<body>
<h1 class="text-center">Insertar Cliente</h1>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation" class="active"><a href="listadoClientes.php">Cliente</a></li>
    <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
      <li role="presentation"><a href="listadoServidores.php">Servidor</a></li>


    </ul><br>    
<?php
	include_once ('conexionDDSI.php');
	$conn=dbConnect();
	$row;
	$DNI_Cliente=$_POST['DNI_C'];
	$Nombre_Cliente=$_POST['Nombre_C'];
	$Apellidos_Cliente=$_POST['Apellidos_C'];	
	$Direccion_Cliente=$_POST['Direccion_C'];
	$Telefono_Cliente=$_POST['Telefono_C'];	
	$Ciudad_Cliente=$_POST['Ciudad_C'];
	

	$query = "INSERT INTO cliente (DNI_C, Nombre_C, Apellidos_C, Direccion_C, Telefono_C, Ciudad_C) VALUES
('$DNI_Cliente','$Nombre_Cliente','$Apellidos_Cliente','$Direccion_Cliente','$Telefono_Cliente','$Ciudad_Cliente');";
?>
<?php
	if  (($DNI_Cliente!="") && ($Nombre_Cliente!="") && ($Apellidos_Cliente!="") && ($Direccion_Cliente!="") && ($Telefono_Cliente!="") && ($Ciudad_Cliente!="")){?>
	<?php ($result = $conn->query($query)) ?>
		<font color="00B80B">Insertado correctamente</font><br>
	<?php } else { ?>
			<font color="#EB0E00">Error al insertar el registro. Verifique que ha introducido todos los datos correctamente</font><br>
<?php 
}
?>
<br>
<FORM method=POST class="form-horizontal">
	<div class="form-group">
	<label for="DNI_C" class="col-sm-2 control-label">DNI:</label>
    <div class="col-sm-10">
	<input type="text" name="DNI_C" class="form-control"/ disabled="disabled" value="<?php echo $DNI_Cliente;?>">
	</div>
	</div>
	
	<div class="form-group">
	<label for="nombre" class="col-sm-2 control-label">Nombre:</label>
    <div class="col-sm-10">
	<input type="text" name="nombre" class="form-control"/ disabled="disabled" value="<?php echo $Nombre_Cliente;?>">
	</div>
	</div>

	<div class="form-group">
	<label for="apellidos" class="col-sm-2 control-label">Apellidos:</label>
    <div class="col-sm-10">
	<input type="text" name="apellidos" class="form-control" disabled="disabled" value="<?php echo $Apellidos_Cliente;?>"/>
	</div>
	</div>

	<div class="form-group">
	<label for="Direccion_T" class="col-sm-2 control-label">Dirección:</label>
    <div class="col-sm-10">
	<input type="text" name="Direccion_C" class="form-control"/ disabled="disabled" value="<?php echo $Direccion_Cliente;?>">
	</div>
	</div>

	<div class="form-group">
	<label for="telefono" class="col-sm-2 control-label">Telefono:</label>
    <div class="col-sm-10">
	<input type="text" name="Telefono_C" class="form-control"/ disabled="disabled" value="<?php echo $Telefono_Cliente;?>">
	</div>
	</div>

	<div class="form-group">
	<label for="Ciudad" class="col-sm-2 control-label">Ciudad:</label>
    <div class="col-sm-10">
	<input type="text" name="Ciudad" class="form-control"/ disabled="disabled" value="<?php echo $Ciudad_Cliente;?>">
	</div>
	</div>
</FORM>
<p class="text-right">

	<br>
    <a class="btn btn-primary" href="insertarCliente.php" role="button">Añadir Cliente</a>
	</p>
    </div>
</body>
</div>
</html>
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
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
  <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation" class="active"><a href="insertarServidor.php">Servidor</a></li>

    </ul><br>    
<?php
	include_once ('conexionDDSI.php');
	$conn=dbConnect();
	$row;
	$ID_S=$_POST['IDS'];
	$CPUs_S=$_POST['CPUs'];
	$GBRAM_S=$_POST['GBRAM'];
	$ESTADO_S=$_POST['ESTADO'];
	$Precio_S=$_POST['PRECIO'];	

	$query = "INSERT INTO servidor (ID_S, numCPUs, memoriaRAM, estadoServidor,precioServidor) 
VALUES ('$ID_S','$CPUs_S','$GBRAM_S','$ESTADO_S','$Precio_S');";
?>
<?php
	if ($result = $conn->query($query)) 
	{?>
		<font color="00B80B">Insertado correctamente</font><br>
	<?php } 
	else 
	{ ?>
		<font color="#EB0E00">Error al insertar el registro. Verifique que ha introducido todos los datos correctamente</font><br>

	<?php }
?>
<br>
<FORM method=POST class="form-horizontal">

	<div class="form-group">
	<label for="IDS" class="col-sm-2 control-label">Id:</label>
    	<div class="col-sm-10">
	<input type="text" name="IDS" class="form-control"/ disabled="disabled" value="<?php echo $ID_S;?>">
	</div>
	</div>

	<div class="form-group">
	<label for="CPU's" class="col-sm-2 control-label">Cpu's:</label>
    	<div class="col-sm-10">
	<input type="text" name="CPUs" class="form-control"/ disabled="disabled" value="<?php echo $CPUs_S;?>">
	</div>
	</div>
	
	<div class="form-group">
	<label for="GBRAM" class="col-sm-2 control-label">Gb Ram:</label>
    	<div class="col-sm-10">
	<input type="text" name="GBRAM" class="form-control"/ disabled="disabled" value="<?php echo $GBRAM_S;?>">
	</div>
	</div>

	<div class="form-group">
	<label for="ESTADO" class="col-sm-2 control-label">Estado:</label>
    	<div class="col-sm-10">
	<input type="text" name="ESTADO" class="form-control"/ disabled="disabled" value="<?php echo $ESTADO_S;?>">
	</div>
	</div>

	<div class="form-group">
	<label for="PRECIO" class="col-sm-2 control-label">Precio:</label>
    	<div class="col-sm-10">
	<input type="text" name="PRECIO" class="form-control" disabled="disabled" value="<?php echo $Precio_S;?>"/>
	</div>
	</div>


</FORM>

<p class="text-right">

	<br>
    	<a class="btn btn-primary" href="insertarServidor.php" role="button">Añadir Servidor</a>
	</p>
    </div>
</body>
</div>
</html>
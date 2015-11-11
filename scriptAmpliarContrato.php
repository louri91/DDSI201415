<html>
<head>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<title>MAAG Servidores</title>
</head>
<div class="container">
<body>
    <h1 class="text-center"> Ampliar contrato </h1>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
      <li role="presentation" class="active"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation"><a href="listadoServidores.php">Servidor</a></li>

    </ul>
    <br>
    <?php
	include_once ('conexionDDSI.php');
	$conn=dbConnect();
	$row;
	$Meses=$_POST['Alquiler'];
	$Contrato=$_POST['ID_Contrato'];

	$query = "SELECT * FROM tiene where ID_Contrato=$Contrato";
	$result = $conn->query($query);
    $rows = $result->fetchAll();

    foreach ($rows as $row) {
    	$FechaFinal=$row['FechaFinal'];
		$Ampliacion = date("Y-m-d", strtotime("$FechaFinal + $Meses months"));
	}
	$query = "UPDATE tiene SET fechaFinal='$Ampliacion' WHERE ID_Contrato=$Contrato";
?>
<?php
	if ($result = $conn->query($query)) {?>
		</br><font color="00B80B">Insertado correctamente</font>
	<?php } else { ?>
			</br><font color="#EB0E00">Error al insertar el registro. Verifique que ha introducido todos los datos correctamente</font>
<?php 
}
?>
	<FORM class="form-horizontal">
<br>
	<div class="form-group">
<label for="ID_Contrato" class="col-sm-2 control-label">Contrato:</label>
    <div class="col-sm-10">

<input type="text" name="ID_Contrato" class="form-control"/ disabled="disabled" value="<?php echo $Contrato;?>"><br/>
</div>
</div>

	<div class="form-group">
<label for="Alquiler" class="col-sm-2 control-label">Meses de ampliacion:</label>
    <div class="col-sm-10">

<input type="text" name="Alquiler" class="form-control"/ disabled="disabled" value="<?php echo $Meses;?>"><br/>

</div>
</div>

	<div class="form-group">
<label for="ampliacion" class="col-sm-2 control-label">Ampliacion hasta:</label>
    <div class="col-sm-10">

<input type="text" name="ampliacion" class="form-control" disabled="disabled" value="<?php echo $Ampliacion;?>"/><br/>
</div>
</div>
</FORM>


</body>
</div>
</html>
   
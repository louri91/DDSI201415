<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<h1 class="text-center">Dar de baja contrato</h1>
</head>
<div class="container">
<body>
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
	$Contrato=$_POST['ID_Contrato'];
	$Hoy = date("Y-m-d");
	$query = "UPDATE tiene SET fechaFinal='$Hoy' WHERE ID_Contrato=$Contrato";
	$query1 = "UPDATE servidor JOIN tiene ON servidor.ID_S = tiene.ID_S JOIN contrato ON tiene.ID_Contrato = contrato.ID_Contrato SET estadoServidor = 'Libre' WHERE tiene.ID_Contrato=$Contrato";
?>
<?php
	if (($result = $conn->query($query)) && ($result1 = $conn->query($query1))) {?>
		</br><font color="00B80B">Se ha dado de baja correctamente</font>
	<?php } else { ?>
			</br><font color="#EB0E00">Error al dar de baja el contrato. Póngase en contacto con el departamento de IT</font>
<?php 
}
?><br>
<FORM class="form-horizontal">
    <div class="form-group">
<label for="ID_Contrato" class="col-sm-2 control-label">Contrato:</label>
        <div class="col-sm-10">
<input type="text" name="ID_Contrato"/class="form-control input-sm" disabled="disabled" value="<?php echo $Contrato;?>"><br/>
</div>
</div>
</FORM>


</body>
</div>
</html>
   
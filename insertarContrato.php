<html>

<?php 
include_once 'conexionDDSI.php';
$conn = dbConnect();
$sql="SELECT * FROM trabajador";
$sql1="SELECT * FROM cliente";
$sql2="SELECT * FROM servidor where estadoServidor='Libre'";



$result = $conn->query($sql);
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

$rows = $result->fetchAll();
$rows1 = $result1->fetchAll();
$rows2 = $result2->fetchAll();

?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<h1 class="text-center">Insertar Contrato</h1>
<title>MAAG Servidores</title>
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

	<FORM method=POST action="scriptInsertarContrato.php" class="form-horizontal">

	<div class="form-group">
    <label for="ID_Contrato" class="col-sm-2 control-label">Numero de Contrato</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name= "ID_Contrato",id="ID_Contrato" placeholder="Numero de Contrato">
    </div>
  </div>

	<div class="form-group">
    <label for="Descuento" class="col-sm-2 control-label">Descuento</label>
    <div class="col-sm-10">
      <input type=text class="form-control" name="descuento",id="descuento" placeholder="% Descuento">
    </div>
    </div>

	
	  	<div class="form-group">
  	<label for="DNI_T_Supervisor" class="col-sm-2 control-label">Supervisor</label>
  	    <div class="col-sm-10">
	<select class="form-control input-sm", name='DNI_T_Supervisor' id='DNI_T_Supervisor' placeholder= "DNI_T_Supervisor">
		<?php
        foreach ($rows as $row){
        ?>
        <option value='<?php echo $row['DNI_T']; ?>'> <?php echo $row['DNI_T']; ?> - <?php echo $row['Nombre_T']; ?> <?php echo $row['Apellidos_T']; ?> </option>; 
        <?php } ?>
        }
        ?>
	</select>
	</div>
	</div>

	<div class="form-group">
  	<label for="DNI_C" class="col-sm-2 control-label">Cliente</label>
  	    <div class="col-sm-10">
	<select class="form-control input-sm", name='DNI_C' id='DNI_C' placeholder= "DNI_C">
		<?php
        foreach ($rows1 as $row){
        ?>
        <option value='<?php echo $row['DNI_C']; ?>'> <?php echo $row['DNI_C']; ?> - <?php echo $row['Nombre_C']; ?> <?php echo $row['Apellidos_C']; ?></option>; 
        <?php } ?>
        }
        ?>
	</select>
	</div>
	</div>

	<div class="form-group">
  	<label for="ID_S" class="col-sm-2 control-label">Servidor</label>
  	    <div class="col-sm-10">
	<select class="form-control input-sm", name='ID_S' id='ID_S' placeholder= "ID_S">
		<?php
        foreach ($rows2 as $row){
        ?>
        <option value='<?php echo $row['ID_S']; ?>'> Numero <?php echo $row['ID_S'];?>: <?php echo $row['numCPUs'];?> CPUs | <?php echo $row['memoriaRAM'];?> RAM | <?php echo $row['precioServidor'];?> €</option>; 
        <?php } ?>
        }
        ?>
	</select>
	</div>
	</div>

	<div class="form-group">
  	<label for="Alquiler" class="col-sm-2 control-label">Meses de alquiler</label>
  	    <div class="col-sm-10">
	<select class="form-control input-sm", name='Alquiler' id='Alquiler' placeholder= "Alquiler">
		<option value='1'>1</option>
		<option value='2'>2</option>
		<option value='3'>3</option>
		<option value='4'>4</option>
		<option value='5'>5</option>
		<option value='6'>6</option>
		<option value='7'>7</option>
		<option value='8'>8</option>
		<option value='9'>9</option>
		<option value='10'>10</option>
		<option value='11'>11</option>
		<option value='12'>12</option>
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
</div>
	</body>
</html>


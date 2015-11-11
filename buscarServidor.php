<html>
<title>MAAG Servidores</title>
<head>
<h1 class="text-center">Servidor</h2>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta content="text/html; charset=utf-8" /><link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
</head>
<div class="container">
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
   <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
 <li role="presentation" class="active"><a href="listadoServidores.php">Servidor</a></li>

    </ul></br>
<body>
<?php
    include_once ('conexionDDSI.php');
    $conn=dbConnect();
    $row;
    if (isset($_GET['ID_S'])) {
        $sql = "SELECT * FROM servidor WHERE ID_S = ?";
        $stmt = $conn->prepare($sql);
        $results = $stmt->execute(array($_GET['ID_S']));
        $row = $stmt->fetch();
        if (empty($row)) {
            $result = "No se encontraron resultados !!";
        }
    }
    $ID=$row['ID_S'];
    $CPUS=$row['numCPUs'];
    $RAM=$row['memoriaRAM'];
    $ESTADO=$row['estadoServidor'];
    $PRECIO=$row['precioServidor'];
    $MANTENIMIENTO=$row['DNI_T_Mantenimiento'];
?>
<FORM method=POST action="scriptModificarServidor.php" class="form-horizontal">
    <div class="form-group">
    <label for="IDS" class="col-sm-2 control-label">ID:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="IDS" value="<?php echo $ID;?>" readonly>
    </div>
    </div>

    <div class="form-group">
	<label for="CPUS" class="col-sm-2 control-label">CPU'S:</label>
    <div class="col-sm-10">
	<input type="text" class="form-control" name="CPUS" value="<?php echo $CPUS;?>">
	</div>
	</div>

    <div class="form-group">
<label for="RAM" class="col-sm-2 control-label">Gb Ram:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="RAM" value="<?php echo $RAM;?>">
</div>
</div>

    <div class="form-group">

<label for="ESTADO" class="col-sm-2 control-label">Estado:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="ESTADO" value="<?php echo $ESTADO;?>">
</div>
</div>

    <div class="form-group">

<label for="PRECIO" class="col-sm-2 control-label">Precio:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="PRECIO" value="<?php echo $PRECIO;?>">
</div>
</div>

    <div class="form-group">

<label for="MANTENIMIENTO" class="col-sm-2 control-label">Mantenimiento:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="MANTENIMIENTO" value="<?php echo $MANTENIMIENTO;?>">
</div>
</div>


<p class="text-right">
    <br>
    <a class="btn btn-primary" href="listadoServidores.php" role="button">Volver</a>
    <button type="submit" class="btn btn-primary">Modificar</button>
    <a class="btn btn-danger" href="eliminaServidor.php?ID_S=<?php echo $ID;?>" role="button">Eliminar</a>
    </p>

</FORM>
</div>
</body>
</html>
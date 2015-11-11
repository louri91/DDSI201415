<html>
<title>MAAG Servidores</title>
<head>
<h1 class="text-center">Trabajador</h2>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta content="text/html; charset=utf-8" /><link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
</head>
<div class="container">
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation" class="active"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
<li role="presentation"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation"><a href="listadoServidores.php">Servidor</a></li>

    </ul></br>
<body>
<?php
    include_once ('conexionDDSI.php');
    $conn=dbConnect();
    $row;
    if (isset($_GET['DNI_T'])) {
        $sql = "SELECT * FROM Trabajador WHERE DNI_T = ?";
        $stmt = $conn->prepare($sql);
        $results = $stmt->execute(array($_GET['DNI_T']));
        $row = $stmt->fetch();
        if (empty($row)) {
            $result = "No se encontraron resultados !!";
        }
    }
    $DNI_Trabajador=$row['DNI_T'];
    $Nombre_Trabajador=$row['Nombre_T'];
    $Apellidos_Trabajador=$row['Apellidos_T'];
    $Especialidad_Trabajador=$row['Especialidad_T'];
    $Direccion_Trabajador=$row['Direccion_T'];
    $Telefono_Trabajador=$row['Telefono_T'];
    $ID_GTrabajador=$row['ID_GT'];
    $Contrato=$row['Tipo_Contrato'];
?>
<FORM method=POST action="scriptModificarTrabajador.php" class="form-horizontal">
    <div class="form-group">
    <label for="DNI_T" class="col-sm-2 control-label">DNI:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="DNI" value="<?php echo $DNI_Trabajador;?>" readonly>
    </div>
    </div>

    <div class="form-group">
<label for="nombre" class="col-sm-2 control-label">Nombre:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="nombre" value="<?php echo $Nombre_Trabajador;?>">
</div>
</div>

    <div class="form-group">
<label for="apellidos" class="col-sm-2 control-label">Apellidos:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="apellidos" value="<?php echo $Apellidos_Trabajador;?>">
</div>
</div>

    <div class="form-group">

<label for="area" class="col-sm-2 control-label">Área:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="area" value="<?php echo $Especialidad_Trabajador;?>">
</div>
</div>

    <div class="form-group">

<label for="Direccion_T" class="col-sm-2 control-label">Dirección:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="Direccion_T" value="<?php echo $Direccion_Trabajador;?>">
</div>
</div>

    <div class="form-group">

<label for="telefono" class="col-sm-2 control-label">Telefono:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="Telefono_T" value="<?php echo $Telefono_Trabajador;?>">
</div>
</div>

    <div class="form-group">

<label for="TipoContrato" class="col-sm-2 control-label">Tipo de Contrato:</label>
    <div class="col-sm-10">

<input type="text" class="form-control" name="Tipo_Contrato" value="<?php echo $Contrato;?>">
</div>
</div>

    <div class="form-group">

<label for="GT" class="col-sm-2 control-label">Grupo de trabajo al que pertenece:</label>
    <div class="col-sm-10">
<input type="text" class="form-control" name="GT" value="<?php echo $ID_GTrabajador;?>">
</div>
</div>

<p class="text-right">
    <br>
    <button type="submit" class="btn btn-primary">Modificar</button>
    <a class="btn btn-danger" href="eliminarTrabajador.php?DNI_T=<?php echo $DNI_Trabajador;?>" role="button">Eliminar</a>
    </p>

</FORM>
</div>
</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<title>MAAG Servidores</title>
<head><h1 class="text-center">Insertar Cliente</h1>

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

<title>MAAG Servidores</title>
<?php
    include_once 'conexionDDSI.php';
    $result = "";
    $conn = dbConnect();

    $row = null;
    if (isset($_GET['DNI_C'])) {
        $sql = "SELECT * FROM cliente WHERE DNI_C = ?";
        $stmt = $conn->prepare($sql);
        $results = $stmt->execute(array($_GET['DNI_C']));
        $row = $stmt->fetch();
        if (empty($row)) {
            $result = "No se encontraron resultados !!";
        }
    }
 ?>

<FORM method=POST class="form-horizontal">
    <div class="form-group">
    <label for="DNI_C" class="col-sm-2 control-label">DNI:</label>
    <div class="col-sm-10">
    <input type="text" name="DNI_C" class="form-control"/ disabled="disabled" value="<?php echo $row['DNI_C'];?>">
    </div>
    </div>
    
    <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
    <div class="col-sm-10">
    <input type="text" name="nombre" class="form-control"/ disabled="disabled" value="<?php echo $row['Nombre_C'];?>">
    </div>
    </div>

    <div class="form-group">
    <label for="apellidos" class="col-sm-2 control-label">Apellidos:</label>
    <div class="col-sm-10">
    <input type="text" name="apellidos" class="form-control" disabled="disabled" value="<?php echo $row['Apellidos_C'];?>"/>
    </div>
    </div>

    <div class="form-group">
    <label for="Direccion_T" class="col-sm-2 control-label">Dirección:</label>
    <div class="col-sm-10">
    <input type="text" name="Direccion_C" class="form-control"/ disabled="disabled" value="<?php echo $row['Direccion_C'];?>">
    </div>
    </div>

    <div class="form-group">
    <label for="telefono" class="col-sm-2 control-label">Telefono:</label>
    <div class="col-sm-10">
    <input type="text" name="Telefono_C" class="form-control"/ disabled="disabled" value="<?php echo $row['Telefono_C'];?>">
    </div>
    </div>

    <div class="form-group">
    <label for="Ciudad" class="col-sm-2 control-label">Ciudad:</label>
    <div class="col-sm-10">
    <input type="text" name="Ciudad" class="form-control"/ disabled="disabled" value="<?php echo $row['Ciudad_C'];?>">
    </div>
    </div>
</FORM>
</body>

</div>
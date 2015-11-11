<html lang="es">
<head>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<title>MAAG Servidores</title>
</head>
	<h1 class="text-center"> Listado de servidores </h1>
	<?php
	include_once 'conexionDDSI.php';
    	header("content-type: text/html;charset=utf-8");
	$result;
	$conn = dbConnect();
	$query = "SELECT * FROM servidor ORDER BY ID_S";
	$result = $conn->query($query);
    $rows = $result->fetchAll();
?>
<div class="container">
<body>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
  <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation" class="active"><a href="listadoServidores.php">Servidor</a></li>

    </ul>
    <br>
    
        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>CPUs</td>
                <td>Gb Ram</td>
                <td>Estado</td>
                <td>Precio</td>
                <td>Personal Mantenimiento</td>
            </tr>
        <?php
                    foreach ($rows as $row) {
        ?>
            <tr>
                <td><a href="buscarServidor.php?ID_S=<?php echo $row['ID_S']; ?>"><?php echo $row['ID_S']; ?></a></td>
                <td><?php echo $row['numCPUs']; ?></td>
                <td><?php echo $row['memoriaRAM']; ?></td>
                <td><?php echo $row['estadoServidor']; ?></td>
                <td><?php echo $row['precioServidor']; ?></td>
                <td><?php echo $row['DNI_T_Mantenimiento']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <p class="text-right">
    <br>
    <a class="btn btn-primary" href="listadoServidores.php" role="button">Actualizar</a>
    <a class="btn btn-primary" href="insertarServidor.php" role="button">Insertar nuevo servidor</a>
    </p>
    </body>
    </div>
</html>
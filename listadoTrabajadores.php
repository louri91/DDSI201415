<html lang="es">
<head>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<title>MAAG Servidores</title>
</head>
	<h1 class="text-center"> Listado de trabajadores </h1>
	<?php
	include_once 'conexionDDSI.php';
    header("content-type: text/html;charset=utf-8");
	$result;
	$conn = dbConnect();
	$query = "SELECT * FROM Trabajador ORDER BY Apellidos_T";
	$result = $conn->query($query);
    $rows = $result->fetchAll();
?>
<div class="container">
<body>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation" class="active"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
      <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation"><a href="listadoServidores.php">Servidor</a></li>

    </ul>
    <br>
    
        <table class="table table-striped">
            <tr>
                <td>DNI</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Especialidad</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Tipo de Contrato</td>
                <td>Grupo de trabajo</td>
            </tr>
        <?php
                    foreach ($rows as $row) {
        ?>
            <tr>
                <td><a href="buscarTrabajador.php?DNI_T=<?php echo $row['DNI_T']; ?>"><?php echo $row['DNI_T']; ?></a></td>
                <td><?php echo $row['Nombre_T']; ?></td>
                <td><?php echo $row['Apellidos_T']; ?></td>
                <td><?php echo $row['Especialidad_T']; ?></td>
                <td><?php echo $row['Direccion_T']; ?></td>
                <td><?php echo $row['Telefono_T']; ?></td>
                <td><?php echo $row['Tipo_Contrato']; ?></td>
                <td><a href="listadoGrupoTrabajo.php?ID_GT=<?php echo $row['ID_GT']; ?>"><?php echo $row['ID_GT']; ?></a></td>
            </tr>
        <?php } ?>
    </table>
    <p class="text-right">
    <br>
    <a class="btn btn-primary" href="listadoTrabajadores.php" role="button">Actualizar</a>
    <a class="btn btn-primary" href="insertarTrabajador.php" role="button">Añadir Trabajador</a>
    </p>
    </body>
    </div>
</html>

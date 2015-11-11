<html lang="es">
<head>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<title>MAAG Servidores</title>
</head>
	<h1 class="text-center"> Listado de clientes </h1>
	<?php
	include_once 'conexionDDSI.php';
    header("content-type: text/html;charset=utf-8");
	$result;
	$conn = dbConnect();
	$query = "SELECT * FROM Cliente ORDER BY Nombre_C";
	$result = $conn->query($query);
    $rows = $result->fetchAll();
?>
<div class="container">
<body>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation" class="active"><a href="listadoClientes.php">Cliente</a></li>
    <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
      <li role="presentation"><a href="listadoServidores.php">Servidor</a></li>

    </ul><br>
        <table class="table table-striped">
            <tr>
                <td>DNI</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Direccion</td>                
                <td>Telefono</td>
                <td>Ciudad</td>                
            </tr>
        <?php
                    foreach ($rows as $row) {
        ?>
            <tr>
                <td><a href="scriptListarClientes.php?DNI_C=<?php echo $row['DNI_C']; ?>"><?php echo $row['DNI_C']; ?></a></td>
                <td><?php echo $row['Nombre_C']; ?></td>
                <td><?php echo $row['Apellidos_C']; ?></td>
                <td><?php echo $row['Direccion_C']; ?></td>                
                <td><?php echo $row['Telefono_C']; ?></td>
                <td><?php echo $row['Ciudad_C']; ?></td>
                
            </tr>
        <?php } ?>
    </table>
    <p class="text-right">
    <br>
    <a class="btn btn-primary" href="insertarCliente.php" role="button">Añadir Cliente</a>
    </p>
    </body>
    </div>
</html>

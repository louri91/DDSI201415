<html lang="es">
<head>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<title>MAAG Servidores</title>
</head>
    <h1 class="text-center"> Listado de contratos </h1>
    <?php
    include_once 'conexionDDSI.php';
    header("content-type: text/html;charset=utf-8");
    $result;
    $conn = dbConnect();
    $query = "SELECT * FROM Trabajador JOIN Contrato ON Trabajador.DNI_T = Contrato.DNI_T_Supervisor JOIN Cliente ON Contrato.DNI_C = Cliente.DNI_C";
    $result = $conn->query($query);
    $rows = $result->fetchAll();
?>
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
        <table class="table table-striped">
            <tr>
                <td>Numero de Contrato</td>
                <td>Descuento</td>
                <td>Precio</td>
                <td>Supervisor</td>
                <td>Cliente</td>
            </tr>
        <?php
                    foreach ($rows as $row) {
                    ?>
            <tr>
                <td><?php echo $row['ID_Contrato']; ?></td>
                <td><?php echo $row['descuento']; ?>%</td>
                <td><?php echo $row['precioFinal']; ?></td>
                <td><?php echo $row['DNI_T_Supervisor'];?> - <?php echo $row['Nombre_T'];?> <?php echo $row['Apellidos_T'];?></td>
                <td><?php echo $row['DNI_C']; ?> - <?php echo $row['Nombre_C'];?> <?php echo $row['Apellidos_C'];?></td>
            </tr>
        <?php } ?>
    </table>
    <p class="text-right">
    <br>
    <a class="btn btn-primary" href="insertarContrato.php" role="button">Añadir contrato</a>
    <a class="btn btn-primary" href="ampliarContrato.php" role="button">Ampliar contrato</a>
    <a class="btn btn-primary" href="bajaContrato.php" role="button">Baja contrato</a>
    <a class="btn btn-danger" href="borrarContratos.php" role="button">Eliminar contrato</a>



    </p>
    </body>
    </div>
</html>
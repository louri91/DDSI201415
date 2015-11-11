<html lang="es">
<head>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<title>MAAG Servidores</title>
</head>
	<h1 class="text-center"> Grupo de Trabajo </h1>
	<?php
	include_once 'conexionDDSI.php';
    header("content-type: text/html;charset=utf-8");
	$conn = dbConnect();
    $ID_GT=$_GET['ID_GT'];
    $query = "SELECT * FROM GrupoTrabajo JOIN Trabajador ON GrupoTrabajo.ID_GT = Trabajador.ID_GT WHERE GrupoTrabajo.ID_GT = '$ID_GT';";
    $query2= "SELECT Nombre_T,Apellidos_T FROM Trabajador JOIN GrupoTrabajo ON GrupoTrabajo.DNI_T_Responsable = Trabajador.DNI_T AND GrupoTrabajo.ID_GT = Trabajador.ID_GT AND GrupoTrabajo.ID_GT = '$ID_GT';";
    $result = $conn->query($query);
    $rows = $result->fetchAll();
    $result2 = $conn->query($query2);
    $rows2 = $result2->fetch();

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
                <td>Responsable del grupo</td>
                <td>DNI</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Especialidad</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Tipo de Contrato</td>
            </tr>
        <?php
                    foreach ($rows as $row) {
        ?>
            <tr>
                <td><?php echo $rows2['Nombre_T'];?>  <?php echo $rows2['Apellidos_T'];?></td>
                <td><?php echo $row['DNI_T']; ?></td>
                <td><?php echo $row['Nombre_T']; ?></td>
                <td><?php echo $row['Apellidos_T']; ?></td>
                <td><?php echo $row['Especialidad_T']; ?></td>
                <td><?php echo $row['Direccion_T']; ?></td>
                <td><?php echo $row['Telefono_T']; ?></td>
                <td><?php echo $row['Tipo_Contrato']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <p class="text-right">
    <br>
    </p>
    </body>
    </div>
</html>

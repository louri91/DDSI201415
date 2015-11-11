<html>
<title>MAAG Servidores</title>
<head><link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<h1 class="text-center">Listado de Trabajadores</h1>
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
	$ID=$_POST['IDS'];
    	$CPUS=$_POST['CPUS'];
    	$RAM=$_POST['RAM'];
    	$ESTADO=$_POST['ESTADO'];
    	$PRECIO=$_POST['PRECIO'];
    	$MANTENIMIENTO=$_POST['MANTENIMIENTO'];

	$query = "UPDATE servidor SET ID_S='$ID', numCPUs='$CPUS', memoriaRAM='$RAM', estadoServidor='$ESTADO', precioServidor='$PRECIO', DNI_T_Mantenimiento='$MANTENIMIENTO'
WHERE ID_S = '$ID';";
?>
<?php
	if ($result = $conn->query($query)) {?>
		<font color="00B80B">Modificado correctamente</font>
	<?php } else { ?>
		<font color="#EB0E00">Error al modificar el registro. Verifique que ha introducido todos los datos correctamente</font>
<?php 
}
?><?php 	
	$query2= "SELECT * FROM servidor ORDER BY ID_S;";
	$result2 = $conn->query($query2);
    $rows = $result2->fetchAll();
?>
        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>CPUs</td>
                <td>Gb Ram</td>
                <td>Estado</td>
                <td>Precio</td>
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
    <a class="btn btn-primary" href="listadoServidores.php" role="button">Volver</a>
    <a class="btn btn-primary" href="listadoServidores.php" role="button">Actualizar</a>
    <a class="btn btn-primary" href="insertarServidor.php" role="button">Insertar nuevo servidor</a>
	</p>

</FORM>
</body>
</div>
</html>
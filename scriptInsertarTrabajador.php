<html>
<title>MAAG Servidores</title>
<head><link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<h1 class="text-center">Listado de Trabajadores</h1>
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
	$DNI_Trabajador=$_POST['DNI_T'];
	$Nombre_Trabajador=$_POST['Nombre_T'];
	$Apellidos_Trabajador=$_POST['Apellidos_T'];
	$Especialidad_Trabajador=$_POST['Especialidad_T'];
	$Direccion_Trabajador=$_POST['Direccion_T'];
	$Telefono_Trabajador=$_POST['Telefono_T'];
	$ID_GTrabajador=$_POST['GrupoTrabajo'];
	$Contrato=$_POST['TipoContrato'];
	$Direccion_Trabajador=htmlentities($Direccion_Trabajador, ENT_QUOTES,'UTF-8');
	$query = "INSERT INTO Trabajador (DNI_T, Nombre_T, Apellidos_T, Especialidad_T, Direccion_T, Telefono_T, Tipo_Contrato, ID_GT) VALUES
('$DNI_Trabajador','$Nombre_Trabajador','$Apellidos_Trabajador','$Especialidad_Trabajador','$Direccion_Trabajador','$Telefono_Trabajador','$Contrato','$ID_GTrabajador');";
?>
<?php
	if (($DNI_Trabajador!="") && ($Nombre_Trabajador!="") && ($Apellidos_Trabajador!="") && ($Direccion_Trabajador!="") && ($Telefono_Trabajador!="")){?>
		<?php $result = $conn->query($query)?>
        <font color="00B80B">Insertado correctamente</font>
	<?php } else { ?>
		<font color="#EB0E00">Error al insertar el registro. Verifique que ha introducido todos los datos correctamente</font>
<?php 
}
?><?php 	
	$query2= "SELECT * FROM Trabajador ORDER BY Apellidos_T;";
	$result2 = $conn->query($query2);
    $rows = $result2->fetchAll();
?>
        <table class="table table-striped">
            <tr>
                <td>DNI</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Especialidad</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Tipo de Contrato</td>
                <td>ID Grupo de trabajo</td>
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

</FORM>
</body>
</div>
</html>
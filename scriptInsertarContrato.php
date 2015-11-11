<html>
<head>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

</head>
<title>MAAG Servidores</title>
<h1 class="text-center">Listado de contratos</h1>
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
<?php
	include_once ('conexionDDSI.php');
	$conn=dbConnect();
	$row;
	$ID_Contrato=$_POST['ID_Contrato'];
	$Descuento_Contrato=$_POST['descuento'];
	$DNI_Trabajador=$_POST['DNI_T_Supervisor'];
	$DNI_Cliente=$_POST['DNI_C'];
	$ID_Servidor=$_POST['ID_S'];
	$Alquiler=$_POST['Alquiler'];
	
	$fecha_inicio = date("Y-m-d");
	$fecha_final = date("Y-m-d", strtotime("$fecha_inicio + $Alquiler months"));

    $query2 = "SELECT * FROM Contrato ORDER BY ID_Contrato";
    

	$query = "SELECT * FROM servidor where id_s=$ID_Servidor";
	$result = $conn->query($query);
    $rows = $result->fetchAll();

    foreach ($rows as $row) {
		$row['precioServidor'];
	

	$PrecioFinal= $row['precioServidor']-$row['precioServidor']/100*$Descuento_Contrato;
	if($PrecioFinal < 0){
		$PrecioFinal=0;
	}

	if($PrecioFinal > $row['precioServidor']){
		$PrecioFinal=$row['precioServidor'];
	}
	}

	$query1 = "INSERT INTO Contrato (ID_Contrato, descuento, precioFinal, DNI_T_Supervisor, DNI_C) VALUES ('$ID_Contrato','$Descuento_Contrato','$PrecioFinal','$DNI_Trabajador','$DNI_Cliente');";
	$query2 = "INSERT INTO Tiene (ID_S, ID_Contrato, FechaInicio, FechaFinal) VALUES ('$ID_Servidor','$ID_Contrato','$fecha_inicio','$fecha_final');";
	
	if (($result = $conn->query($query1)) && ($result1 = $conn->query($query2)))  {?>
		</br><font color="00B80B">Insertado correctamente</font>
	<?php } else { ?>
			</br><font color="#EB0E00">Error al insertar el registro. Verifique que ha introducido todos los datos correctamente</font>
<?php 
} $result3 = $conn->query($query2);
    $rows3 = $result3->fetchAll();
?>

<table class="table table-striped">
            <tr>
                <td>Contrato</td>
                <td>Descuento</td>
                <td>Precio Total</td>
                <td>DNI Supervisor</td>                
                <td>DNI Cliente</td>          
            </tr>
        <?php
                    foreach ($rows3 as $row) {
        ?>
            <tr>
                <td><?php echo $row['ID_Contrato']; ?></td>
                <td><?php echo $row['descuento']; ?></td>
                <td><?php echo $row['precioFinal']; ?></td>
                <td><?php echo $row['DNI_T_Supervisor']; ?></td>                
                <td><?php echo $row['DNI_C']; ?></td>
                
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

   
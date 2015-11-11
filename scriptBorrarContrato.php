<html>
<head>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<title>MAAG Servidores</title>
</head>
<div class="container">
<body>
    <h1 class="text-center"> Ampliar contrato </h1>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
      <li role="presentation" class="active"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation"><a href="listadoServidores.php">Servidor</a></li>
    </ul>
    <br>

<?php 
include_once 'conexionDDSI.php';
$conn = dbConnect();
$ID_Contrato=$_POST['ID_Contrato'];
$query="DELETE FROM contrato WHERE ID_Contrato=$ID_Contrato";
$query2 = "SELECT * FROM Contrato ORDER BY ID_Contrato";


if ($result = $conn->query($query))  {?>
		<font color="00B80B">Eliminado correctamente</font>
	<?php } else { ?>
		<font color="#EB0E00">Error al eliminar el contrato. Verifique que ha introducido todos los datos correctamente</font>
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
   
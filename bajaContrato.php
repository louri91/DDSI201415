<html>

<?php 
include_once 'conexionDDSI.php';
$conn = dbConnect();
$Hoy = date("Y-m-d");
$query="SELECT * FROM tiene WHERE fechaFinal > '$Hoy'";

$result = $conn->query($query);
$rows = $result->fetchAll();
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<h1 class="text-center">Dar de baja contrato</h1>
<title>MAAG Servidores</title>
</head>
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
    <FORM method=POST action="scriptBajaContrato.php" class="form-horizontal">

    <div class="form-group">
    <label for="ID_Contrato" class="col-sm-2 control-label">Contrato</label>
        <div class="col-sm-10">
    <select class="form-control input-sm", name='ID_Contrato' id='ID_Contrato' placeholder= "ID_Contrato">
        <?php
        foreach ($rows as $row){
        ?>
        <option value='<?php echo $row['ID_Contrato']; ?>'> <?php echo $row['ID_Contrato']; ?></option>; 
        <?php } ?>
        }
        ?>
            </select>

    <p class="text-right">
    <br>
   <button type="submit" class="btn btn-danger">
Dar de baja
    </button>
    </p>

</FORM>
    </body>
    </div>
</html>

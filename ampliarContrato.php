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
<h1 class="text-center">Ampliar contrato</h1>
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
    <FORM method=POST action="scriptAmpliarContrato.php" class="form-horizontal">

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
    </div>
    </div>

    <div class="form-group">
    <label for="Alquiler" class="col-sm-2 control-label">Meses de alquiler</label>
        <div class="col-sm-10">
    <select class="form-control input-sm", name='Alquiler' id='Alquiler' placeholder= "Alquiler">
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>
        <option value='8'>8</option>
        <option value='9'>9</option>
        <option value='10'>10</option>
        <option value='11'>11</option>
        <option value='12'>12</option>
    </select>
    </div>
    </div>


    <p class="text-right">
    <br>
    <button type="submit" class="btn btn-primary">
    Enviar
    </button>
    </p>

</FORM>
</div>
    </body>
</html>

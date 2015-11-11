<head></head>
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
    include_once 'conexionDDSI.php';
    $result = "";
    $conn = dbConnect();

    $row = null;
    if (isset($_GET['ID_Contrato'])) {
        $sql = "SELECT * FROM contrato WHERE ID_Contrato = ?";
        $stmt = $conn->prepare($sql);
        $results = $stmt->execute(array($_GET['ID_Contrato']));
        $row = $stmt->fetch();
        if (empty($row)) {
            $result = "No se encontraron resultados !!";
        }
    }
 ?>

<label for="ID_Contrato">DNI:</label>
<input type="text" name="ID_Contrato" id="ID_Contrato"/ disabled="disabled" value="<?php echo $row['ID_Contrato'];?>"><br/>

<label for="descuento">Descuento:</label>
<input type="text" name="descuento" id="descuento" value="<?php echo $row['descuento'];?>"/><br/>

<label for="precioFinal">Precio Total:</label>
<input type="text" name="precioFinal" id="precioFinal"/ value="<?php echo $row['precioFinal'];?>"><br/>

<label for="DNI_T_Supervisor">DNI Supervisor:</label>
<input type="text" name="DNI_T_Supervisor" id="DNI_T_Supervisor"/ value="<?php echo $row['DNI_T_Supervisor'];?>"><br/>

<label for="DNI_C">DNI Cliente:</label>
<input type="text" name="DNI_C" id="DNI_C"/ disabled="disabled" value="<?php echo $row['DNI_C'];?>"><br/>

</body>
</div>
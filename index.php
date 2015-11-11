<html>
<head>
<meta name="viewport" http-equiv="content-type" content="width=device-width, initial-scale=1.0"/>
<meta content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />


<title>MAAG Servidores</title>
</head>
<div class="container">
<body>
	<h1 class="text-center">MAAG Servidores</h1>
	<?php
	include_once ('conexionDDSI.php');
	$result;
	$conn=dbConnect();
	$query = "SELECT * FROM ProyectoDDSI.Servidor ORDER BY precioServidor";
	$result = $conn->query($query);
    $rows = $result->fetchAll();
    ?>
    <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="listadoTrabajadores.php">Trabajador</a></li>
  <li role="presentation"><a href="listadoClientes.php">Cliente</a></li>
  <li role="presentation"><a href="listarContratos.php">Contratos</a></li>
  <li role="presentation"><a href="listadoServidores.php">Servidor</a></li>

    </ul>
    <br>

	<div class="row">
		<div class="span12">
<div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="1900">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="imagenes/serv1.jpg" alt=""/>
      <div class="carousel-caption">
        <p>Nuestros servidores</p>
      </div>
    </div>
    <div class="item">
      <img src="imagenes/serv2.jpg" alt=""/>
      <div class="carousel-caption">
        Nuestros servidores
      </div>
    </div>
    <div class="item">
      <img src="imagenes/serv3.jpg" alt=""/>
      <div class="carousel-caption">
        Nuestros servidores
      </div>
    </div>
    <div class="item">
      <img src="imagenes/serv4.jpg" alt=""/>
      <div class="carousel-caption">
        Nuestros servidores
      </div>
    </div>
  </div>
	<a data-slide="prev" href="#mycarousel" class="left carousel-control"></a> <a data-slide="next" href="#mycarousel" class="right carousel-control"></a>
</div>
</div>
</div>
<br>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Servidores Disponibles</h3>
</div>
  <div class="panel-body">
        <table class="table table-striped">
            <tr>
                <td>Numero de CPUs</td>
                <td>Memoria RAM</td>
                <td>Estado Actual del Servidor</td>
                <td>Precio del Servidor</td>
            </tr>
        <?php
                    foreach ($rows as $row) {
        ?>
            <tr>
                <td><?php echo $row['numCPUs']; ?></td>
                <td><?php echo $row['memoriaRAM']; ?></td>
                <td><?php echo $row['estadoServidor']; ?></td>
                <td><?php echo $row['precioServidor']; ?></td>
            </tr>
        <?php } ?>
    </table>
    </div>
    </div>

</body>
</div>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
    $('.carousel').carousel({
        interval: 1900
    })
</script>

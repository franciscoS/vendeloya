<?php

$id = $_REQUEST['id'];

require_once('../core/clasificados.php');
// Inicia el uso de la clase Clasificado
$clasificado1 = new Clasificado();
$clasificado1->get($id);

$estado = $clasificado1->estado;
$moneda = $clasificado1->preciodiv;

$clasificado2 = new Clasificado();
$clasificado2->getmedia($id);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Vendelo Ya - Clasificados para todos! </title>
<?php include('../inc/head.php'); ?>
</head>
<body>
<div id="wrapper">
	<?php include('../inc/header.php'); ?>
	
	<div id="container">
		<div id="center_container">
		  <div id="content">
			<h2><?php echo $clasificado1->titulo; ?></h2>
            <table width="660" border="0" cellspacing="0" cellpadding="0" class="mediumtext">
                  <tr>
                    <td>Precio:</td>
                    <td width="80%"><?php echo $clasificado1->precio; ?> <?php if($moneda=0){echo "pesos";}else{echo "d&oacute;lares";} ?></td>
                  </tr>
                  <tr>
                    <td>Marca:</td>
                    <td><?php echo $clasificado1->marca; ?></td>
                  </tr>
                  <tr>
                    <td>Modelo:</td>
                    <td><?php echo $clasificado1->modelo; ?></td>
                  </tr>
                  <tr>
                    <td>A&ntilde;o:</td>
                    <td><?php echo $clasificado1->estado; ?></td>
                  </tr>
                  <tr>
                    <td>Detalles:</td>
                    <td><pre><?php echo $clasificado1->detalles; ?></pre></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Fecha de creaci&oacute;n:</td>
                    <td><?php echo $clasificado1->creado; ?></td>
                  </tr>
				  <tr>
                    <td colspan="2">
                      <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/media/f/<?php echo $clasificado2->nombreimagen; ?>" border="0" style="max-width:660px;">
                    </td>
                  </tr>
            </table>
			</div> 
			<!-- #content -->
			<?php include('../inc/sidebar.php'); ?>
		</div> <!-- #center_conatiner -->
	</div> <!-- #container -->
	
	<div id="clear"></div>	
	
	<div id="footer">
		<div id="center_footer">
			<?php include('../inc/footer.php'); ?>
		</div> <!-- #center_footer -->
	</div> <!-- #footer -->

</div> <!-- #wrapper -->
</body>
</html>
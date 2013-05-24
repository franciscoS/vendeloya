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
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
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
                  <?php if(($clasificado1->idcat == 3)||($clasificado1->idcat == 4)||($clasificado1->idcat == 6)||($clasificado1->idcat == 8)||($clasificado1->idcat == 9)||($clasificado1->idcat == 12)||($clasificado1->idcat == 13)||($clasificado1->idcat == 17)||($clasificado1->idcat == 19)||($clasificado1->idcat == 26)||($clasificado1->idcat == 27)){?>
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
                  <?php } ?>
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
                  <?php
                  $filename = $clasificado2->nombreimagen;
                  $filename = explode(".", $clasificado2->nombreimagen);
                  # Con arraypop se obtiene el ultimo elemento que se asigna como $extension
                  $extension = array_pop($filename);

                   if($extension != "swf"){ ?>
                  <tr>
                    <td colspan="2">
                      <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/media/f/<?php echo $clasificado2->nombreimagen; ?>" border="0" style="max-width:660px;">
                    </td>
                  </tr>
                  <?php } else { ?>
                  <tr>
                    <td colspan="2">
                      <script type='text/javascript' src='<?php echo "http://".$_SERVER['SERVER_NAME']; ?>/js/swfobject.js'></script>
                      <script type="text/javascript">
                      <!--
                        
                            var flashvars = {};
                            var params = {};
                            params.quality = "high";
                            params.bgcolor = "#ffffff";
                            params.allowscriptaccess = "sameDomain";
                            params.allowfullscreen = "true";
                            params.base=".";
                            var attributes = {};
                            attributes.id = "pano";
                            attributes.name = "pano";
                            attributes.align = "middle";
                            swfobject.embedSWF(
                              "../media/swf/<?php echo $clasificado2->nombreimagen; ?>", "flashContent", 
                              "640", "480", 
                              "9.0.0", "expressInstall.swf", 
                              flashvars, params, attributes);
                      //-->
                      </script>
                      <div id="flashContent">
                        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
                      </div>

                    </td>
                  </tr>
                  <?php } ?>
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
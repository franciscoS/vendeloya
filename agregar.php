<?php
require_once('core/session.php');
// Inicia el uso de la clase Usuario
$session1 = new Session();
$session1->regis();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include 'core/imguploader.class.php';
	
		$titulo = $_REQUEST['titulo'];
		$precio = $_REQUEST['precio'];
		$preciodiv = $_REQUEST['precioDiv'];
		$detalles = $_REQUEST['detalles'];
		$marca = $_REQUEST['marca'];
		$modelo = $_REQUEST['modelo'];
		$estado = $_REQUEST['estado'];
		$categoria = $_REQUEST['IdCat'];
		//$promo = $_REQUEST['promo'];
		
		$idusuario = $_SESSION['usr_id'];
		
		if (!empty($_FILES['clasimage']['name'])) {
		
		# Se especifica el nombre del archivo
		$fname = $_FILES['clasimage']['name'];		
		# Se especifica el caracter que sustrae (nombre.imagen.jpg)
		$split_point = ".";
		# Se asigna a file name un array
		$filename = explode($split_point, $fname);
		
		# Con arraypop se obtiene el ultimo elemento que se asigna como $extension
		$extension = array_pop($filename);
		$filename = implode($split_point, $filename);
		
		if($extension != "swf"){
			$img = new imgUploader($_FILES['clasimage']);
			
			$time = time();
			
			$thumb = $img->upload('/media/80/', $filename, 80,80);
			$small = $img->upload('/media/150/', $filename, 150,150);		
			$full = $img->upload_unscaled('/media/f/', $filename);
		} else {
			$path= "media/swf/".$_FILES['clasimage']['name'];
			if($_FILES['clasimage']['error'] == 0) {
				if(copy($_FILES['clasimage']['tmp_name'], $path)){
				} else {
				echo "Error";
				}
			}
		}
		require_once('core/clasificados.php');
		# Crear un nuevo clasificado
		$new_clasificado_data = array(
		'titulo'=>"$titulo", 'precio'=>"$precio", 'preciodiv'=>"$preciodiv", 'detalles'=>"$detalles", 'marca'=>"$marca", 'modelo'=>"$modelo", 'estado'=>"$estado", 'idcat'=>"$categoria", 'promo'=>"0", 'idusuario'=>"$idusuario", 'nombreimagen'=>"$filename.$extension"
		);
		$clasificado1 = new Clasificado();
		$clasificado1->set($new_clasificado_data);
		
		} else {
		
		require_once('core/clasificados.php');
		# Crear un nuevo clasificado
		$new_clasificado_data = array(
		'titulo'=>"$titulo", 'precio'=>"$precio", 'preciodiv'=>"$preciodiv", 'detalles'=>"$detalles", 'marca'=>"$marca", 'modelo'=>"$modelo", 'estado'=>"$estado", 'idcat'=>"$categoria", 'promo'=>"0", 'idusuario'=>"$idusuario"
		);
		$clasificado1 = new Clasificado();
		$clasificado1->set($new_clasificado_data);
		
		}
		
		require_once('core/despliegueanuncios.php');
		$clasificado1 = new DespliegueAnuncios();
		$clasificado1->regis();
		$url = $clasificado1->idclasificado;

		header( "Location:publicado.php?id=$url&m=1" );
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>Agregar Anuncio - Vendelo Ya - Clasificados para todos! </title>
<?php include('inc/head.php'); ?>
</head>
<body>
<div id="wrapper">
	<?php include('inc/header.php'); ?>
	
	<div id="container">
		<div id="center_container">
			<div id="content">
				<h2>Agregar Anuncio Clasificado</h2>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="formad">
				<table width="660" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td>Título</td>
					<td><input type="text" name="titulo" id="titulo" class="round mediumtext" size="55"></td>
				  </tr>
				  <tr>
					<td>Categoría</td>
					<td>
					<select name="IdCat" class="round mediumtext">
					  <option value="1">Alimentos</option>
					  <option value="2">Animales y Mascotas</option>
					  <option value="3">Autos y Motos</option>
					  <option value="4">Autopartes</option>
					  <option value="5">Bebés</option>
					  <option value="6">Bicicletas</option>
					  <option value="7">Casas</option>
					  <option value="8">Celulares y Smartphones</option>
					  <option value="9">Computadoras</option>
					  <option value="10">Departamentos</option>
					  <option value="11">Deportes</option>
					  <option value="12">Electrodomésticos</option>
					  <option value="13">Electrónicos</option>
					  <option value="14">Empleos / Bolsa de trabajo</option>
					  <option value="15">Encuentros personales / Adultos</option>
					  <option value="16">Extravíos / Servicio a la comunidad</option>
					  <option value="17">Herramientas</option>
					  <option value="18">Hogar</option>
					  <option value="19">Instrumentos Musicales</option>
					  <option value="20">Joyería y Accesorios</option>
					  <option value="21">Libros y Revistas</option>
					  <option value="22">Locales Comerciales</option>
					  <option value="23">Música y Películas</option>
					  <option value="24">Muebless</option>
					  <option value="25">Oficina</option>
					  <option value="26">Ropa y Calzado</option>
					  <option value="27">Saldos</option>
					  <option value="28">Salud y Belleza</option>
					  <option value="29">Terrenos</option>
					  <option value="30">Videojuegos</option>
					  <option value="31">Varios</option>
					  <option value="31" selected>Seleccionar</option>
					  </select></td>
				  </tr>
				  <tr>
					<td>Precio</td>
					<td><input type="text" name="precio" id="precio" class="round mediumtext">
					  <select name="precioDiv" id="precioDiv" class="round mediumtext">
						<option value="0" selected>Pesos</option>
						<option value="1">Dólares</option>
					  </select></td>
				  </tr>
				  <tr>
					<td>Marca</td>
					<td><label>
					  <input type="text" name="marca" id="marca" class="round mediumtext">
					</label></td>
				  </tr>
				  <tr>
					<td>Modelo</td>
					<td><label>
					  <input type="text" name="modelo" id="modelo" class="round mediumtext">
					</label></td>
				  </tr>
				  <tr>
					<td>Año</td>
					<td><select name="estado" id="estado" class="round mediumtext">
					  <option value="1960">1960</option>
					  <option value="1961">1961</option>
					  <option value="1962">1962</option>
					  <option value="1963">1963</option>
					  <option value="1964">1964</option>
					  <option value="1965">1965</option>
					  <option value="1966">1966</option>
					  <option value="1967">1967</option>
					  <option value="1968">1968</option>
					  <option value="1969">1969</option>
					  <option value="1970">1970</option>
					  <option value="1971">1971</option>
					  <option value="1972">1972</option>
					  <option value="1973">1973</option>
					  <option value="1974">1974</option>
					  <option value="1975">1975</option>
					  <option value="1976">1976</option>
					  <option value="1977">1977</option>
					  <option value="1978">1978</option>
					  <option value="1979">1979</option>
					  <option value="1980">1980</option>
					  <option value="1981">1981</option>
					  <option value="1982">1982</option>
					  <option value="1983">1983</option>
					  <option value="1984">1984</option>
					  <option value="1985">1985</option>
					  <option value="1986">1986</option>
					  <option value="1987">1987</option>
					  <option value="1988">1988</option>
					  <option value="1989">1989</option>
					  <option value="1990">1990</option>
					  <option value="1991">1991</option>
					  <option value="1992">1992</option>
					  <option value="1993">1993</option>
					  <option value="1994">1994</option>
					  <option value="1995">1995</option>
					  <option value="1996">1996</option>
					  <option value="1997">1997</option>
					  <option value="1998">1998</option>
					  <option value="1999">1999</option>
					  <option value="2000">2000</option>
					  <option value="2001">2001</option>
					  <option value="2002">2002</option>
					  <option value="2003">2003</option>
					  <option value="2004">2004</option>
					  <option value="2005">2005</option>
					  <option value="2006">2006</option>
					  <option value="2007">2007</option>
					  <option value="2008">2008</option>
					  <option value="2009">2009</option>
					  <option value="2010">2010</option>
					  <option value="2011">2011</option>
					  <option value="2012">2012</option>
					  <option value="2013">2013</option>
					</select></td>
				  </tr>
				  <tr>
					<td>Subir imagen</td>
					<td><input type="file" name="clasimage" id="clasimage" class="round mediumtext"></td>
				  </tr>
				  <tr>
					<td>Detalles</td>
					<td><textarea name="detalles" id="detalles" cols="60" rows="5" class="round mediumtext"></textarea></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="Publicar" id="publicar" name="publicar" class="round mediumtext"></td>
				  </tr>
				</table>
				</form>
			</div> <!-- #content -->
			<?php include('inc/sidebar.php'); ?>
		</div> <!-- #center_conatiner -->
	</div> <!-- #container -->
	
	<div id="clear"></div>	
	
	<div id="footer">
		<div id="center_footer">
			<?php include('inc/footer.php'); ?>
		</div> <!-- #center_footer -->
	</div> <!-- #footer -->

</div> <!-- #wrapper -->
</body>
</html>
<div id="sidebar">
<?php if (isset($_SESSION['usr_id'])) {?>
<div id="title">Buen d&iacute;a <?php echo $_SESSION['usr_nick']; ?></div>
<a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/vendeloya/logout.php">Cerrar Sesi&oacute;n</a>
<?php } else { ?>
<div id="title">Bienvenido a VendeloYa</div>
<a href="#" onclick="toggleDiv('loginbox');" onmouseup="this.style.display = 'none';">Iniciar Sesi&oacute;n</a>
<div id="loginbox">
	<form action="<?php echo "http://".$_SERVER['SERVER_NAME']."/vendeloya/login.php"; ?>" method="POST" name="login" id="login" class="midfont">
	<input name="nickmail" type="text" class="round bigtext" size="18" placeholder="Usuario / Email"><br>
	<input name="password" type="password" class="round bigtext" size="8" placeholder="Contrase&ntilde;a">
	<input name="login" type="submit" value="Iniciar" class="round bigtext">
	</form>
</div>
<?php } ?>
</div> <!-- #sidebar -->
<div id="sidebartrans">
<div id="megabtn" style="float:right;"><a href="#">Crea un Anuncio</a></div>
<div id="megabtn"><a href="<?php echo "http://".$_SERVER['SERVER_NAME']."/registro"; ?>">&iexcl;Reg&iacute;strate!</a></div>
</div>
<div id="sidebar">
<div id="title">&iquest;Qu&eacute; buscas?</div>
<input type="text" class="round bigtext" size="10"><input type="submit" value="Buscar!" class="round bigtext">
</div> <!-- #sidebar -->
<div id="sidebar">
<div id="title">Anuncios Promocionados</div>
<div id="anunciospromo">
<div class="viewport">
<ul class="overview">
<li><a href="#"><img src="http://www.ensenada.net/autos/fotos/25306_1s.jpg" class="imgpremium"><h2>Ford Ranger Nacional 4x4 $1500</h2></a></li>
<li><a href="#"><img src="http://www.ensenada.net/autos/fotos/25301_1s.jpg" class="imgpremium"><h2>Auto Blanco $1500</h2></a></li>
<li><a href="#"><img src="http://www.ensenada.net/autos/fotos/25303_1s.jpg" class="imgpremium"><h2>Auto Plateado $6500</h2></a></li>
<li><a href="#"><img src="http://www.ensenada.net/autos/fotos/25301_1s.jpg" class="imgpremium"><h2>Auto Blanco 4x4 $1500</h2></a></li>
</ul>
</div>
</div>
</div><!-- #sidebar -->
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
<div id="megabtn" style="float:right;"><a href="<?php echo "http://".$_SERVER['SERVER_NAME']."/agregar.php"; ?>">Crea un Anuncio</a></div>
<div id="megabtn"><a href="<?php echo "http://".$_SERVER['SERVER_NAME']."/registro"; ?>">&iexcl;Reg&iacute;strate!</a></div>
</div>
<div id="sidebar">
<div id="title">&iquest;Qu&eacute; buscas?</div>
<input type="text" class="round bigtext" size="10"><input type="submit" value="Buscar!" class="round bigtext">
</div> <!-- #sidebar -->
<?php include("_premium.php"); ?>

<div class="addthis_toolbox addthis_32x32_style addthis_default_style" style="text-align:center;margin-left:15px;float:right;" align="center"> <a class="addthis_button_facebook" style="margin:0 5px 0 0;border:none;"></a> <a class="addthis_button_twitter" style="margin:0 5px 0 0;border:none;"></a> <a class="addthis_button_google_plusone_share" style="margin:0 5px 0 0;border:none;"></a> <a class="addthis_button_pinterest_share" style="margin:0 5px 0 0;border:none;"></a> <a class="addthis_button_email" style="margin:0 5px 0 0;border:none;"></a> <a class="addthis_button_compact" style="margin:0 5px 0 0;border:none;"></a> </div><br>
<div class="addthis_toolbox addthis_default_style " style="text-align:center;margin-left:15px;float:right;">
<a class="addthis_button_facebook_like" fb:like:layout="button_count" style="border:none;"></a>
<a class="addthis_button_tweet" style="border:none;"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-508dfd1f08f2e5ad"></script>
<!-- AddThis Button END -->

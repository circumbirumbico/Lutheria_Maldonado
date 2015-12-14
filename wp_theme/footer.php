<!-- footer -->
<footer id="contacto">
	<div class="sobre">
		<img src="<?php bloginfo('template_directory') ?>/img/contacto-lutheria.png" alt="Contacto Luthería">
	</div>

	<h2><strong>Contacto</strong> <?php bloginfo('name') ?></h2>
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-1">
				<input type="text" placeholder="Nombre" require>
				<input type="text" placeholder="Email" require>
				<input type="text" placeholder="Asunto" class="asunto" require>
			</div>

			<div class="col-sm-5">
				<textarea name="" id="" cols="30" rows="10" placeholder="Mensaje" require></textarea>
				<input type="submit" placeholder="Asunto" class="asunto">
			</div>
		</div>

		<div class="copyright">
			© 2015 LUTHERÍA MALDONADO | Todos los derechos reservados.
		</div>

	</div>
</footer>

<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3001/browser-sync/browser-sync-client.2.10.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>


<script src="<?php bloginfo('template_directory') ?>/js/jquery-2.1.4.min.js"></script>


</body>
</html>
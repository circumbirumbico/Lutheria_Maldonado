<!-- footer -->
<footer id="contacto">
	<div class="sobre">
		<i class="fa fa-envelope-o"></i>
	</div>

	<h2><strong>Contacto</strong> <?php bloginfo('name') ?></h2>
	<div class="container">
		<div class="row">
			<?php echo do_shortcode( '[contact-form-7 id="16" title="Contact form 1"]' ); ?>
		</div>

		<div class="copyright">
			© 2015 <?php bloginfo('name') ?> | Todos los derechos reservados.
		</div>

	</div>
</footer>

<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3001/browser-sync/browser-sync-client.2.10.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>


<script src="<?php bloginfo('template_directory') ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/app.js"></script>

<?php wp_footer() ?>

</body>
</html>
<!-- footer -->
<footer id="contacto">
	<div class="sobre">
		<i class="fa fa-envelope-o"></i>
	</div>

	<h2><strong>Contacto</strong> <?php bloginfo('name') ?></h2>
	<div class="container">
		<div class="row">
			<?php echo do_shortcode( '[contact-form-7 id="64" title="Contact form 1"]' ); ?>
		</div>

		<div class="copyright">
			© 2015 <?php bloginfo('name') ?> | Todos los derechos reservados.
		</div>

	</div>
</footer>

<script type='text/javascript' id="__bs_script__">//<![CDATA[
	document.write("<script async src='http://HOST:3001/browser-sync/browser-sync-client.2.10.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>


<script src="<?php bloginfo('template_directory') ?>/js/app.js"></script>

<?php wp_footer() ?>

<!-- Google Analytics -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-71553641-1', 'auto');
	ga('send', 'pageview');
</script>

</body>
</html>
<footer class="site-footer ">
	<nav class="site-nav-footer group">
		
		<?php 
		
		$args= array (
		'theme_location' => 'footer'
		);
		
		?>	
		
		<?php wp_nav_menu($args); ?>

	</nav>

	<div class="footer-loc">
		<p>
			<?php bloginfo('name'); ?>
			<span id="separator">|</span> &copy;
			<?php echo date('Y'); ?> &nbsp;&nbsp;Design:Mjd
		</p>
	</div>

</footer>

    <?php wp_footer(); ?>

</body>
</html>

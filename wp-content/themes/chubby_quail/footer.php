						<!-- footer -->
						<footer class="site-footer" role="contentinfo">
						</footer>
						<div class="tel">t: 626.430.0141 | e: <a href="mailto:info@chubbyquail.com">info@chubbyquail.com</a> | San Francisco, CA</div>

						<!-- /footer -->			
			
						<!-- wrapper end-->	
						</div>
					<!-- page-wrap end-->	
					</div>
					<nav class="outer-nav left vertical">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'order' => 'desc' ) ); ?>
				    </nav>
				</div><!-- perspective wrapper -->
		
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<!-- Magnific Popup core JS file -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.vide.min.js"></script>
	</body>
</html>

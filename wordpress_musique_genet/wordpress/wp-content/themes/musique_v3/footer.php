			<footer id="footer" class="row">
				<div class="col-md-12">
				<?php
				wp_nav_menu ( array (
						'menu' => 'secondary_navigation',
						'container' => 'div',
						'container_class' => 'text-right',
						'menu_class' => 'list-inline',
						
				) );
				?>
				</div>
			</footer>
			<?php wp_footer(); ?>
		</div>
		<!-- Fin .container -->
	</body>
</html>

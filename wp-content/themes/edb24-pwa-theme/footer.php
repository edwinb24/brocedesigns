	<?php            
		include(dirname(__FILE__).'/assets/variables.php');
    ?>
	<footer>
		<div class="footer_wrapper">
			<?php wp_nav_menu(array('theme_location'=>'footer_menu')); ?>
			<div class="footer_disclaimer">
				<h6>Important Disclaimer</h6>
				<p>
					AAA<?php echo $brand_name ?>
					<br>
					<br>
					BBB
				</p>
			</div>
			<div class="footer_links_and_rights">
			<p class="footer_links">
				<a href="https://www.google.com">TEST </a>| 
				<a href="https://www.google.com">TEST </a>
			</p>
			<p class="post_footer">
				Copyright ©2019 <?php echo $brand_name?>
			</p>
			</div>
		</div>
	</footer>
	
	<?php wp_footer(); ?>
	<!-- PHP Pop Ups -->
	<?php 
                /* Pop up for header external links */
                include(dirname(__FILE__).'/assets/header_pop_ups.php');
    ?>
	</body>
</html>
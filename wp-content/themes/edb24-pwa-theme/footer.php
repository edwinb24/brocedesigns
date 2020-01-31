	<?php            
		include(dirname(__FILE__).'/assets/variables.php');
    ?>
	<footer>
		<div class="footer_wrapper">
			<?php wp_nav_menu(array('theme_location'=>'footer_menu')); ?>
		</div >
	</footer>
	<?php wp_footer(); ?>
	</body>
	<script>
            <?php 
            include(dirname(__FILE__).'/assets/js/lazy_loading.js');
            ?>       
        </script>
</html>
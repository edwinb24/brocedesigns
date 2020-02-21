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
	<!-- Lazy JS -->
	<template class="lazyload">
		<script>
			<?php 
				include(dirname(__FILE__).'/assets/js/houdini_index.js');
			?>       
		</script>
	</template>

</html>
	<?php            
		include(dirname(__FILE__).'/assets/variables.php');
    ?>
	<?php wp_footer(); ?>
	</body>
	<script src="<?php echo get_bloginfo('template_url');?>/assets/js/code_lazy_loading.js"></script>
	<script src="<?php echo get_bloginfo('template_url');?>/assets/js/image_lazy_loading.js"></script>
	<!-- Lazy JS -->
	<template class="lazyload">
		<script>
			<?php 
				// include(dirname(__FILE__).'/assets/js/houdini_index.js');
				?>       
		</script>
	</template>

</html>
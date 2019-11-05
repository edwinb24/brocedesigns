<?php get_header(); ?>
<div class="main_content_wrapper front_page">
	<?php 
	if( have_posts() ):
		while( have_posts() ): the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>									
			</article>
		<?php endwhile;	
	endif;		
	?>
</div>

<?php get_footer(); ?>
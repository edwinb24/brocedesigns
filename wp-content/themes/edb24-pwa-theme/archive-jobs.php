<div class="viewport">
<?php get_header(); ?>
<span class="separating_line"></span>
<div class="scene_3d_wrapper">
<div class="scene_3d_container">
<div class="main_content_wrapper job_list_page">

<?php 
$args = array( 'post_type' => 'jobs', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>
	<?php 
	$i = 1;
	$item = "job_";
	if( $the_query->have_posts() ):
		while( $the_query->have_posts() ): $the_query->the_post(); 
			$job_class = $item . $i; 
			$i++; ?>
			<article id="page-<?php print(strtolower(str_replace(' ', '-', get_the_title()))); ?>" <?php post_class($job_class); ?>>
				<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
				<?php the_content(); ?>
			</article>
		<?php endwhile;	
	endif;		
	?>
</div>
</div>
</div>

</div>
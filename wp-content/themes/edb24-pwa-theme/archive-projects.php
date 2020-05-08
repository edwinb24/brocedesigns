<?php get_header(); ?>

<div class="<?php echo get_post_type() ?>_content">
<h1>Web Developer Portfolio</h1>
<p>My web developer portfolio have took me to large and small 
	companies using back-end and front-end techlogies</p>
<?php 
$args = array( 'post_type' => 'projects', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>
	<?php 
	$i = 1;
	$item = "project_";
	if( $the_query->have_posts() ):
		while( $the_query->have_posts() ): $the_query->the_post(); 
			$project_class = $item . $i; 
			$i++; ?>
			<article id="page-<?php print(strtolower(str_replace(' ', '-', get_the_title()))); ?>" <?php post_class($project_class); ?>>
				<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
				<div class="main-content">
					<ul>
						<?php
						$tags = get_tags();
						if ( $tags ) :
							foreach ( $tags as $tag ) : ?>
								<li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
							<?php endforeach; ?>
						<?php endif; ?>
					</ul>
				</div>
			</article>
		<?php endwhile;	
	endif;		
	?>
</div>


<?php get_footer(); ?>
<?php get_header(); ?>

<?php

function returnURL($img_url) {
	$j = strpos($img_url, "wp-content");
	$img_url = substr($img_url, $j, strlen($img_url));
	$k = strpos($img_url, '" class');
	$img_url = substr($img_url, 0, $k);
	$img_url = "https://ik.imagekit.io/edwinb24/". $img_url;
	return $img_url;
}
  
?>


<div class="<?php echo get_post_type() ?>_content">
	<div class="intro">
		<h1>Web Developer Portfolio</h1>
		<p>My web developer portfolio have took me to large and small 
			companies using back-end and front-end techlogies
		</p>
	</div>
	<div class="content">
		<?php 
		$args = array( 'post_type' => 'projects', 'posts_per_page' => 10 );
		$the_query = new WP_Query( $args ); 
		?>
		<?php 
		$i = 1;
		$item = "project_";
		if( $the_query->have_posts() ):
			while( $the_query->have_posts() ): $the_query->the_post();
				$main_image = get_the_post_thumbnail();
				$hover_image = get_field("image");
				
				$main_image = returnURL($main_image);
				$hover_image = returnURL($hover_image);

				echo $main_image;
				echo "<br>";
				echo $hover_image;

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
									<li><?php echo esc_html( $tag->name ); ?></li>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<picture class="hover_image project_image">
							<source media="(min-width: 650px)" srcset="<?php echo $main_image . "?tr=w-500,h-290";?>">
							<source media="(min-width: 465px)" srcset="<?php echo $main_image . "?tr=w-500,h-290";?>">
							<img src="<?php echo $main_image . "?tr=w-500,h-290";?>" alt="<?php echo (the_title() . " Image")?>" style="width:auto;">
						</picture> 
						<picture class="main_image project_image">
							<source media="(min-width: 650px)" srcset="<?php echo $main_image . "?tr=w-500,h-290";?>">
							<source media="(min-width: 465px)" srcset="<?php echo $main_image . "?tr=w-500,h-290";?>">
							<img src="<?php echo $main_image . "?tr=w-500,h-290";?>" alt="<?php echo (the_title() . " Image")?>" style="width:auto;">
						</picture> 
					</div>
				</article>
			<?php endwhile;	
		endif;		
		?>
	</div>
</div>


<?php get_footer(); ?>
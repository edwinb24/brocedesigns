<?php get_header(); ?>

<?php
	function returnURL($img_url) {
		$j = strpos($img_url, "wp-content");
		$img_url = substr($img_url, $j, strlen($img_url));

		$k = strpos($img_url, '" class');
		if($k > -1)
			$img_url = substr($img_url, 0, $k);
		else
			$img_url = substr($img_url, 0, strlen($img_url));
		$img_url = "https://ik.imagekit.io/edwinb24/". $img_url;
		return $img_url;
    }
    
    $main_image = get_the_post_thumbnail();
    $hover_image = get_field("additional_image");
    $main_image = returnURL($main_image);
    $hover_image = returnURL($hover_image);

    $project_class = $item . $i; 
    $i++;

?>

<div class="<?php echo get_post_type() ?>_content">
    <div class="back_link">
       <a>
           < All Projects
       </a>
    </div>
	<div class="intro">
        <?php the_title('<h1 class="entry-title">','</h1>' ); ?>
    </div>
    <div class="content">
        <div class="project_images">
            <picture class="hover_image project_image">
                <img src="<?php echo $hover_image . "?tr=w-500,h-290";?>" alt="<?php echo (the_title() . " Image")?>">
            </picture> 
            <picture class="main_image project_image">
                <img src="<?php echo $main_image . "?tr=w-500,h-290";?>" alt="<?php echo (the_title() . " Image")?>">
            </picture> 
        </div>
        <div class="project_description">
            <div class="description">
                "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."
            </div>
            <div class="technologies">
                <ul>
                    <?php
                    $tags = get_tags();
                    if ( $tags ) :
                        foreach($tags as $tag): ?>
                            <li><?php echo esc_html( $tag->name ); ?></li>
                        <?php endforeach ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
	</div>
</div>


<?php get_footer(); ?>
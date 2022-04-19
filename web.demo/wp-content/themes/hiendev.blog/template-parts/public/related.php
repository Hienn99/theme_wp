<?php 
$post_type = get_post_type();
$per_page = 4;

$args = array( 	'category__in' => wp_get_post_categories($post->ID), 
				'post_type' => $post_type, 
				'posts_per_page' =>  $per_page  ,
				'post__not_in' => array($post->ID) 
		);
$related_query = new WP_Query($args); // var_dump($related_query); exit;
if( !$related_query->have_posts() ) { 
	//related tags
	$tags = wp_get_post_tags($post->ID);
	$tag_ids = array();
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	$args=array(
		'post_type' => $post_type, 
		'tag__in' => $tag_ids,
		'post__not_in' => array($post->ID),
		'posts_per_page'=> $per_page, // Number of related posts to display.
	);
	$related_query = new WP_Query($args);
}
if( !$related_query->have_posts() ) {   
	$args = array(  'post_type' => $post_type,
					'posts_per_page' =>  $per_page  ,
					'order'     => 'desc',
					'post__not_in' => array($post->ID) 
		);
	$related_query = new WP_Query( $args );
}

if( $related_query->have_posts() ) { 
?>
<div class="w366-relates dibiz-post-navigation">
	<h3>Bài viết liên quan</h3>
	<ul>
		<?php 
        while ($related_query->have_posts()) : $related_query->the_post();
        ?>
            <li><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></li>
        <?php 
        endwhile;
        wp_reset_postdata();
        ?>
    </ul>		
</div>
<?php 
}
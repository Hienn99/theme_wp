<?php
get_header(); ?>

<div id="main" class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
	<?php dynamic_sidebar( 'sidebar-home' ); ?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part('template-parts/post/content', 'loop');
		endwhile; // End of the loop.	
		?>
		<div class="text-center">
			<ul class="pagination">
	            <?php
	            echo paginate_links( array(
					//'type' => 'list',
					'prev_text' => '«',
					'next_text' => '»',
				) );	
	            ?>
            </ul>
        </div>
		<?php
	endif;
	?>
</div>

<div id="right-sidebar" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <?php get_sidebar(''); ?>
</div>

    
<?php get_footer();

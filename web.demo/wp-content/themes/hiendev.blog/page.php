<?php
get_header(); ?>


<?php get_template_part('template-parts/header/header', 'page-title-area');?>

<section id="page-singlr-content" class="blog-area bg-f9f9f9 ptb-100">
	<div class="container">
    	<div class="row">
			<div class="col-lg-8 col-md-12">
            	<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/page/content','' );
				endwhile; // End of the loop.
				?>
			</div>
            <div class="col-lg-4 col-md-12">
            	 <?php get_sidebar(''); ?>
            </div>
       	</div>
	</div>
</section>

<?php get_footer();

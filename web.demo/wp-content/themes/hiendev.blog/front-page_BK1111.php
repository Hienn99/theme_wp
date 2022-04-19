<?php
get_header(); ?>

<div id="main" class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
<?php // Show the selected frontpage content.
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/page/content', 'front-page' );
	endwhile;
endif; ?>
</div>

<div id="right-sidebar" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <?php get_sidebar(''); ?>
</div>

<?php get_footer();
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-details-desc'); ?>>
	<?php 
	if(has_post_thumbnail()){
	?>
	<div class="article-image">
    	<?php the_post_thumbnail('', array('alt' => get_the_title(), 'class' => 'img-fluid' )); ?>
    </div>
    <?php 
	}
	?>
    
    <div class="article-content">
    	 <?php get_template_part( 'template-parts/public/entry-meta','' ); ?>
         <div class="entry-content">
			<?php the_content( ); ?>
        </div>
        <?php get_template_part( 'template-parts/public/article-footer','' ); ?>
    </div>
    
    <?php get_template_part( 'template-parts/public/related','' ); ?>
</article><!-- #post-## -->

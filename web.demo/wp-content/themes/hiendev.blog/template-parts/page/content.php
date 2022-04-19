<article id="post-<?php the_ID(); ?>" <?php post_class('blog-details-desc'); ?>>
    <div class="article-content">
         <div class="entry-content">
			<?php the_content( ); ?>
        </div>
        <?php get_template_part( 'template-parts/public/article-footer','' ); ?>
    </div>
</article><!-- #post-## -->

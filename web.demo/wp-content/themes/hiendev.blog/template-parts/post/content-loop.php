<article class="post-wrapper wow fadeInUp">
    <div class="title">
        <h3><span class="post_type fa fa-pencil-square-o"></span> <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h3>
        <div class="byline">
            
            <span><i class="fa fa-folder-open-o"></i> <a href="#" title="">News</a></span>
            <!-- //the_category(); -->
            <span><i class="fa fa-tags"></i> <a href="#" title=""><?=the_tags();?></a></span>
            <!-- <span><i class="fa fa-comments-o"></i> <a href="#" title="">22</a></span> -->
            <span><i class="fa fa-calendar-o"></i> <a href="#" title=""><?=get_the_date( 'dS M Y', $post->ID );?></a></span>
            <!-- <span><i class="fa fa-eye"></i> <a href="#" title="">441</a></span> -->
        </div>
    </div>
    <div class="media post-image">
         <div class="entry">
            <a href="<?php the_permalink(); ?>"><img src="<?=get_the_post_thumbnail_url();?>" alt=""></a>
            <div class="magnifier">
                <div class="buttons">
                    <a class="st" rel="bookmark" href="<?php the_permalink(); ?>"><i class="fa fa-search"></i></a>
                </div><!-- end buttons -->
            </div><!-- end magnifier -->
        </div><!-- end item --> 
    </div>
    <div class="desc">
        <p> <?php echo wp_trim_words( get_the_content(), 60, '...' ); ?> </p>
    </div>
    <div class="post-footer">
        <div class="pull-left">
            <a href="<?php the_permalink(); ?>" class="readmore">Read more [..]</a>
        </div>
        <div class="pull-right">
            <div class="social">
                <span><a data-toggle="tooltip" data-placement="bottom" title="Share on Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                <span><a data-toggle="tooltip" data-placement="bottom" title="Share on Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                <span><a data-toggle="tooltip" data-placement="bottom" title="Share on Pinterest" href="#"><i class="fa fa-pinterest"></i></a></span>
                <span><a data-toggle="tooltip" data-placement="bottom" title="Share on Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
            </div>
        </div>
    </div>
</article>
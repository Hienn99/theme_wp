<?php
get_header(); ?>


<section>
	<div class="space-50"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="entry-title" style="text-align:center;">Lỗi 404 - Không tìm thấy trang!<br/><a href="<?php echo get_site_url();?>">Trang chủ</a></h1>
                <p><img class="img-fluid" src="<?php echo get_theme_file_uri( '/dev/enqueue/img/404.png' ); ?>" alt="Lỗi 404 - Không tìm thấy trang!"></p>
            </div>
        </div>
    </div>
</section>


<?php get_footer();

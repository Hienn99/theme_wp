<div class="copyrights">
	<div class="container">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        	<p><?php echo hl_get_option("content_copyright")?></p>
        </div><!-- end col-lg-4 -->
		<div class="col-lg--8 col-md-8 col-sm-6 col-xs-12">
			<div class="footer-menu">
                
                    <?php wp_nav_menu( 
                      array( 
                          'theme_location' => 'bottom-menu', 
                          'container' => 'false', 
                          'menu_id' => 'bottom', 
                          'menu_class' => 'menu'
                       ) 
                    ); ?>
                
            </div><!-- end footer-menu -->
        </div><!-- end col-lg-8 -->
    </div><!-- end container -->
</div>
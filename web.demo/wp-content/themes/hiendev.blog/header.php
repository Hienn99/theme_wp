<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>> 
	 <div id="wrapper" class="container">
	 	<div id="wrapper-row" class="row">
	 		<div id="left-sidebar" class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
	 			<div class="logo-wrapper">
                	<a href="index.html" class="navbar-brand">
                		
                	</a>
                </div><!-- end logo-wrapper -->
                <div class="menu-wrapper">
                    <nav class="flat-menu flat-menu-dark-orange flat-menu-slide-up">
                        <input type="checkbox" id="toggle-one" name="toggle" class="toggle-menu-input">
                        <label for="toggle-one" class="toggle-menu-label"><span class="fa fa-bars"></span>Menu</label>
                        <?php wp_nav_menu( 
                                  array( 
                                      'theme_location' => 'top-menu', 
                                      'container' => 'nav', 
                                      'menu_id' => 'top', 
                                      'menu_class' => 'flat-responsive-menu'
                                      // 'add_li_class' => 'flat-responsive-menu'
                                   ) 
                                ); ?>

                       <!--  <ul class="flat-responsive-menu">
                            <li>
                                <input type="checkbox" id="menu-one" name="menu" class="menu-1">
                                <label for="menu-one">Home</label>
                                <ul class="menu-dropdown-one">
                                    <li><a href="index.html">Default</a></li>
                                    <li><a href="index-two.html">Two Columns</a></li>
                                    <li><a href="index-fullwidth.html">Fullwidth</a></li>
                                    <li><a href="index-portfolio.html">Portfolio Style</a></li>
                                </ul>
                                
                            </li>
                            <li>
                                <a href="about.html">About us</a>
                            </li>
                            <li>
                                <input type="checkbox" id="menu-two" name="menu" class="menu-1">
                                <label for="menu-two">Post Formats</label>
                                <ul class="menu-dropdown-one">
                                    <li><a href="post-image.html"><i class="fa fa-pencil-square-o"></i> Image</a></li>
                                    <li><a href="post-video.html"><i class="fa fa-play"></i> Video</a></li>
                                    <li><a href="post-slider.html"><i class="fa fa-camera"></i> Slider</a></li>
                                    <li><a href="post-audio.html"><i class="fa fa-music"></i> Audio</a></li>
                                    <li><a href="post-quote.html"><i class="fa fa-quote-right"></i> Quote</a></li>
                                    <li><a href="post-link.html"><i class="fa fa-link"></i> Link</a></li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" id="menu-three" name="menu" class="menu-1">
                                <label for="menu-three">Galleries</label>
                                <ul class="menu-dropdown-one">
                                    <li><a href="portfolio-masonry.html">Masonry Style</a></li>
                                    <li><a href="portfolio-two.html">Two Columns</a></li>
                                    <li><a href="portfolio-three.html">Three Columns</a></li>
                                    <li><a href="portfolio-single.html">Single Gallery</a></li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" id="menu-four" name="menu" class="menu-1">
                                <label for="menu-four">Pages</label>
                                <ul class="menu-dropdown-one">
                                    <li><a href="blog-authors.html">Blog Authors</a></li>
                                    <li><a href="login.html">Author Login</a></li>
                                    <li><a href="sitemap.html">Sitemap</a></li>
                                    <li><a href="fullwidth.html">Fullwidth Page</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" id="menu-five" name="menu" class="menu-2">
                                <label for="menu-five">Categories</label>
                                    <ul class="menu-dropdown-two">
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Magazine</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li>
                                            <input type="checkbox" id="menu-six" name="menu" class="menu-3">
                                            <label for="menu-six"><i class="fa fa-angle-right"></i>Dropdown</label>
                                            <ul class="menu-dropdown-three">
                                                <li><a href="#">Settings</a></li>
                                                <li><a href="#">Location</a></li>
                                                <li><a href="#">Support</a></li>
                                                <li>
                                                    <input type="checkbox" id="menu-seven" name="menu" class="menu-4">
                                                    <label for="menu-seven"><i class="fa fa-angle-right"></i>Dropdown</label>
                                                    <ul class="menu-dropdown-four">
                                                        <li><a href="#">Settings</a></li>
                                                        <li><a href="#">Location</a></li>
                                                        <li><a href="#">Support</a></li>
                                                        <li>
                                                            <input type="checkbox" id="menu-eight" name="menu" class="menu-5">
                                                            <label for="menu-eight"><i class="fa fa-angle-left"></i>Dropdown</label>
                                                            <ul class="menu-dropdown-five">
                                                                <li><a href="#">Settings</a></li>
                                                                <li><a href="#">Location</a></li>
                                                                <li><a href="#">Support</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>      
                                </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul> -->
                    </nav><!-- end menu -->
                </div><!-- end menu wrapper -->
	 		</div>
	 		
<div id="header-domain-search" class="row">
	<div class="col-lg-10 col-md-8 col-sm-12 col-12 offset-lg-1 offset-md-2">
        <form class="domain-search">
            <div class="r-group">
                <input type="text" name="domain" id="domain" class="form-control" placeholder="VD: shopaothun.vn" />
                <input type="submit" value="Tìm tên miền" class="default-btn" />
            </div>
        </form>
        <?php 
        $s_domains = hl_get_option('setting_search_form_domains'); 
        $slider_number = (int)hl_get_option('setting_search_slider_number');
        if($s_domains){
            $arr_domain = preg_split('/\r\n|\r|\n/', $s_domains);
            if(is_array($arr_domain)){
        ?>
        	<div class="row">
            	<div class="col-lg-10 col-md-8 col-sm-12 col-12 offset-lg-1 offset-md-2">
                    <div id="search-form-domains" class="domain-list item-s2">
                        <?php 
                        foreach($arr_domain as $domain_title){
                            $domain_o = get_page_by_title($domain_title, OBJECT, 'w366_domain_pricing');
                            if(is_a($domain_o,'WP_Post')){
                            $price = get_field('price_1', $domain_o->ID);
                        ?>
                            <a href="#" class="dm-item"><span class="name"><?=$domain_title?></span><span class="price"><?=wle_format_money($price,true)?></span></a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <script>
                        jQuery(document).ready(function(e) {
                            jQuery('#search-form-domains').slick({
                                infinite: true,
                                slidesToShow: <?php echo $slider_number;?>,
                                slidesToScroll: 1,
                                // centerMode: true,
                                prevArrow:"<button class='slick-prevc slick-arrow'><i class='flaticon-back'></i></button>",
                                nextArrow:"<button class='slick-nextc slick-arrow'><i class='flaticon-chevron'></i></button>",
                              responsive: [
                                            {
                                              breakpoint: 1024,
                                              settings: {
                                                 slidesToShow: 5,
                                                slidesToScroll: 1,
                                                infinite: true,
                                                dots: true
                                              }
                                            },
                                            {
                                              breakpoint: 600,
                                              settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 2
                                              }
                                            },
                                            {
                                              breakpoint: 480,
                                              settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 2
                                              }
                                            }
                                          ]
                            });
                        });
                    </script>
        		</div>
            </div>
		<?php 
            }
        }
        ?>
    </div>
</div>

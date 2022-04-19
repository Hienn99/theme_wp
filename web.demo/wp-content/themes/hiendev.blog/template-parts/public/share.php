<?php 
if( is_single() || is_page() ){
	$url = get_the_permalink(); 
	$title = get_the_title();
	$summary = wp_trim_words( get_the_content(), 20, '...' );
	$media = get_the_post_thumbnail_url( get_the_ID(), '');
}
?>
<ul class="social">
  <li><span>Share:</span></li>
  <li><a href="http://www.facebook.com/sharer.php?u=<?php echo $url;?>" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a></li>
  <li><a href="https://twitter.com/intent/tweet?original_referer=<?php echo get_site_url();?>&amp;source=tweetbutton&amp;text=<?php echo $title;?>&amp;url=<?php echo $url;?>" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a></li>
  <li><a href="https://www.linkedin.com/cws/share?url=<?php echo $url;?>" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
</ul>

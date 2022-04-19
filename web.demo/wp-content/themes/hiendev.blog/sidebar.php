<?php
if ( ! is_active_sidebar( 'sidebar-right' ) ) {
	return;
}
?>
<aside class="widget-area">
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</aside>


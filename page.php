<?php get_header();?>


<div id="widget-test">
  <?php if ( is_active_sidebar( 'quick_link_menu' ) ) : ?>
  	<ul id="sidebar">
  		<?php dynamic_sidebar( 'quick_link_menu' ); ?>
  	</ul>
  <?php endif; ?>
</div>

<?php get_footer();?>

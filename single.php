<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post();
$thumbnail_src = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$terms = get_the_terms( get_the_ID(), 'category');
  if ( ! empty( $terms ) ) {
    $term = array_pop($terms);
    $term_color = get_field('color', $term);
    $term_name = $term->name;
    $term_link = get_category_link($term);
  }
?>
<section class="post hero" style="background-color:<?php echo $term_color; ?>">
  <div class="container">
    <div class="post-hero-content">
      <h1><?php the_title() ?></h1>
      <p><a href="<?php echo $term_link; ?>" alt="View all posts for <?php echo $term_name; ?>"><?php echo $term_name; ?></a></p>
    </div>
  </div>
</section>
<section class="page-body">
  <div class="container">
    <div class="post-featured-image" style="background-image:url('<?php echo $thumbnail_src; ?>')"></div>
    <div class="post-byline col-xs-12">
      <p class="read-time">Read Time: <?php the_field('read_time'); ?> Minutes</p>
      <div class="share"><?php echo do_shortcode("[mashshare]"); ?></div>
    </div>
    <div class="col-xs-12">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
     

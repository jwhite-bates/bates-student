<?php include('header.php');?>
<?php
  $term_name = single_cat_title('', false);
  $term_id = get_cat_ID($term_name);
  $term_color = get_field('color', 'category_' . $term_id);
 ?>
<section class="post hero" style="background-color:<?php echo $term_color; ?>">
  <div class="container">
    <div class="post-hero-content">
      <h1>Archives</h1>
    </div>
  </div>
</section>
<section id="posts-section">
  <div class="container">
    <h1><?php single_cat_title('', true) ?></h1>
    <?php if(have_posts()):while(have_posts()):the_post();
    $thumbnail_src = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    ?>
      <div class="col-xs-12 col-sm-6">
        <div class="post">
          <div class="post-image" style="background-image:url('<?php echo $thumbnail_src; ?>" alt="<?php the_title(); ?>"></div>
          <div class="post-content">
            <div class="post-header">
              <div class="post-read-time">
                <p>Read Time: <?php the_field('read_time'); ?> Minutes</p>
              </div>
            </div>
            <div class="post-title">
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="post-excerpt">
              <?php the_excerpt(); ?>
            </div>
            <div class="post-link">
              <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">View Full Article</a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; endif;?>
  </div>
</section>

<?php include('footer.php');?>

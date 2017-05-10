<?php get_header();?>

<section id="homePageHero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/lib/images/board.jpg');">
  <div id="welcomeMessage">
    <div class="welcomeContainer">
      <h1 class="bates-yellow-color">Welcome to<br />MyBates</h1>
    </div>
  </div>
  <div class="homePageInfo bates-yellow-color">
    <h2>Mastering the Board</h2>
    <p>
      Broadcasting and Digital Media Students
    </p>
  </div>
</section>
<section id="contactBar" class="bates-dark-blue-background">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <p>Questions? <i class="fa fa-phone fa-flip-horizontal"></i> 253.680.7000 <i class="fa fa-envelope"></i></p>
      </div>
      <div class="col-sm-12 col-md-5">
        <ul class="nav nav-fill">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-calendar"></i> Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-book"></i> A-Z Directory</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-12 col-md-2">
        <ul class="nav nav-fill">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-youtube-play"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="student-links">
  <!-- <div class="img-hover-mod clearfix"> -->
  <div class="row">
    <div class="col-sm-6 col-lg-3 link-button"> <!-- Change columns based on design need -->
      <div class="link-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/lib/images/board.jpg')"></div>
        <div class="content">
          <i class="fa fa-user fa-4x" aria-hidden="true"></i>
          <h3>Quick Links</h3>
          <button class="list-button">View Links</button>
        </div>
    </div> <!-- Ends bootstrap columns -->
    <div class="col-sm-6 col-lg-3 link-button"> <!-- Change columns based on design need -->
      <div class="link-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/lib/images/board.jpg')"></div>
        <div class="content">
          <i class="fa fa-user fa-4x" aria-hidden="true"></i>
          <h3>My Info</h3>
          <button class="list-button">View Links</button>
        </div>
    </div> <!-- Ends bootstrap columns -->
    <div class="col-sm-6 col-lg-3 link-button"> <!-- Change columns based on design need -->
      <div class="link-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/lib/images/board.jpg')"></div>
        <div class="content">
          <i class="fa fa-user fa-4x" aria-hidden="true"></i>
          <h3>My Documents</h3>
          <button class="list-button">View Links</button>
        </div>
    </div> <!-- Ends bootstrap columns -->
    <div class="col-sm-6 col-lg-3 link-button"> <!-- Change columns based on design need -->
      <div class="link-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/lib/images/board.jpg')"></div>
        <div class="content">
          <i class="fa fa-user fa-4x" aria-hidden="true"></i>
          <h3>My Classes</h3>
          <button class="list-button">View Links</button>
        </div>
    </div> <!-- Ends bootstrap columns -->
    <div class="col-sm-6 col-lg-3 link-button"> <!-- Change columns based on design need -->
      <div class="link-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/lib/images/board.jpg')"></div>
        <div class="content">
          <i class="fa fa-user fa-4x" aria-hidden="true"></i>
          <h3>Bates Forms</h3>
          <button class="list-button">View Links</button>
        </div>
    </div> <!-- Ends bootstrap columns -->
    <div class="col-sm-6 col-lg-3 link-button"> <!-- Change columns based on design need -->
      <div class="link-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/lib/images/board.jpg')"></div>
        <div class="content">
          <i class="fa fa-user fa-4x" aria-hidden="true"></i>
          <h3>Offices</h3>
          <button class="list-button">View Links</button>
        </div>
    </div> <!-- Ends bootstrap columns -->
    <div class="col-sm-6 col-lg-3 link-button"> <!-- Change columns based on design need -->
      <div class="link-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/lib/images/board.jpg')"></div>
        <div class="content">
          <i class="fa fa-user fa-4x" aria-hidden="true"></i>
          <h3>Policies</h3>
          <button class="list-button">View Links</button>
        </div>
    </div> <!-- Ends bootstrap columns -->
    <div class="col-sm-6 col-lg-3 link-button"> <!-- Change columns based on design need -->
      <div class="link-background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/lib/images/board.jpg')"></div>
        <div class="content">
          <i class="fa fa-user fa-4x" aria-hidden="true"></i>
          <h3>Resources</h3>
          <button class="list-button">View Links</button>
        </div>
    </div> <!-- Ends bootstrap columns -->
  </div> <!-- Ends row -->
<!-- </div> Ends img hover mod -->
</section>
<!-- <div id="widget-test" class="col-md-6">
  <?php if ( is_active_sidebar( 'quick_link_menu' ) ) : ?>
  	<ul id="sidebar">
  		<?php dynamic_sidebar( 'quick_link_menu' ); ?>
  	</ul>
  <?php endif; ?>
</div>
<div id="widget-test" class="col-md-6">
  <?php if ( is_active_sidebar( 'left_menu' ) ) : ?>
  	<ul id="sidebar">
  		<?php dynamic_sidebar( 'left_menu' ); ?>
  	</ul>
  <?php endif; ?>
</div> -->



<?php get_footer();?>

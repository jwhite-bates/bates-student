<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]>
      <link href="lib/css/bootstrap-ie8.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3,respond@1.4.2"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <title>
      <?php wp_title('|', true, 'right'); ?>
      <?php bloginfo('name');?>
    </title>
  </head>
  <body class="front-page">
    <!--[if IE]>
      <div class="ie">
    <![endif]-->
    <nav class="main-nav navbar navbar-fixed navbar-toggleable-sm navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">MyBates</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="#">BatesTech</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Campuses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Programs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Student Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ASG</a>
            </li>
            <form id="portal-search">
            	<input type="search" placeholder="Search">
            </form>
          </ul>
        </div>
    </nav>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo get_the_title();?> - Adult Hockey Association</title>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&amp;display=swap" media="screen" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/aha2019.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/ahacms.css" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <a class="hamburger">
              <span class="top"></span>
              <span class="mid"></span>
              <span class="bot"></span>
            </a>
          </button>
      <a href="https://www.ahahockey.com/" class="navbar-brand">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/aha_logo.svg" alt="Adult Hockey Association" class="aha">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/parkinglot.png" alt="Parking Lot Newsletter" class="parkinglot">
      </a>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">    
    <li class="nav-item">
      <a class="nav-link" href="https://www.ahahockey.com/programs" id="navPrograms" >HOCKEY PROGRAMS</a>
    </li>
    <li class="nav-item ">
      <a href="https://www.ahahockey.com/about" class="nav-link">ABOUT AHA</a>
    </li>
   
  </ul>
</div>
<div class="search search-desktop d-sm-none d-md-none d-lg-block">
  <div class="inner">
    <a href="https://www.ahahockey.com"><span>Return to AHA League Site</span></a>
  </div>
</div>
        </nav>
      </div>
    </header>
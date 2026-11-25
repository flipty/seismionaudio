<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo get_the_title();?> - Seismion Audio</title>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/seismion.css" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="container">
    <div class="header-container">
      <div class="branding">
        <img src="/wp-content/themes/seismion/images/logo.png" alt="Seismion Audio" class="logo">
      </div>
      <div class="navigation">
      <?php wp_nav_menu( array(
        'menu' => 'Header Menu',
        'menu_class' => 'header-nav',
        'container' => 'nav'
        )); ?>
      </div>
    </div>
  </div>
</header>
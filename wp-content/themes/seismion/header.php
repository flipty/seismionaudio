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
    <div class="header-container">
      <div class="branding">
        <a href="/">
          <img src="/wp-content/themes/seismion/images/logo-dark.png" alt="Seismion Audio" class="logo">
        </a>
      </div>
      <div class="navigation">
      <?php wp_nav_menu( array(
        'menu' => 'Header Menu',
        'menu_class' => 'header-nav',
        'container' => 'nav'
        )); ?>
      </div>
    </div>
</header>
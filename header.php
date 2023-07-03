<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="header" class="container-fluid">
    <div class="overlay"></div>
    <div class="row">
      <div class="col-12">
        <div class="hamburger"></div>
      </div>
    </div>
    <div class="row header-row">
      <div class="logo-area col col-xl-3">
        <?php the_custom_logo(); ?>
      </div>
      <div class="menu-area col col-xl-6">
        <?php wp_nav_menu( 
            array(
                  'theme_location' => 'primary_menu'
                ) 
            ); ?>
      </div>
      <div class="info-area col col-xl-3">
        <p class="info-area--text">Call us or you will never see our ship again</p>
        <a href="tel:+88005553535" class="info-area--phone">8(800) 55 5 3535</a>
      </div>
    </div>
  </header>
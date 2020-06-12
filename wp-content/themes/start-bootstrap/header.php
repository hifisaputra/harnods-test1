<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php bloginfo('name'); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('template_url'); ?>/assets/css/clean-blog.min.css" rel="stylesheet">

  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

  <?php wp_head(); ?>
</head>


<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <?php
            if ( has_nav_menu( 'primary' ) ) {

                wp_nav_menu(
                    array(
                        'container'  => '',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'primary',
                        'menu_class' => 'nav-link'
                    )
                );
            }
            ?>
        </ul>
      </div>
    </div>
  </nav>

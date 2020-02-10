<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
 
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  
  <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>

  <!-- Header Start here  -->
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light">
      <div class="container">
          <a class="navbar-brand" href="<?php echo get_home_url();?>">
            <img alt="image" src=" <?php echo get_template_directory_uri(); ?>/assets/img/brand/chrmp_original.png">
          </a>
      </div>
    </nav>
  </header>
  <!-- End header here  -->
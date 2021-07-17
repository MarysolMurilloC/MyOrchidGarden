<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>

  <div class="container-fluid ps-0 pe-0">

    <header>
      <nav class="navbar navbar-expand-lg  bg-black">
        <div class="container-fluid row ms-2 me-1 ">

        <div class="col">
        <a class="navbar-brand" href="#"><img class="logo" src="<?php echo get_template_directory_uri()."/img/mog.png"; ?>" alt="MOG"></a>
        </div>


        <div class="col-lg-8 col-md-3">

        <button class="navbar-toggler btn-ham" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" 
          aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation"><!--barrita desplegable dispositivo movil-->
          <span class="navbar-toggler-icon"></span>
          </button>


          <?php
          wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 10,
            'container'         => '',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'navbar-nav mr-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
          ));
          ?>


        </div>


  
        </div>
      </nav>
    
    </header>
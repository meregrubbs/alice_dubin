<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Alice Dubin, Journalist, Content Marketing, Writer">

    <!-- favicon --> 
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url');?>/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url');?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url');?>/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url');?>/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- thumbnail image --> 
    <meta property="og:title" content="<?php the_title(); ?> | <?php bloginfo('name') ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:url" content="https://www.alicedubin.com" />
    <meta property="og:image" content="<?php bloginfo('template_url');?>/screenshot.png" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178647962-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-178647962-1');
    </script>



    <title>
    <?php the_title(); ?> | <?php bloginfo('name') ?>
    </title>

    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <nav
        class="navbar fixed-top navbar-light navbar-expand-md bg-faded justify-content-center"
      >
        <div class="container">
          <a href="/" class="navbar-brand d-flex w-50 mr-auto"
            ><img
              src="https://alicedubin.com/wp-content/uploads/2020/09/alice_dubin_logo_black.svg"
              width="100"
              height="100"
              alt=""
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#collapsingNavbar3"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          

          <?php 
          wp_nav_menu( array(
            'theme_location'  => 'top-menu',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'navbar-collapse collapse w-100',
            'container_id'    => 'collapsingNavbar3',
            'menu_class'      => 'nav navbar-nav ml-auto w-100 justify-content-end',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );?>
          
        </div>
        <!-- container -->
      </nav>
    </header>
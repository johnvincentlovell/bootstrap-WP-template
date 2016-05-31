<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_directory');?>/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory');?>/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory');?>/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="a<?php bloginfo('template_directory');?>/img/favicon/pple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('template_directory');?>/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_directory');?>/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('template_directory');?>/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_directory');?>/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory');?>/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory');?>/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory');?>/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory');?>/img/favicon/mstile-310x310.png" />

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
    </title>
    
    <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->


    <?php wp_head(); ?>


  </head>

  <body <?php body_class(); ?> ontouchstart="" onmouseover="">

<section id="topnav">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <a href="<?php bloginfo('url'); ?>/"><img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/bonzilogo-white.png"></a>
        <a href="<?php bloginfo('url'); ?>/"><img class="logoB" src="<?php bloginfo( 'template_directory' ); ?>/img/logoB.png"></a>
        <a rel="m_PageScroll2id" href="#topnav" class="uparrow-out"><i class="glyphicon glyphicon-menu-up"></i></a>
        <div class="contact">
          <h1><a href="tel://800.216.3321"><i class="fa fa-phone"></i>800.216.3321</a></h1>
          <h1><a href="mailto:info@gobonzi.com"><i class="fa fa-envelope-o"></i></a></h1>
          <!-- <a href="mailto:info@gobonzi.com" class="email"></a>  -->
        </div>       
   

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>


         <div class="navbar-collapse collapse">

   <?php
            wp_nav_menu( array(
                'menu'              => 'header-menu',
                'theme_location'    => 'header-menu',
                'depth'             => 2,
                'container'         => 'false',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

        </div><!--/.navbar-collapse -->

    </div>
    </div>
</section>    
<!--         <div class="contact-sm">
          <h1><a href="tel://877.353.6084">877.353.6084</a></h1>
          <a href="mailto:info@gobonzi.com" class="email"></a> 
          <a href="#" class="chat"></a> 
        </div>     -->





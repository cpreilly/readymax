<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?> 
    <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-47118426-1', 'readymax.com');
 ga('send', 'pageview');

</script>	
  </head>

  <body <?php body_class($class); ?>>
    <!-- BANNER STARTS HERE -->
    <div class="full-width brand-green-bg" id="header"> 

      <!-- SEARCH BAR -->
      <div class="row">
        <div class="medium-4 columns right">
          <form action="<?php bloginfo('url'); ?>/" method="get" id="banner-search">
            <input type="text" id="search-field" value="SEARCH">
            <input type="image" alt="Search" id="search-icon" src="<?php bloginfo('template_url'); ?>/img/search-icon.png" alt=""/>
          </form>
        </div>
      </div>
      <!-- END SEARCH BAR -->

      <div class="row logo-and-navbar">

        <!-- MAIN LOGO -->
        <a href="<?php bloginfo('url'); ?>">
          <div class="main-logo-header medium-5 columns left brand-white" id="logo">
            <img src="<?php bloginfo('template_url'); ?>/img/readymax-logo.png">
          </div>
        </a>
        <!-- END MAIN LOGO -->

        <!-- NAVBAR -->
        <div class="medium-7 columns left" id="nav-container">
            <?php
              $defaults = array(
                'theme_location'  => 'main_menu',
                'menu'            => 'main_menu',
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'navlist-header',
                'menu_id'         => 'main-nav',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="navlist-header">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
              );
              wp_nav_menu( $defaults );
            ?>
        </div>
        <!-- END NAVBAR -->

      </div>
    </div>
    <div class="tools-dropdown brand-green-bg">
      <ul class="sub-navlist">
        <li><a href="products.html">PRODUCTS</a></li>
        <li><a>FEATURES</a></li>
        <li><a>DEALERS & OEM</a></li>
      </ul>
    </div> 
    <!-- BANNER ENDS HERE -->
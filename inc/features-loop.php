<div class="full-width brand-white features-background" id="products-wrapper">
  <div class="row">
    <div class="medium-4 columns left brand-green">
    <?php dynamic_sidebar( 'tools-sidebar' ); ?>
    </div>
    <div class="products-content features content-links-formatter">
      <div class="row">
        <div class="medium-8 columns right features-content">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h3 class="dealers-title"><strong><?php the_title(); ?></strong></h3>
            <ul class="features-list brand-black">
              <li>Battery Replacement &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a class="fancybox brand-green" rel="group" href="<?php bloginfo('template_url'); ?>/img/directions_fancy.png">
                  View Now <img src="<?php bloginfo('template_url'); ?>/img/view_now_btn.png" alt="">
                </a>
              </li>
              <!-- <a class="fancybox" rel="group" href="big_image_1.jpg"><img src="small_image_1.jpg" alt="" /></a> -->
              <li>Light Module Brightness Rating Show  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <a class="fancybox brand-green" rel="group" href="<?php bloginfo('template_url'); ?>/img/light_info_fancy.png">
                  View Now <img src="<?php bloginfo('template_url'); ?>/img/view_now_btn.png" alt="">
                </a>
              </li>
            </ul>
          <?php the_content(); ?>
          <?php endwhile; else: endif;  ?>
        </div>
      </div>
    </div>
  </div>
</div>
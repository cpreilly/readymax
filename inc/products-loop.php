<div class="full-width brand-white" id="products-wrapper">
  <div class="row">
    <div class="medium-4 columns left brand-green">
      <?php dynamic_sidebar( 'tools-sidebar' ); ?>
    </div>  
    <div class="medium-8 columns left">
      <div class="products-content all-products content-links-formatter">
        <div class="row">
          <ul class="products-list">
            <?php query_posts(array('post_type' => 'products', 'showposts' => 9999)); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="single-product medium-4 columns left"> <a href="<?php the_permalink(); ?>"><img src="<?php echo the_field('featured_product_image'); ?>"></a>
              <div class="product-name-for-image brand-white">
                <?php strtoupper(the_title()); ?>
              </div>
              <div class="view-button-wrapper"> <a class="view" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/view_btn.png" alt=""></a> </div>
            </li>
            <?php endwhile; else: endif; wp_reset_query(); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

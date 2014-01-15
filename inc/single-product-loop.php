<div class="full-width brand-white" id="products-wrapper">
  <div class="row">
    <div class="medium-4 columns left brand-green">
      <?php dynamic_sidebar( 'tools-sidebar' ); ?>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="products-content product-single <?php echo( get_the_id() ); ?>">
      <div class="row">
        <div class="medium-2 columns left no-padding no-margin"> 
          <!-- PRODUCT SLIDER -->
          <div class="products-flex">
            <ul class="slides">
              <?php 
              if(get_field('product_gallery')) {
              while(has_sub_field('product_gallery')) { 
                $productImage = get_sub_field('product_image');
            ?>
              <li data-thumb="<?php echo $productImage; ?>">
                <!-- <div class="zoom" data-image="<#?php echo $productImage; ?>">  -->
                  <img src="<?php echo $productImage; ?>" alt="" />
 <!--                  <div id="preview-zoom"></div>
                </div>
                <div id="container-zoom">
                  <div id="window-zoom" style="display:none;"></div>
                </div> -->
              </li>
              <?php }} ?>
            </ul>
          </div>
          <!-- END PRODUCT SLIDER --> 
        </div>

        <div class="medium-5 columns right brand-green">
          <div class="product-specs content-links-formatter"> <a class="back-to-products" href="/tools">< Back to Products</a><br />
            <img src="<?php bloginfo('template_url'); ?>/img/rm_logo.png" alt=""><br>
            <span class="product-name">
            <?php the_title(); ?>
            </span>
            <p class="brand-black">
              <?php if(get_field('sizes')) { ?>
              <strong>Sizes:</strong>
              <?php the_field('sizes'); ?>
              <br>
              <?php } if(get_field('metal')) { ?>
              <strong>Metal:</strong>
              <?php the_field('metal'); ?>
              <br>
              <?php } if(get_field('total_hardness')) { ?>
              <strong>Total Hardness:</strong>
              <?php the_field('total_hardness'); ?>
              <br>
              <?php } if(get_field('cutting_edge_hardness')) { ?>
              <strong>Cuttng Edge  Hardness:</strong>
              <?php the_field('cutting_edge_hardness'); ?>
              <br>
              <?php } if(get_field('finish_options')) { ?>
              <strong>Finish Options:</strong>
              <?php the_field('finish_options'); ?>
              <br>
              <?php } if(get_field('mm_hub')) { ?>
              <strong>MM Hub:</strong>
              <?php the_field('mm_hub'); ?>
              <?php } ?>
              <br>
              <br>
              <?php the_field('description'); ?>
            </p>
            <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script> 
            <script type="text/javascript">stLight.options({publisher: "22ddb9b7-092f-4320-b3d1-c3ea0cba455c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> 
            <span class='st_facebook_hcount' displayText='Facebook'></span> <span class='st_twitter_hcount' displayText='Tweet'></span> <span class='st_googleplus_hcount' displayText='Google +'></span> <span class='st_linkedin_hcount' displayText='LinkedIn'></span></div>
            <?php if(get_field('youtube_url')) { 
				$vidUrl = get_field('youtube_url');
			?>
            <div class="product-youtube">
                <?php echo do_shortcode('[su_youtube_advanced url="' . $vidUrl . '" rel="no"]'); ?>
            </div>
            <?php } ?>
        </div>
      </div>
    </div>
    <?php endwhile; else: endif; wp_reset_query(); ?>
  </div>
</div>

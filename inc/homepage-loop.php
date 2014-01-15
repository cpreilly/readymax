<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- FLEXSLIDER -->
<div class="full-width brand-white-bg flexslider-wrapper">
  <div class="flexslider"> 
  	<?php if(get_field('homepage_slider')): ?>
    <ul class="slides">
    <?php while(has_sub_field('homepage_slider')): 
		$slideImg = get_sub_field('image');
		$slideUrl = get_sub_field('url');
	?>
      <li>
        <div class="fix-to-bottom"><a href="<?php echo $slideUrl; ?>"><img class="center" src="<?php echo $slideImg; ?>"  alt=""/></a></div>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
  </div>
</div>
 <!-- END FLEXSLIDER -->

<!-- FEATURED PRODUCTS -->
<div class="full-width brand-white" id="featured-products-wrapper">
  <div class="row featured">
    <div class="medium-12 columns right text-center">
      <div class="featured-products">
      <?php if(get_field('call_to_action_left')): 
	   while(has_sub_field('call_to_action_left')): 
	  	$ctaImgLeft = get_sub_field('cta_image_left');
		$ctaLeftUrl = get_sub_field('cta_url_left');
	  ?>
      <a href="<?php echo $ctaLeftUrl; ?>"><img class="flex-img" src="<?php echo $ctaImgLeft; ?>" alt=""></a>
      <?php endwhile; endif ?>
      
      </div>
      <div class="featured-products">
      <?php if(get_field('call_to_action_center')): 
	   while(has_sub_field('call_to_action_center')): 
	  	$ctaImgCenter = get_sub_field('cta_image_center');
		$ctaCenterUrl = get_sub_field('cta_center_url');
	  ?>
      <a href="<?php echo $ctaCenterUrl; ?>"><img class="flex-img" src="<?php echo $ctaImgCenter; ?>" alt=""></a>
      <?php endwhile; endif ?>
      </div>
      <div class="featured-products">
       <?php if(get_field('call_to_action_right')): 
	   while(has_sub_field('call_to_action_right')): 
	  	$ctaImgRight = get_sub_field('cta_image_right');
		$ctaRightUrl = get_sub_field('cta_url_right');
	  ?>
      <a href="<?php echo $ctaRightUrl; ?>"><img class="flex-img" src="<?php echo $ctaImgRight; ?>" alt=""></a>
      <?php endwhile; endif ?>
      </div>
    </div>
  </div>
</div>
<!-- END FEATURED PRODUCTS -->

<!-- BLURB -->
<div class="full-width brand-white blurb-wrapper">
  <div class="row">
    <div class="medium-12 columns home">
  		<?php the_field('content_area'); ?>
    </div>
  </div>
</div>
<?php endwhile; else: endif; ?>
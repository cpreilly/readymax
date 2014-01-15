<div class="full-width brand-white"id="contact-wrapper">
  <div class="row">
 	<div class="large-12 columns">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h3 class="dealers-title"><strong><?php the_title(); ?></strong></h3>
        <?php the_content(); ?>
        <?php endwhile; else: endif; ?>
    </div>
  </div>
</div>

<div class="contact-fade">
  <div class="bottom-image">
    <img src="<?php bloginfo('template_url'); ?>/img/contact_bg_photo.png">
  </div>
</div>
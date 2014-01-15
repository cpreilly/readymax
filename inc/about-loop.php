<div class="full-width brand-white"id="about-wrapper">
  <div class="row">
    <div class="medium-12 columns about-content brand-black">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <h3 class="about-title"><?php the_title(); ?></h3>
        <p class="blurb">
          <?php the_content(); ?>
        </p>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<div class="contact-fade">
  <div class="bottom-image">
    <img src="<?php bloginfo('template_url'); ?>/img/contact_bg_photo.png">
  </div>
</div>
<div class="full-width brand-white dealers-background" id="products-wrapper">
  <div class="row">
    <div class="medium-4 columns left brand-green">
      <?php dynamic_sidebar( 'tools-sidebar' ); ?>
    </div>
    <div class="products-content dealers brand-black content-links-formatter">
      <div class="row">
        <div class="medium-8 columns left dealers-content">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h3 class="dealers-title"><strong><?php the_title(); ?></strong></h3>
          <?php the_content(); ?>
          <?php endwhile; else: endif;  ?>
        </div>
      </div>
    </div>
  </div>
</div>

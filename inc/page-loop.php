<!-- BEGIN SINGLE POST TEMPLATE -->
<div class="full-width secondary-template-wrapper">
  <div class="row">  
    <!-- BEGIN PAGE CONTAINER -->
    <div class="medium-12 columns">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <!-- PAGE -->
    <div class="single-post full-image full-width">
      <div class="post-content">
        <h1>
          <?php the_title(); ?>
        </h1>
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; else: endif; ?>
    <!-- END PAGE --> 
  </div>
  <!-- END PAGE CONTAINER -->
</div>
 <div class="push"></div>
</div>
<!-- END SINGLE POST TEMPLATE --> 
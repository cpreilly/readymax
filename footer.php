    <!-- FOOTER -->
    <div class="full-width brand-green-bg" id="footer">
      <div class="row">

        
        <div class="medium-7 columns left" id="footer-nav-container">
          <!-- NAVBAR -->
            <?php
              $defaults = array(
                'theme_location'  => 'main_menu',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'navlist-footer',
                'menu_id'         => 'main-nav',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="navlist-footer">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
              );
              wp_nav_menu( $defaults );
            ?>          
          <div class="copyright brand-white">
            © ReadyMax Tool, Inc 2014 All Rights Reserved.
          </div>

        </div>
        
        <div class="medium-5 columns brand-white">
          <div class="logo">
            <a href="index.html">
              <img src="<?php bloginfo('template_url'); ?>/img/readymax-logo.png">
            </a>
          </div>
          <div class="brand-logos">
            <div class="plugs">
              <a href="http://www.plugssafety.com" title=" Visit Plugs Safety website" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/plugs_logo.png"></a>
            </div>
            <div class="light-tools">
              <a href="http://www.lighttoolsusa.com" title=" Visit Light Tools Website" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/light_tools_logo.png"></a>
            </div>
          </div>
        </div>
        
      </div>

    </div>
    <!-- END FOOTER -->
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery.fn.cleardefault = function() {
	return this.focus(function() {
		if( this.value == this.defaultValue ) {
			this.value = "";
		}
	}).blur(function() {
		if( !this.value.length ) {
			this.value = this.defaultValue;
		}
	});
};
jQuery("input, textarea").cleardefault();
});
</script>
   <?php wp_footer(); ?>
  </body>
</html>
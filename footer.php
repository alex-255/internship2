  <section class="footer container-fluid" style="background-image:url(<?php echo get_template_directory_uri(  ) . "/assets/images/cruise.png"; ?>);">
      <div class="row">
          <div class="menu col-12 col-xl-6">
              <?php wp_nav_menu( 
            array(
                    'theme_location' => 'footer_menu_1'
                ) 
            ); 
        ?>
          </div>
          <div class="menu col-12 col-xl-6">
              <?php wp_nav_menu( 
                array(
                        'theme_location' => 'footer_menu_2'
                    ) 
                ); 
            ?>
          </div>
      </div>
      <div class="icons row">
          <div class="col-12">
              <?php 
            wp_nav_menu( 
                array(
                    'theme_location' => 'footer_social_icons'
                ) 
            ); 
            ?>
          </div>
      </div>
      <div class="row">
          <div class="col-12">
              <small class="footer--small">Copyright © 1995 - 2019 Some Company Name. All Rights Reserved.</small>
          </div>
      </div>
  </section>

  <?php wp_footer(); ?>
  </body>

  </html>
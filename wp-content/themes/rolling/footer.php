<?php
/**
 * The template for displaying the footer.
 *
 * @since   1.0.0
 * @package Rolling
 */
?>	
<div class="clearfix"></div>		
    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
		    	<div class="col-md-8 text-left">
		       		

              <?php
                      if ( has_nav_menu( 'primary_menus' ) ) {  
                        wp_nav_menu(
                          array(
                            'theme_location' => 'primary_menus',
                            'menu_class'     => 'nav navbar-nav navbar-right smoth-scroll',
                            'menu_id'        => 'mainMenu',
                            'container'      => false,
                            'fallback_cb'    => NULL
                          )
                        );
                      } else {
                        echo '<ul class="footer-menu smoth-scroll nav navbar-nav navbar-right"><li class="smoth-scroll"><a target="_blank" href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . esc_html__( 'Create Primary Menu', 'rolling' ) . '</a></li></ul>';
                      }
                    ?>
          		</div>
             	<div class="col-md-4 uipasta-credit text-right">
             		<p><?php esc_html_e('Design By ','rolling'); ?><a href="#" target="_blank" title="UiPasta"><?php esc_html_e('Front End Team' ,'rolling' ); ?></a></p>
                </div>
             </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->
</body>
</html>
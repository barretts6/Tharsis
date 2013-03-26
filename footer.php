<div class="footer">
        <p>&copy; <?php echo the_time("Y");?> <?php bloginfo('name');?> <?php _e('All Rights Reserved', 'Tharsis');?>, 
            <?php _e('designed by', 'Tharsis');?> <a href="http://teothemes.com">TeoThemes</a>, 
            <?php _e('powered by', 'Tharsis');?> <a href="http://wordpress.org">Wordpress</a>
        </p>
    </div>
<!-- JS
    ================================================== -->
  
  <!-- fancybox -->
  <script type="text/javascript">
    jQuery(document).ready(function() {

    jQuery("header").sticky({topSpacing:0});

    /* This is basic - uses default settings */
  
    jQuery("a.single_image").fancybox();
  
    /* Using custom settings */
  
    jQuery("a#inline").fancybox({
      'hideOnContentClick': true
    });

    /* Apply fancybox to multiple items */
  
    jQuery("a.group").fancybox({
      'transitionIn'  : 'elastic',
      'transitionOut' : 'elastic',
      'speedIn'   : 600, 
      'speedOut'    : 200, 
      'overlayShow' : false
    });

    jQuery('.proj-img').hover(function() {
        jQuery(this).find('i').stop().animate({
          opacity: 0.8
        }, 'fast');
        jQuery(this).find('a').stop().animate({
          "top": "0"
        });
      }, function() {
        jQuery(this).find('i').stop().animate({
          opacity: 0
        }, 'fast');
        jQuery(this).find('a').stop().animate({
          "top": "-600px"
        });
    });

    });
    
  </script>
    
    
<!-- End Document
================================================== -->

<?php global $tharsis;
if(isset($tharsis['integration_footer'])) echo $tharsis['integration_footer'] . PHP_EOL; ?>

 <?php wp_footer(); ?>
 
</body>
</html>
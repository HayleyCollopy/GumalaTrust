<?php
    /*
    Template Name: FOOTER
    */
    ?>

<!--      FOOTER STARTS-->
      <footer class="container-fluid">
          <div class="footer-content">
              <div class="text-center icons">
                  
                  
            
                  
                  <!--              SOCIAL MEDIA ICONS GO HERE-->
              <a class="icons text-center icons"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_icon_one') ) : 
endif; ?></a>           
              </div>
              
              
              <div class="row footerbox">
                  
              <div class="footerbox col-xs-6 text-center">
              <p><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contact_us') ) : 
endif; ?>
</p>
                  </div>
                <div class="footerbox col-xs-6 text-center">
                    <a class="footertext footerbox">
                        <p><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('policies_pg') ) : 
endif; ?>
</p></a>
                  </div>
              </div>
              
              </div>
          
          
           <div class="row text-center">
               
                <div class="col-md-6img footerlogo">
                  <a><img class="footerlogo" src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/gumala-logo-icon.png"></a>
                  </div>
               
          <p class="copyrighttext"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('copyright_text') ) : 
endif; ?>
</p>
          </div>
          
      </footer>
<!--      FOOTER ENDS-->
<?php wp_footer(); ?>
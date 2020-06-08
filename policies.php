<?php
/*
Template Name: POLICIES Page
*/
?>


<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>

<!--       WELCOME CONTAINER START-->
      <section class="container-fluid aboutbg text-center notfooter">
    <div class="privacy-policy">
              
              <div class="beneficiary"><h2><?php the_field('titleforpolicies'); ?></h2>
                  
                         <p class="sub-title-beneficiary"><?php the_field('subtitleforpolicies'); ?></p> 
                         
                   <p class="beneficiary-text"><?php the_field('privacypolicytext'); ?></p>                
 
        </div>  </div>
                    
      </section>
          
          
      <!--       WELCOME CONTAINER END-->
      
      
        
 <section class="container-fluid meetcarolbg notfooter">
          <div class="container">
              <div class="row">
                  <div class="trustlogo"><img src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/gumala-logo-icon.png"></div>
                  
                  <div class="col-md-6 beneficiary-container">
                      
                        <p class="application-process"><?php the_field('whistleblowing'); ?></p>
                      
                        <p class="members-info"><?php the_field('whistleblowinginfo'); ?></p>
                      
          
            </div>
                  
                  <div class="col-md-6 img-responsive-two">
                      
                      <img class="img-responsive" alt=“landscape-image” src="<?php the_field('whistleblowingimage'); ?>">
                      
                  </div>
                  
              </div>
          </div>
      </section>
      
      <section class="container-fluid meetdavidbg notfooter">
          <div class="container">
              <div class="row">
                  
                  <div class="col-md-6 meet-responsive">
                      
                      <img class="img-responsive" alt=“landscape-image” src="<?php the_field('groupmeetingsimage'); ?>">
                      
                  </div>
                  
                  <div class="col-md-6 groupmeetingsinfo">
                      
                       <p class="application-reviewing"><?php the_field('groupmeetingstitle'); ?></p>
                      
                      <p class="beneficiary-text"><?php the_field('groupmeetingstext'); ?></p>
          
          
                  </div>      
              </div>
          </div>
      </section>
<?php get_footer(); ?>
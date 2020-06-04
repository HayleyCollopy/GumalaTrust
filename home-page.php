<?php
/*
Template Name: Home page gumala
*/
?>


<?php get_header(); /* Tells WordPress to include header.php */ ?>
      
     <!--       WELCOME CONTAINER START-->
      <section class="container-fluid aboutbg text-center notfooter">
          
          <div class="container ">    

<!--      PLACE HOLDER FOR WELCOME-->
              <h2><?php the_field('titleforwelcome'); ?></h2><!--  custom field for the aboutme content-->
              <p class="welcome-text"><?php the_field('thanarru'); ?></p>
              <p class="welcome-text"><?php the_field('paragraphforwelcome'); ?></p>
              <p class="welcome-text"><?php the_field('secondparagraphforwelcome'); ?></p>
              
<!--              BUTTON-->
              <a class="btn btn-primary" href="<?php the_field('becomebeneficiary'); ?>">BECOME A BENEFICIARY</a>
              
              
        </div>
                    
      </section>
      <!--       WELCOME CONTAINER END-->
      
      <section class="container-fluid meetcarolbg notfooter">
          <div class="container">
              <div class="row">
                  <div class="trustlogo"><img src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/gumala-logo-icon.png"></div>
                  
                  <div class="col-md-6 meet-responsive">
<!--      PLACE HOLDER FOR POST-->                

          <h4 class="carol"><?php the_field('titleformeetcarol'); ?></h4>
          <p class="carolp"><?php the_field('paragraphformeetcarol'); ?> </p>
          <a href="<?php the_field('seemorecarol'); ?>" class="seemore">Read more...</a>
                      
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
<!--      PLACE HOLDER FOR POST-->    
                      
                      <img class="img-responsive" alt=“meetcarol” src="<?php the_field('meetcarolimage'); ?>">
                      
                  </div>
                  
              </div>
          </div>
      </section>
      
      <section class="container-fluid meetdavidbg notfooter">
          <div class="container">
              <div class="row">
                  
                  <div class="col-md-6 meet-responsive">
<!--      PLACE HOLDER FOR POST-->   
                    <img class="img-responsive" alt=“meetdavid” src="<?php the_field('meetdavidimage'); ?>">
                      
                      
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
<!--      PLACE HOLDER FOR POST-->    
                <h4 class="david"><?php the_field('titleformeetdavid'); ?></h4>
          <p class="davidp"><?php the_field('paragraphformeetdavid'); ?> </p>
          <a href="<?php the_field('seemoredavid'); ?>" class="seemore">Read more...</a>
          
                  </div>      
              </div>
          </div>
      </section>

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
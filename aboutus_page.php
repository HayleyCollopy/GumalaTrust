<?php
/*
Template Name: About Us Gumala
*/
?>


<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 

<!--       ABOUT US CONTAINER START-->
      <section class="container-fluid aboutimagebg text-center notfooter">
          <div class="container ">
              <div class="welc"><h2><?php the_field('titleforaboutus'); ?></h2></div>
              
              <p class="welcome-text"><?php the_field('paragraphforaboutusone'); ?></p>

                  <p class="welcome-text"><?php the_field('paragraphforaboutustwo'); ?></p>

                      <p class="welcome-text"><?php the_field('paragraphforaboutusthree'); ?></p>
              <a class="seemore" href="<?php the_field('seemorefoundation'); ?>">About the Gumala Foundation...</a>
        </div>
                    
      </section>
      <!--       ABOUT US CONTAINER END-->
      
      <section class="container-fluid gumalatrustbg notfooter">
          <div class="container">
              <div class="row">
                  
                  <div class="col-md-6 meet-responsive">
                      <h4 class="carol"><?php the_field('titleforgumalatrust'); ?></h4>
                      <p class="carolp"><?php the_field('paragraphforgumalatrust'); ?></p>
                      <p class="carolp"><?php the_field('paragraphforgumalatrusttwo'); ?></p>
                      <a class="seemore" href="<?php the_field('seemore'); ?>">See more...</a>
          
          
                  </div>
                  
                  <div class="col-md-6img meet-responsive">
                  </div>
                  
              </div>
          </div>
      </section>
      
      <section class="container-fluid meetdavidbg notfooter">
          <div class="container">
              <div class="row">
                  
                  <div class="col-md-6 meet-responsive">    
                  <img class="img-responsive" alt="board-of-directors" src="<?php the_field('directorsimg'); ?>">
                      
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
                      <h4 class="david"><?php the_field('titleforboardofdirectors'); ?></h4>
                      <p class="davidp"><?php the_field('paragraphforboardofdirectors'); ?></p>
                          <p class="davidp"><?php the_field('paragraphforboardofdirectorstwo'); ?></p>
                      
                        
          
          
                  </div>
                  
                  <div class="text-center">
                  
                       <a class="btn btn-primary text-center" href="<?php the_field('seemoredirectors'); ?>">SEE BOARD OF DIRECTORS</a>
                      
              </div>
              </div>
          </div>
      </section> 

<div class="aboutusborder"></div>

      <section class="container-fluid text-center notfooter faq">
          <div class="container faq">
              <div class="david"><h4><?php the_field('titleforfaq'); ?></h4></div>
              
              <p class="davidp"><?php the_field('paragraphforfaq'); ?></p>

              <a class="btn btn-primary text-center" href="<?php the_field('seefaqs'); ?>">SEE FAQ'S</a>
        </div>
                    
      </section>

<?php get_footer(); ?>
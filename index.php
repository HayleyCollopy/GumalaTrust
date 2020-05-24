<?php get_header(); /* Tells WordPress to include header.php */ ?>
      
     <!--       WELCOME CONTAINER START-->
      <section class="container-fluid aboutbg text-center notfooter">
          
          <div class="container ">
                
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=5');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="welcome-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>    

      
<!--              BUTTON-->
              <button type="button" class="btn btn-primary">BECOME A BENEFICIARY</button>
        </div>
                    
      </section>
      <!--       WELCOME CONTAINER END-->
      
      <section class="container-fluid meetcarolbg notfooter">
          <div class="container">
              <div class="row">
                  <div class="trustlogo"><img src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/gumala-logo-icon.png"></div>
                  
                  <div class="col-md-6 meet-responsive">
                      <h4 class="carol">MEET CAROL</h4>
                      <p class="date">February 28, 2019</p>
                      <p class="carolp">In January, the Gumala Trust (GIPL) congradulated Gumala Beneficiary Carol Lee Tucker when she took ownership of her home in Tom Price. Carol took advantage of the opportunity offered by GIPL last year for beneficiaries to purchace Gulama investment houses. The GIPL board is keen to see more Beneficiaries obtain their homes.
                      </p>
                      <p class="seemore">See more...</p>
          
          
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
                      <img class="img-responsive" alt="carol" src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/carol-img.jpg">
                  </div>
                  
              </div>
          </div>
      </section>
      
      <section class="container-fluid meetdavidbg notfooter">
          <div class="container">
              <div class="row">
                  
                  <div class="col-md-6 meet-responsive">
                  <img class="img-responsive" alt="david" src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/david-img.jpg">
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
                      <h4 class="david">MEET DAVID</h4>
                      <p class="date">March 15, 2019</p>
                      <p class="davidp">The Gumala Trust (GIPL) would like to congratulate Gumala Beneficiary David Moses Martin who took ownership of his home in South Hedland this week. David took advantage of the opportunity offered by GIPL last year for Beneficiaries to purchase Gumala investment houses. The GIPL Board is keen to see more Beneficiaries obtain their own homes and will consider sales of its residential properties in Tom Price and South Hedland to Beneficiaries. David is pictured here with Gumala Trust Executive Officer John Raftis.
                      </p>
                      <p class="seemore">See more...</p>
          
          
                  </div>      
              </div>
          </div>
      </section>

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
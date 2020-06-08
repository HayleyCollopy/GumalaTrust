<?php
/*
Template Name: BENEFICIARIES Page
*/
?>


<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
      
     <!--       WELCOME CONTAINER START-->
      <section class="container-fluid aboutbg text-center notfooter">
           <div class="container">
              
                <div class="beneficiary"><h2><?php the_field('titleforbeneficiaries'); ?></h2>
    
               <p class="sub-title-beneficiary"><?php the_field('subtitleforbeneficiary'); ?></p>
              
              <p class="beneficiary-text"><?php the_field('beneficiarytextparaone'); ?></p>
            <p class="beneficiary-text"><?php the_field('beneficiarytextparatwo'); ?></p>
                    

            <ul class="beneficiary-text-list"><?php the_field('listlineone'); ?></ul> 
                    <ul class="beneficiary-text-list"><?php the_field('listlinetwo'); ?></ul> 
                    <ul class="beneficiary-text-list"><?php the_field('listlinethree'); ?></ul> 
                    <ul class="beneficiary-text-list"><?php the_field('listlinefour'); ?></ul> 
                    <ul class="beneficiary-text-list"><?php the_field('listlinefive'); ?></ul> 
                    <ul class="beneficiary-text-list"><?php the_field('listlinesix'); ?></ul> 
              
     <p class="beneficiary-text"><?php the_field('textparagraphone'); ?></p>
                    
    <p class="beneficiary-text"><?php the_field('textparagraphtwo'); ?></p>
       
              
<!--              BUTTON-->

                     <a class="btn btn-primary" href="<?php the_field('becomebeneficiarybutton'); ?>">BECOME A BENEFICIARY</a>
 
               </div></div>
                    
      </section>
          
          
      <!--       WELCOME CONTAINER END-->
      
 <section class="container-fluid meetcarolbg notfooter">
          <div class="container">
              <div class="row">
                  <div class="trustlogo"><img src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/gumala-logo-icon.png"></div>
                  
                  
                <div class="col-md-6 meet-responsive">
                    
                <p class="application-process"><?php the_field('applicationprocess'); ?></p>
                    
                     <p class="members-info"><?php the_field('membersinfo'); ?></p>
                    
            </div>
                  
                  <div class="col-md-6 meet-responsive">
                      
                       <img class="img-responsive" alt=new-member-image” src="<?php the_field('applicationimage'); ?>">
                      
                  </div>
                  
              </div>
          </div>
      </section>
      
      <section class="container-fluid meetdavidbg notfooter">
          <div class="container">
              <div class="row">
                  
                  
                  <div class="col-md-6 meet-responsive">
                        <img class="img-responsive" alt=“application-image” src="<?php the_field('membersimage'); ?>">

               
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
                      
                      <p class="application-reviewing"><?php the_field('updatinginformation'); ?></p>
                      
                       <p class="beneficiary-text"><?php the_field('membersinformation'); ?></p>

                      
                      <div class="text-center">
                          
                                <a class="btn btn-primary" href="<?php the_field('updateinfobutton'); ?>">UPDATE INFORMATION</a>
                          
                 
          
            
        </div>
          
                  </div>      
              </div>
          </div>
      </section>
<?php get_footer(); ?>
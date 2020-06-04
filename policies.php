<?php
/*
Template Name: BENEFICIARIES Page
*/
?>


<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>


      <!--      HEADER END-->
      
     <!--       WELCOME CONTAINER START-->
      <section class="container-fluid aboutbg text-center notfooter">
    <div class="container">
              
              <div class="beneficiary"><h2><?php the_field('titleforpolicies'); ?></h2>
               
            <p class="sub-title-beneficiary"><?php the_field('subtitleforpolicies'); ?></p>
                  
                  <p class="beneficiary-text"><?php the_field('privacypolicytext'); ?></p>
                  
                      
 
        </div>  </div>
                    
      </section>
          
          
      <!--       WELCOME CONTAINER END-->
      
      
        
 <section class="container-fluid meetcarolbg notfooter">
          <div class="container">
              <div class="row">
                  <div class="trustlogo"><img src="images/gumala-logo-icon.png"></div>
                  
                  <div class="col-md-6 beneficiary-container">
                 <h4 class="application-process">Whistleblowing Policy</h4>
                      <p class="members-info">The GGF is committed to the highest standards of good governance, legal, ethical and moral behaviour and in that regard recognises that its employees, contractors, suppliers and Beneficiaries may be the first to identify concerns of wrongdoing, either perceived or real.
                          
                          <br><br>

The purpose of the Whistleblowing Policy is to provide a framework for a supportive work environment where legitimately held concerns of wrongdoing held by an Officer (Directors or Executives), Employee or Contractor providing services or goods to a GGF entity, can be raised without fear of reprisal.
                          
                          <br><br>
                          
 Members or Beneficiaries wishing to raise complaints should refer to the GGF Complaints policy/process.
                          
                          <br><br>
                          
The policy will be reviewed every three years.
                          
                          
                      </p>
          
            </div>
                  
                  <div class="col-md-6 img-responsive-two">
                      <img class="img-responsive" alt="landscape image" src="images/policies-page1.png">
                  </div>
                  
              </div>
          </div>
      </section>
      
      <section class="container-fluid meetdavidbg notfooter">
          <div class="container">
              <div class="row">
                  
                  <div class="col-md-6 meet-responsive">
                  <img class="img-responsive" alt="landscape image" src="images/policies-image2.png">
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
                      <h4 class="application-reviewing">Group Meetings Policy</h4>
                      <p class="beneficiary-text">The Group Meetings Policy has been developed to provide a guide to the Beneficiaries of the GGF on the procedures of meetings of the Foundation with specific consideration to the different types of meetings the Foundation may hold, the requirements of holding those meetings, conduct at meetings, proxy information, registrations information, allowances for attendees of the meetings and taxation.
                      </p>
          
          
                  </div>      
              </div>
          </div>
      </section>
<?php get_footer(); ?>
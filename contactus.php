<?php
/*
Template Name: CONTACT Page
*/
?>


<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
      
     
      <section class="container-fluid aboutbg text-center notfooter">
          
          <div class="container ">
              
               <div class="contactus"><h2><?php the_field('titleforcontact'); ?></h2>
               
 
                <div class="container">
              <div class="row">
                 
                  
                  <div class="col-sm-4 meet-responsive">
                      
                       <p class="contactheader"><?php the_field('gumalatrusttitle'); ?></p>
                      
  <p class="contactp"><?php the_field('gumalatrustcontact'); ?></p>
                      
          
                  </div>
                    <div class="col-sm-4 meet-responsive">
                        
                        <p class="contactheader"><?php the_field('gumalacorptitle'); ?></p>
                        
                        <p class="contactp"><?php the_field('gumalacorpcontact'); ?></p>
             
          
                  </div>
                      <div class="col-sm-4 meet-responsive">
                          
                          <p class="contactheader"><?php the_field('gumalaenterprisetitle'); ?></p>
                          
                          <p class="contactp"><?php the_field('gumalaenterprisecontact'); ?></p>
                    
          
                  </div>
                  <div class="col-sm-4img meet-responsive">
                  </div>
                  
              </div>
                    
          </div>
       
      

        </div></div>
		  
          
      </section>
      
      <section class="container-fluid contactinfobg notfooter">
          <div class="container">
              
              <p class="info"><?php the_field('gumalatrusttitletwo'); ?></p>
			 
              <div class="row">
				  
                  <!--<div class="trustlogo2"><img src="images/gumala-logo-icon2.png"></div>-->
                  
              <p class="contactinfo">If you have any questions about your benefits and how you can access them, please contact us via phone on 08 9287 3900, email us at <span style="color:#b7b7b7">
<a class="greytext" href="mailto:gipl@gumalatrust.com"> gipl@gumalatrust.com</a></span> or complete the enquiry form and we will respond to you via email.
<br>
				  <br>For further information about Gumala Member programs, please contact Gumala Aboriginal Corporation via phone on 1800 486 252 or email <span style="color:#b7b7b7"><a class="greytext" href="mailto:info@gumala.com.au"> info@gumala.com.au</a></span>
<br>
				  <br>If you are already a Beneficiary or a Member and would like to update your personal details, we encourage you to fill out a <span style="color:#b7b7b7"><a class="greytext" href="/imagestwo/personal-information-form.pdf" download="Gumala Beneficiary Application">Personal Information Form.</a></span></p>   
                  
                  <div class="col-md-6img meet-responsive">
                  </div>
                  
              </div>
          </div>
      </section>
<?php get_footer(); ?>
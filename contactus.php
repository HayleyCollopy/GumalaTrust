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
                      
                      <p class="contactp"><?php the_field('gumalatrustaddress'); ?></p>
                      <p class="contactp"><?php the_field('gumalatrustphone'); ?></p>
                      <p class="contactp"><?php the_field('gumalatrustfacsimile'); ?></p>
                      <p class="contactp"><?php the_field('gumalatrustemail'); ?></p>
                      <p class="contactp"><?php the_field('gumalatrustpostal'); ?></p>
                      <p class="contactp"><?php the_field('gumalatrustabn_acn'); ?></p>
                      
          
                  </div>
                    <div class="col-sm-4 meet-responsive">
                        
                        <p class="contactheader"><?php the_field('gumalacorptitle'); ?></p>
                        
                        <p class="contactp"><?php the_field('gumalacorpaddress'); ?></p>
                        <p class="contactp"><?php the_field('gumalacorpphone'); ?></p>
                        <p class="contactp"><?php the_field('gumalacorpemail'); ?></p>
                        <p class="contactp"><?php the_field('gumalacorppostal'); ?></p>
                        <p class="contactp"><?php the_field('gumalacorpabn_acn'); ?></p>
             
          
                  </div>
                      <div class="col-sm-4 meet-responsive">
                          
                          <p class="contactheader"><?php the_field('gumalaenterprisetitle'); ?></p>
                          
                          <p class="contactp"><?php the_field('gumalaenterpriseaddress'); ?></p>
                          <p class="contactp"><?php the_field('gumalaenterprisephone'); ?></p>
                          <p class="contactp"><?php the_field('gumalaenterpriseemail'); ?></p>
                          <p class="contactp"><?php the_field('gumalaenterprisepostal'); ?></p>
                          <p class="contactp"><?php the_field('gumalaenterpriseabn_acn'); ?></p>
                    
          
                  </div>
                  <div class="col-sm-4img meet-responsive">
                  </div>
                  
              </div>
                    
          </div>
       
      

        </div></div>
		  
          
      </section>
      
      <section class="container-fluid contactinfobg notfooter">
          <div class="container">
              <div class="row">
                  
                  
                  
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=8');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<p class="text-center info"><a class="info" href="<?php the_permalink(); ?>"><?php the_title();?></a></p> 
            <div class="contactinfo"><p><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>

                  
                  
              </div>
          </div>
      </section>
<?php get_footer(); ?>
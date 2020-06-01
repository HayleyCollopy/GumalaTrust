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
      
      <section class="container-fluid meetcarolbg">
          <div class="container">
              <div class="row">
                  <div class="trustlogo"><img src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/gumala-logo-icon.png"></div>
                  
                  <div class="col-md-6 meet-responsive">
<?php $post_id = 100;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4 class="carol"><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="seemore" href="'.get_permalink($queried_post).'"><br>See more...</a>';?>                       

          
          
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
<?php $post_id = 104;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
                      
                      
                      
                  </div>
                  
              </div>
          </div>
      </section>
      
      <section class="container-fluid meetdavidbg">
          <div class="container">
              <div class="row">
                  
                  <div class="col-md-6 meet-responsive">
<?php $post_id = 107;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
                      
                      
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
<?php $post_id = 102;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4 class="david"><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="seemore" href="'.get_permalink($queried_post).'"><br>See more...</a>';?>
          
          
                  </div>      
              </div>
          </div>
      </section>

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
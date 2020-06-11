<?php
    /*
    Template Name: Search Page
    */
    ?>
<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
<div class="container-fluid main-content">
	<section class="container">
        <div class="row">
            
            <p class="searchtitle">Search Results:</p>
                        <div class="postendborder"></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          
          <h4 class="posttitle"> <?php the_title(); ?></h4>
            
            <div class="searchedexcerpt">
        <?php the_content(); ?>
         <a class="seemorepost" href="<?php the_permalink(); ?>">Read More</a>
<?php the_post_thumbnail(); ?>
                        <div class="postendborder"></div>
            </div>
            
        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        </div>
            </section>
        </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
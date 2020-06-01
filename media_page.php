<?php
    /*
    Template Name: MEDIA
    */
    ?>
<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 

<section class="container-fluid text-center notfooter">
          <div class="container ">
              <div class="mediatitle"><h2>MEDIA</h2></div>        
    </div>
</section>

<div class="container-fluid main-content">
	<section class="container">
        <div class="row">
<div class="col-md-9 postexcerpt">
<?php
 
$args = array(
     'cat' => '6'
);
 
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 $i = 0;
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>

        <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
   
    <div class="postblock"></div>
        
                <h3 class="posttitle"><?php the_title();?></h3>

<div class="excerpt"> <?php the_excerpt(); ?></div>
  <a class="seemorepost" href="<?php the_permalink(); ?>">Read More</a>
<?php the_post_thumbnail(); ?>
            <div class="postendborder"></div>
        </section>
        <?php
    endwhile;
endif;

 
?> 
            </div>
            <?php get_sidebar(); /* Tells WordPress to include sidebar.php */ ?>

        </div>
            </section>
        
</div>


<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
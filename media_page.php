<?php
    /*
    Template Name: Media
    */
    ?>
<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
<div class="container-fluid main-content">
	<section class="container">
        <div class="row">

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
    <div class="col-sm-4 postimage">
 <?php the_post_thumbnail(); ?>
           
   </div>
   <article class="col-sm-8 postexcerpt">
    <div class="postblock"></div>
                <h2><?php the_title();?></h2>
<div class="excerpt"> <?php the_excerpt(); ?></div>
  <a href="<?php the_permalink(); ?>">Read More</a>
</article>
        </section>
        <?php
    endwhile;
endif;

 
?> 
    	

        </div>
            </section>
        
</div>


<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
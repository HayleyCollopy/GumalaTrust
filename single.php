<?php include (TEMPLATEPATH . '/new_small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="col-sm-7 maintext">	

<article class="excerpts"> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
	<div <?php post_class(); ?>>
		<h3 class="posttitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

		<div class="excerpt">
			<?php the_content(); ?>
            <div class="singleimg">
            <?php the_post_thumbnail(); ?>
                </div>
		</div><!--postcomtet-->
						
         <div class="postendborder"></div>
        
	</div><!--post class-->
    <div class="related-template">
	<h3 class="posttitle">Related Posts</h3>
	<ul class="rel-list">
		<?php
		$backup = $post; //Backup current post object
		$current = $post->ID;  //get current post id 
								
		global $post;

		//Fetch categories of current post
		$counter = 0;
		$allcats = '';
		foreach ((get_the_category()) as $cat) {
			if ($counter > 0) $allcats .= ',';
			$allcats .= $cat->cat_ID;
			$counter++;
		}
		
	$myposts = get_posts('numberposts=3&order=DESC&category=');
        foreach ($myposts as $post) :
			setup_postdata($post);
			?>
		<li>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
			<span class="related-posts-date"><?php the_time('F jS, Y'); ?></span>
		</li>
		<?php endforeach;
								
		$post = $backup; //restore current post object
		wp_reset_query();
		?>
	
        </ul>

</div>

	

		
	<?php endwhile; ?>
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
</article>
</section>
            
     </div>
    </div>
  </div>
<?php get_footer(); ?>

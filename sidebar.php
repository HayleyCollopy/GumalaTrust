 <div class="col-md-3 sidebar">

     <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
    <ul id="sidebar">
        <?php dynamic_sidebar( 'sidebar1' ); ?>
    </ul>
<?php endif; ?>      
   </div>
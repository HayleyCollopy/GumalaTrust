<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      
      <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
      
    <title>   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
          <link rel="stylesheet" href="responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,800;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
<?php wp_head(); ?>
      
    </head>
  <body>

      <!--      NAVBAR START-->
<header class="container-fluid herobg"<?php if ( get_field(' headerbackgroundimage ') ) { echo 'style="background: url(' . get_field(' headerbackgroundimage ') . ')"'; } ?>>
     
          <nav class="navbar">
  <div class="container-fluid notfooter">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://206.189.45.97/~mesh4/">   
        <img src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/maybe-finallogo-01.png" alt="main logo"></a> <!--        ?????-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

<ul class="nav navbar-nav navbar-right">
<?php wp_nav_menu(array(
        'menu' => 'Top menu',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link navbutton",
)); ?>
</ul>

        
    </div>
  </div>
</nav>  
   <!--      NAVBAR END-->
          
          
          
          
          <!--      HEADER START-->
          
          <div class="container text-center">
<h1><?php the_field('maintagline'); ?></h1>
    </div>
      <!--      HEADER END-->
</header>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
      <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
      
      <title>
      <?php
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
      <header class="container-fluid herobg">
     
              
          
          <nav class="navbar">
  <div class="container-fluid notfooter">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="images/maybe-finallogo-01.png">   
        <img src="images/maybe-finallogo-01.png" alt="main logo"></a> <!--        ?????-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active navbutton"><a href="#">HOME</a></li>
        <li class="navbutton"> <a href="#">ABOUT US</a></li>
        <li class="navbutton"> <a href="#">BENEFICIARIES</a></li>
        <li class="navbutton"> <a href="#">MEDIA</a></li>
        <li class="navbutton"> <a href="#">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>  
   <!--      NAVBAR END-->
          
          
          
          
          <!--      HEADER START-->
          
          <div class="container text-center">
    <div class="small_header"></div>
    </div>
      
      </header>
      
     <!--       WELCOME CONTAINER START-->
      <section class="container-fluid aboutbg text-center notfooter">
          
          <div class="container">
                
              <div class="beneficiary"><h2>BENEFICIARIES</h2></div>
              
              <div class="sub-title-beneficiary"><h2>What is a Beneficiary?</h2></div>
               
            
                
              
        
          
              <p class="beneficiary-text">A Beneficiary is a person entitled to receive benefits from the General Gumala Foundation (GGF). To be a Beneficiary of this Foundation, you must be recognised as an individual of one of the three language groups: Bunjima, Nyiyaparli or Yinhawangka.
                  
                  <br><br>
                  
                  Gumala has approximately 1,600 registered adult Beneficiaries. In making a decision about who qualifies as a Beneficiary, the Trustee is bound by the Trust Deed to consider the following:</p>
                      
                       <ul class="beneficiary-text">
<li>Aboriginal Tradition.</li>
<li>The findings of any 'bona fide' genealogical studies, landownership studies, or land boundary studies that may at any time, or from time to time, be carried out.</li>
<li>Whether a person regards him/herself as a Traditional Owner and is accepted by other Traditional Owners as a Traditional Owner.</li>
<li>Any relevant determination of a court or tribunal.</li>
<li>The relationship of a person to the area of the Traditional Lands in terms of family, clan, kinship, traditional occupation rights by marriage or affiliation, usufructuary rights and all other connections to the land recognised by Aboriginal Tradition.</li>
<li>The views of any Traditional Owner Council.</li></ul>
 
              
              <p class="beneficiary-text">
If you become a Beneficiary, you will be entitled to receive benefits from the GGF. As a Member you will be able to access these entitlements through programs, which have been designed to assist in the alleviation of poverty, sickness, suffering, distress, misfortune or destitution.
                  
                  <br><br>
                  
If you have recently turned 18, you are encouraged to put in a joint application for approval.</p>
              
              
<!--              BUTTON-->
              <a href="/imagestwo/joint-application-for-beneficiary-status_membership.pdf" download="Gumala Beneficiary Application"> <button type="button" class="btn btn-primary">BECOME A BENEFICIARY</button></a>
        </div>
                    
      </section>
          
          
      <!--       WELCOME CONTAINER END-->
      
 <section class="container-fluid meetcarolbg notfooter">
          <div class="container">
              <div class="row">
                  <div class="trustlogo"><img src="images/gumala-logo-icon.png"></div>
                  
                  <div class="col-md-6 meet-responsive">
                 <h4 class="application-process">Our Application Reviewing Process</h4>
                      <p class="members-info">Once an application is sent to us, the application is sent to the Foundation Application Review Committee for assessment and review. This committee make recommendations to the GAC and GIPL Boards respectively about the applications.
                          
                          <br><br>

The GIPL Board approves Beneficiary status. The GAC Board approve Memberships. For this reason, the committee is made up of TO Directors from both the GIPL and GAC Boards. This ensures the decision making is consistent regarding the outcomes of applications.
                      </p>
          
            </div>
                  
                  <div class="col-md-6 meet-responsive">
                      <img class="img-responsive" alt="carol" src="images/application-image-three.png">
                  </div>
                  
              </div>
          </div>
      </section>
      
      <section class="container-fluid meetdavidbg notfooter">
          <div class="container">
              <div class="row">
                  
                  <div class="col-md-6 meet-responsive">
                  <img class="img-responsive" alt="david" src="images/members-image.png">
                  </div>
                  
                  <div class="col-md-6 meet-responsive">
                      <h4 class="application-reviewing">Updating Information</h4>
                      <p class="beneficiary-text">If you are already a Beneficiary or a Member and would like to update your personal details, we encourage you to fill out a Personal Information Form.
                      </p>
                      
                       <a href="/imagestwo/personal-information-form.pdf" download="Gumala Beneficiary Application"> <button type="button" class="btn btn-update-info">UPDATE INFORMATION</button></a>
          
          
                  </div>      
              </div>
          </div>
      </section>
      
      
<!--      FOOTER STARTS-->
      <footer class="container-fluid">
          <div class="footer-content">
              <div class="text-center">
<!--              SOCIAL MEDIA ICONS GO HERE-->
              <a href="https://facebook.com/GumalaTrust"><img class="icons" src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/facebook%20icon.png"></a>
              <a href="https://au.linkedin.com/company/gumala-trust"><img class="icons" src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/linkedin%20icon.png"></a>
              <a href="https://instagram.com"><img class="icons" src="http://206.189.45.97/~mesh4/wp-content/themes/gumala_trust/images/instagram%20icon.png"></a>
              </div>
              
              
              <div class="row">
                  
              <div class="footerbox col-xs-6 text-center">
              <p>CONTACT US</p>
                  </div>
                <div class="footerbox col-xs-6 text-center">
              <p>TERMS &amp; CONDITIONS</p>
                  </div>
              </div>

              </div>
        <div class="footerbox text-center">
          <p>The Gumala Trust (GIPL) © 2020</p>
          </div>

          
      </footer>
<!--      FOOTER ENDS-->
      
  </body>
</html>
<?php wp_footer(); ?>
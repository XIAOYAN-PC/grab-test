<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
* Please browse readme.txt for credits and forking information
 * @package noteblog
 */

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <header id="masthead">
      <nav class="navbar lh-nav-bg-transform navbar-default navbar-fixed-top navbar-left"> 
        <!-- Brand and toggle get grouped for better mobile display --> 
        <div class="container" id="navigation_menu">
          <div class="navbar-header"> 
            <?php if ( has_nav_menu( 'primary' ) ) { ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
              <span class="sr-only"><?php echo esc_html('Toggle Navigation', 'noteblog') ?></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
            </button> 
            <?php } ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <div class="navbar-brand">
              <?php 
     
                if (!has_custom_logo()) { 
                  bloginfo('name');
                } else {
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  echo '<img class="brand-image" src="'.$image[0].'" alt="';
                  bloginfo( 'name' );
                  echo '" />';
                  echo '<div class="brand-name"><b>';
                  bloginfo( 'name' );
                  echo '</b></div>';
                }
       
              ?>
    
             </div>
            </a>
          </div> 
          <?php if ( has_nav_menu( 'primary' ) ) {
              noteblog_header_menu(); // main navigation 
            }
            ?>

          </div><!--#container-->
        </nav>
        <?php if ( is_front_page() ) { ?>
        <div class="site-header">
          <div class="site-branding"> 

          </div><!--.site-branding-->

          <div class="container">
            <div id="header-form">
              <form class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 center-block text-left" style="float:none;">
                  <div id="selection-container">
                    <div class="form-group header-form-group" id="pickup-group">
                      <div class="align-bottom-sep"></div>
                      <div>
                        <label>PICP-UP</label>
                        <input type="text" id="pickup-input" value="Changi Airport Private Terminal"/>
                      </div>
                    </div>

                    <div class="form-group header-form-group">
                      <div class="align-top-sep"></div>
                      <div>
                        <label>DROP-OFF</label>
                        <input type="text" id="dropoff-input" value="Phuket Island Airport"/>
                      </div>
                    </div>

                    <div class="header-inline-form-group">
                      <div class="col-sm-6" style="border-right: 1px solid #CCD6DD;">
                          <input id="addon" type="hidden"/>
                          <div class="dropdown" style="width:100%; background-color:#F7F9FB ">
                            <button class="btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:100%;border:none;">
                              <span class="selection">Select Add-on</span>
                              <span class="caret"></span>
                            </button>
                             <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a href="#">Flight attendant (+ $300)</a></li>
                              <li><a href="#">Full kitchen (+ $100)</a></li>
                              <li><a href="#">Massage (+ $50)</a></li>
                              <li><a href="#">Jacuzzi (+ $180)</a></li>
                            </ul>
                          </div>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" id="pickup-date-field" />
                      </div>
                    </div>

                  </div>
                  <div class="form-group center-block text-center" id="sub-btn-container">
                    <div class="col-xs-6">Request a Jet</div><div class="col-xs-6"><b>$190</b></div>
                  </div>

              </form>
            </div>
          </div>
        </div><!--.site-header--> 
  <?php } else {  ?>

  <?php } ?>
</header>    

<div id="content" class="site-content">
<script type="text/javascript">
jQuery(document).ready(function($) {
  $(".dropdown-menu li a").click(function(){

    $(this).parents(".dropdown").find('.selection').text($(this).text());
    $(this).parents(".dropdown").find('.selection').val($(this).text());

  });
});
</script>


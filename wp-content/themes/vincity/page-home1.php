<?php

/**
 *  Template Name: vincity
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eleaning
 */
get_header();
?>
<div class="container-fluid">
  <div class="row">
   <div class="col-sm-6 layout-left">
    <div class="row">
    <div class="col-sm-6 logo"><a href="#"><img src="<?php bloginfo('template_directory');?>/images/logo.png"></a></div>
    <div class="col-sm-6 slogan">
      <h1>Đẳng cấp singapore và hơn thế nữa</h1>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <?php
                   wp_nav_menu( array(
                        'theme_location'    => 'menu-1',
                        'depth'             => 1,
                        'container'         => 'div',
                        'container_class'   => 'container-menu',
                        'container_id'      => '',
                        'menu_class'        => 'menu-horizontal',
                        'fallback_cb'       => '',
                        'walker'            => new WPDocs_Walker_Nav_List(),
                    ) );
                  ?>         
     
           <?php if ( is_active_sidebar( 'sidebar-slider' ) ) : 
                 dynamic_sidebar( 'sidebar-slider' ); 
                endif; ?>
      </div>
    </div>
   </div>
   <div class="col-sm-6 layout-right">
      <div class="row"></div>
   </div>
  </div>
</div>
<?php
get_footer();
?>


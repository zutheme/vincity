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
            <ul class="nav nav-tabs custab">
              <li class="active"><a href="#home">Tổng quan dự án</a></li>
              <li><a href="#menu1">Vị trí dự án</a></li>
              <li><a href="#menu2">Tiến ích</a></li>
              <li><a href="#menu3">Mẫu căn hộ</a></li>
              <li><a href="#menu4">Giá và thanh toán</a></li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <?php  get_template_part('template-parts/slider1'); ?>
              </div>
              <div id="menu1" class="tab-pane fade">
                 <?php  get_template_part('template-parts/slider1'); ?>
              </div>
              <div id="menu2" class="tab-pane fade">
                 <?php  get_template_part('template-parts/slider1'); ?>
              </div>
              <div id="menu3" class="tab-pane fade">
                 <?php  get_template_part('template-parts/slider1'); ?>
              </div>
               <div id="menu4" class="tab-pane fade">
                 <?php  get_template_part('template-parts/slider1'); ?>
              </div>
            </div>
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="ie.css" /><![endif]-->

<?php wp_head(); ?>
</head>
<body>
<!-- BEGIN wrapper -->
<div id="wrapper">
  <!-- BEGIN header -->

      <?php 

        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
       ?>

  <div id="header">
    <div class="buffer">
      <div class="buffer">
        

        <?php  


          wp_nav_menu(array(
            'theme-location'      =>'topBar',
          ))


        ?>


        <h1><a href="<?php echo get_home_url(); ?>"><img src="<?php echo $image[0]; ?>"></a></h1>
       
        <ol>
          <?php  


          wp_nav_menu(array(
            'theme-location'      =>'mainMenu',
          ))


        ?>
        </ol>
        <?php echo get_search_form(); ?>
      </div>
    </div>
  </div>


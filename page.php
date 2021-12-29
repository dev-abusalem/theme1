<?php get_header(); ?>
  <!-- END header -->
  <!-- BEGIN body -->
  <div id="body">
    <!-- BEGIN content -->
    <div id="content">
      <div class="buffer">

        <!-- begin post -->
        <?php while (have_posts()):the_post() ?>
        <div id="single_post">     
        <div class="post">
        <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
           
        </div>
        </div>
      <?php endwhile; ?>
        <!-- end post -->
        
        <!-- end post -->
      </div>
    </div>
    <!-- END content -->
    <!-- BEGIN sidebar -->
   <?php get_sidebar(); ?>
    <!-- END sidebar -->
    <div class="break"></div>
  </div>
  <!-- END body -->
  <!-- BEGIN footer -->
  <?php get_footer(); ?>
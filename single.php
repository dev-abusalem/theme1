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
          <h2><a href="#"><?php the_category(' '); ?></a></h2>
          <p class="date"><a href="#"><?php the_author(); ?></a> on <?php the_time('d F  y'); ?> | <a href="#"><?php comments_number(); ?></a></p>
          <div class="thumb"><a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" /></a></div>
          <p><?php the_content(); ?></p>
           
        </div>
        </div>
      <?php endwhile; ?>
        <!-- end post -->
            <?php 
            
            comments_template();
            
            ?>
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
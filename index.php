<?php get_header(); ?>
  <!-- END header -->
  <!-- BEGIN body -->
  <div id="body">
    <!-- BEGIN content -->
    <div id="content">
      <div class="buffer">
      <?php 
      
        if(!have_posts()){
          echo "<h3>No Post Founded</h3>";
        }
      
      ?>
        <!-- begin post -->
        <?php while (have_posts()):the_post() ?>

        <div class="post">
          <h2><a href="#"><?php the_category(' '); ?></a></h2>
          <p class="date"><a href="#"><?php the_author(); ?></a> on <?php the_time('d F  y'); ?> | <a href="#"><?php comments_number(); ?></a></p>
          <div class="thumb"><a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" /></a></div>
          <p><?php echo wp_trim_words( get_the_content(), 30, '....' ); ?></p>
          <a class="readmore" href="<?php the_permalink(); ?>">Read More</a> 
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
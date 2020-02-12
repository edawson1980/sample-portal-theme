<?php get_header(); ?>
  <div class="row">
    <div class="column">


      <?php
      $args = array(
        'post_type' => 'films' ,
        'post_status' => 'published' ,
        'posts_per_page' => '3',
        'order_by' => 'name',
        'order' => 'ASC'
     );
     $loop = new WP_Query($args);

     while ( $loop -> have_posts() ) : $loop -> the_post();?>
     <div>
       <div class="column">
         <h3><?php the_title(); ?></h3>
         <?php the_post_thumbnail($size='full'); ?>
       </div>

       <div class="column">
         <p><?php the_excerpt(); ?></p>
       </div>
     </div>
     <?php
        endwhile;
        wp_reset_postdata();
      ?>

    </div>
  </div>
  <?php get_footer(); ?>

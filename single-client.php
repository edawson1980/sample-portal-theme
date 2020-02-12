<?php
/*
* Template Name: Single Client Template
* Description: Layout for individual Client dashboard
*/
get_header();
?>

<div class="wrapper">
  <div class="row">
    <div class="column" id="primary">
      <main class="dash-area">
        <!-- run the Loop here: -->
        <?php while( have_posts() ) : the_post(); ?>
      </main>

    </div>

  </div>

</div>




















<?php get_footer(); ?>

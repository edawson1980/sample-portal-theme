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
        <div class="dash-title">
          <h1>Welcome, Client.</h1>
        </div>
        <!-- start the Loop here: -->
        <?php while( have_posts() ) : the_post(); ?>

          <div class="dash-container">
            <div class="row">
              <div class="dashcol">
                <h2><?php the_field('content_feedback') ?></h2>
                <h1>Asset One</h1>
              </div>
              <div class="dashcol">
                Asset Two
                <?php the_field('multichoice') ?>
              </div>
              <div class="dashcol">
                Asset Three
              </div>
            </div>

          </div>
        <?php endwhile; //end Loop here ?>
      </main>

    </div>

  </div>

</div>





<?php get_footer(); ?>

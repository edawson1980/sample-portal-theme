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
        <!-- start the Loop here: -->
        <?php while( have_posts() ) : the_post(); ?>
          <div class="dash-container">
            <div class="row">
              <div class="dashcol">
                Asset One
              </div>
              <div class="dashcol">
                Asset Two
              </div>
              <div class="dashcol">
                Asset Three
              </div>
            </div>

          </div>
        
      </main>

    </div>

  </div>

</div>




















<?php get_footer(); ?>

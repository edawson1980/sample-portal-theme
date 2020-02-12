<?php
/*
* Template Name: Single Client Template
* Description: Layout for individual Client dashboard
*/
acf_form_head();
get_header();
?>



<div class="wrapper">
  <div class="row">
    <div class="column" id="primary">
      <main class="dash-area">
        <div class="dash-title">
          <h1>Welcome, <?php the_field('client_name') ?></h1>
        </div>
        <!-- start the Loop here: -->
        <?php while( have_posts() ) : the_post(); ?>

          <div class="dash-container">
            <div class="cptrow">
              <div class="dashcol">
                <h1>Asset One</h1>
                <h2><?php the_field('content_feedback') ?></h2>
              </div>
              <div class="dashcol">
                Asset Two
                <p><?php the_field('multichoice') ?></p>
              </div>
              <div class="dashcol">
                <h3>Asset Three</h3>
                <?php $image = get_field('design_image'); ?>
                <img src="<?php echo $image ?>" alt="judy dench">

              </div>
            </div>
            <div class="clientform">
              <?php acf_form(); ?>
            </div>

          </div>
        <?php endwhile; //end Loop here ?>
      </main>

    </div>

  </div>

</div>





<?php get_footer(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge; chrome=1">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
   <title>Sample Theme</title>
    <?php wp_head(); ?>
  </head>
  <body class="no-customize-support">
    <?php wp_customize_support_script(); ?>
    <!-- <?php body_class(); ?> -->
    <div class="menu">
      <nav>
        <a class="nav-item" href="/test_install">HOME</a>
        <a class="nav-item" href="/test_install/about">ABOUT</a>
        <a class="nav-item" href="/test_install/work">WORK</a>
        <a class="nav-item" href="/test_install/films">CUSTOM POSTS</a>
      </nav>
    </div>
    <main>
      <div class="wrapper">
        <div class="pagetitle">
          <h1>
            <?php wp_title('') ?>
          </h1>
        </div>

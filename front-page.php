<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="container">
      <!-- IMAGE SECTION -->
      <section class="row justify-content-center mt-3 py-5 bg-image text-center" id="hero">
        <div>
          <div class="d-flex align-items-center justify-content-center">
            <div class="text-white col-lg-8 ml-lg-5 mt-4">
              <h1 class="mb-3 font-weight-bold"><?php the_field('title'); ?></h1>
              <p class="mb-3 text-white md-lead"><?php the_field('subtitle'); ?></p>
              <p class="mb-3 text-white md-lead"><?php the_field('subtitle_2'); ?></p>
              <?php if(is_user_logged_in()) { ?>
                <a class="mt-3 mr-2 btn btn-outline-light" href="<?php echo site_url('/wp-admin/post-new.php?post_type=recept'); ?>" role="button">Skapa ditt eget smoothie-recept</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </section>

      <!-- SECTION 1 -->
      <section class="row justify-content-center mt-3 py-5 bg-white">

        <div class="col-lg-5 col-md-12 pl-4 mb-4 mb-md-0">
          <h4><?php the_field('section_1_title'); ?></h4>
          <?php the_field('section_1_content'); ?>
          <br>
          <a class="btn btn-info mb-4" href="<?php echo site_url('/wp-login.php?action=register'); ?>">Registrera konto</a>
        </div>
        <div class="col-lg-6 d-none d-sm-block">
          <img class="img-fluid img-thumbnail" src="<?php echo get_theme_file_uri('/img/harshal-s-hirve-yNB8niq1qCk-unsplash.jpg') ?>" alt="carrots">
        </div>
      </section>

      <!-- SECTION 2 -->
      <section class="row justify-content-center mt-3">
        <div class="col text-center px-5 py-5 text-white bg-info">
          <h4><?php the_field('section_2_title'); ?></h4>
        </div>
      </section>

      <!-- SECTION 3 -->
      <section class="row justify-content-center mt-3 py-5 bg-white">
        <div class="col-lg-5 col-md-12 pl-4 mb-4 mb-md-0">
          <h4><?php the_field('section_3_title'); ?></h4>
          <?php the_field('section_3_content'); ?>
          <br>
          <a class="btn btn-info mb-4" href="<?php echo site_url('/recept'); ?>">Se recept</a>
        </div>
        <div class="col-lg-6 d-none d-sm-block">
          <img class="img-fluid img-thumbnail" src="<?php echo get_theme_file_uri('/img/pexels-photomix-company-867349_600x400.jpg') ?>" alt="">
        </div>
      </section>
  </div>

<?php get_footer(); ?>

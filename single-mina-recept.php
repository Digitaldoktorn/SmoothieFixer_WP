<?php
/**
 * The template for displaying all single Mina Recept.
 *
 * @package understrap
 */

// Exit if accessed directly.
if(!is_user_logged_in()) {
    wp_redirect(esc_url(site_url('/')));
    exit;

}

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="container mt-4">
		<div class="row">
			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'recept' ); ?>

					<?php understrap_post_nav(); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
		</div><!-- .row -->
</div>

<?php get_footer(); ?>

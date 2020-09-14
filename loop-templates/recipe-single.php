


        <?php
/**
 * Single recipe partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<small><?php understrap_posted_on(); ?></small>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

        <?php if( get_field('smoothie_image') ): ?>
            <img src="<?php the_field('smoothie_image'); ?>" />
        <?php endif; ?>
        <br><br>
        <h4>Beskrivning</h4>
        <p><?php the_field('description'); ?></p>
		
        <h4>Ingredienser</h4>
		<?php the_field('fruits'); ?><br>
		<?php the_field('nuts'); ?><br>
		<?php the_field('medium'); ?><br>
		<?php the_field('misc'); ?><br>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

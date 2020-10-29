<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

	<article class="bg-white p-5 mr-3" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			
		<div class="row">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			<div class="entry-content">
					<?php the_content(); ?>
				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>
		</div>
	</article>
<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
</footer>
<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="card">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<div class="row">


		<div class="col ml-4 mt-4">

			<div class="col">
				<div class="card-body">
					<h5 class="card-title">		
						<?php
							the_title(
							sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>');
						?>
					</h5>

					<p class="card-text">
						<div class="entry-content mb-4">
							<?php echo wp_trim_words(get_field('description'), 15 ); ?>
							<?php echo the_excerpt(); ?>
							

							<?php
							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
									'after'  => '</div>',
								)
							);
							?>
						</div>
					</p>
				</div>
			</div>

			<footer class="entry-footer">

				<?php understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->
		</div>
	</article><!-- #post-## -->
</div>

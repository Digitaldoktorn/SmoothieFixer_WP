<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="card">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<div class="row">
			<div class="col-3 ml-4 mt-4">
				<div><?php echo get_the_post_thumbnail( $post->ID, 'small' ); ?></div>
				<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta-bloglist"><?php understrap_posted_on(); ?></div>
				<?php endif; ?>
			</div>
			<div class="col">
				<div class="card-body">
					<h5 class="card-title">		
						<?php
							the_title(
							sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>');
						?>
					</h5>

					<p class="card-text">
						<div class="entry-content">
							<?php the_excerpt(); ?>

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
		</div>
	</article>
</div>






	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer>

</article>

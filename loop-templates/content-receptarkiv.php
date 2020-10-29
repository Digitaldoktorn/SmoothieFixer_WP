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
				<div class="img-no-border">
					<?php 
						$image = get_field('smoothie_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
					<div class="pb-3">
						<?php if ( 'recept' == get_post_type() ) : ?>
							<div class="entry-meta-bloglist"><?php understrap_posted_on(); ?> </div>
						<?php endif; ?>
					</div>
				</div>



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
						<div class="entry-content mb-4">
							<?php echo wp_trim_words(get_field('description'), 15 ) . '<a class="btn btn-sm btn-info float-right understrap-read-more-link" href="', esc_url( get_permalink() ) , '">Läs mer</a>'; ?>

							<?php
							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
									'after'  => '</div>',
								)
							);
							?>
						</div>
						<div>
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

	


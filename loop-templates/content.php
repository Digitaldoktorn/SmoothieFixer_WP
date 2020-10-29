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
				<?php if(is_tax()) : ?>
					<div class="img-no-border">
						<?php 
							$image = get_field('smoothie_image');
							$size = 'medium'; // (thumbnail, medium, large, full or custom size)
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}
						?>
					</div>
				<?php endif; ?>
				<div>
					<?php echo get_the_post_thumbnail( $post->ID, 'small' ); ?>
				</div>
					<div class="entry-meta-bloglist pb-3"><?php understrap_posted_on(); ?></div>
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
							<!-- display excerpt on custom taxonomy pages -->
							<?php if(is_tax()) {
								echo wp_trim_words(get_field('description'), 15 ) . '<a class="btn btn-sm btn-info float-right understrap-read-more-link" href="', esc_url( get_permalink() ) , '">Läs mer</a>';
							} else {
								echo the_excerpt();
							}
							
							?>

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

	    <?php if (!is_category()){
			understrap_entry_footer();
		} ?>

	</footer>


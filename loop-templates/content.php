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
  <div class="card-img-top" alt="..."><?php echo get_the_post_thumbnail( $post->ID, 'small' ); ?></div>
  <header class="entry-header">
  <div class="card-body">
    <h5 class="card-title">		
		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>');
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

	</div><!-- .entry-content -->
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta"><?php understrap_posted_on(); ?></div><!-- .entry-meta -->
		<?php endif; ?>
	</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</header>
</article>
</div>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

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

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

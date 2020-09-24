<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
	<header class="entry-header">

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

</header><!-- .entry-header -->

<article class="bg-white p-5 mr-3" <?php post_class(); ?> id="post-<?php the_ID(); ?>">



	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
		
        <ul class="min-list link-list" id="mina-recept">
            <?php 
               $minaRecept = new WP_Query([
                   'post_type' => 'mina-recept',
                   'posts_per_page' => -1,
                   'author' => get_current_user_id()
               ]); 

               while($minaRecept->have_posts()) {
                    $minaRecept->the_post(); ?>
                    <li>
                        <input class="recept-title-field" value="<?php echo esc_attr(get_the_title()); ?>"><br>
                        <textarea class="recept-content-field"><?php echo esc_attr(wp_strip_all_tags(get_the_content())); ?></textarea>
                    </li>
               <?php }
            ?>
        </ul>
		
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

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

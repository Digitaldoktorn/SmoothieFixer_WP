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

	<div class="form-group mt-3">
		
        <ul class="list-group" id="mina-recept">
            <?php 
               $minaRecept = new WP_Query([
                   'post_type' => 'mina-recept',
                   'posts_per_page' => -1,
                   'author' => get_current_user_id()
               ]); 

               while($minaRecept->have_posts()) {
                    $minaRecept->the_post(); ?>
                    <li class="list-group-item">
                        <input class="form-control" value="<?php echo esc_attr(get_the_title()); ?>">
                        
                        <textarea rows=4 class="form-control"><?php echo esc_attr(wp_strip_all_tags(get_the_content())); ?></textarea>
                        <span class="btn btn-secondary btn-sm mt-2"><i class="fa fa-pencil" aria-hidden="true"></i>Redigera</span>
                        <span class="btn btn-danger btn-sm mt-2"><i class="fa fa-trash-o" aria-hidden="true"></i>Ta bort</span>
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

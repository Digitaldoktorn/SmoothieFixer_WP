


        <?php
/**
 * Single recipe partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="p-5 mr-3 bg-white" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title display-4">', '</h1>' ); ?>

		<div class="entry-meta">

			<small id="recipe-meta" class="badge badge-dark p-2 font-weight-normal"><?php understrap_posted_on(); ?></small>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content mt-3">
        <div class="img-thumbnail">
            <?php 
                $image = get_field('smoothie_image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
            ?>
        </div>


        <div class="mt-5">
            <h4>Beskrivning</h4>
            <?php the_field('description'); ?>
        </div>

        <div class="mt-3">
                <table id="ingredients-fruit" class="mb-2">
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Frukter</span></td>
                        <td><?php the_field('fruits'); ?></td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Grönsaker</span></td>
                        <td><?php the_field('veggies'); ?></td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Nötter, frön, kärnor</span></td>
                        <td><?php the_field('nuts'); ?></td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Proteiner</span></td>
                        <td><?php the_field('proteins'); ?></td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Medium</span></td>
                        <td><?php the_field('medium'); ?></td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Fetter, oljor</span></td>
                        <td><?php the_field('fats'); ?></td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Kryddor</span></td>
                        <td><?php the_field('spices'); ?></td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Sötningsmedel</span></td>
                        <td><?php the_field('sweeteners'); ?></td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Superfood 1</span></td>
                        <td><?php the_field('superfood_1'); ?></td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-pill badge-danger">Superfood 2</span></td>
                        <td><?php the_field('superfood_2'); ?></td>
                    </tr>
                </table>
        </div>
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
<hr class="mr-3">

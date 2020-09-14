


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

			<small class="d-inline bg-warning d-flex justify-content-end pr-3"><?php understrap_posted_on(); ?></small>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
    <!-- <section class="row justify-content-center mt-3 bg-white">
        <?php 
            $image = get_field('smoothie_image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
        ?>
    </section> -->

    <section class="row justify-content-center mt-3 py-5 bg-white">
        <div class="col-lg-5 col-md-12 pl-4 mb-4 mb-md-0">
            <h4>Beskrivning</h4>
            <?php the_field('description'); ?>
        </div>
        <div class="col-lg-6">
            <div class="img-fluid img-thumbnail">
                <?php 
                    $image = get_field('smoothie_image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="row justify-content-center mt-3 py-5 bg-white">
        <div class="col-lg-5 col-md-12 pl-4 mb-4 mb-md-0">
                <h4>Ingredienser</h4>
            <p>                
            <span class="badge badge-pill badge-danger">Frukter</span> <?php the_field('fruits'); ?><br>
            <span class="badge badge-pill badge-danger">Nötter etc</span> <?php the_field('nuts'); ?><br>
            <span class="badge badge-pill badge-danger">Medium</span> <?php the_field('medium'); ?><br>
            <span class="badge badge-pill badge-danger">Fetter</span> <?php the_field('fats'); ?><br>
            </p>

        </div>
        <div class="col-lg-6">
        <h4>&nbsp;</h4>
        <p>
            <span class="badge badge-pill badge-danger">Kryddor</span> <?php the_field('spices'); ?><br>
            <span class="badge badge-pill badge-danger">Sötningsmedel</span> <?php the_field('sweeteners'); ?><br>
            <span class="badge badge-pill badge-danger">Superfood 1</span> <?php the_field('superfood_1'); ?><br>
            <span class="badge badge-pill badge-danger">Superfood 2</span> <?php the_field('superfood_2'); ?><br>
        </p>
        </div>
    </section>
    <br>
		



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

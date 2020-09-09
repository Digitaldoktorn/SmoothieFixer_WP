<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500;700&family=Josefin+Slab:wght@600;700&family=Montserrat:wght@300;400;700&display=swap" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c5e1a5;">
      <div class="container">
          <img id="strawberry-logo" src="<?php echo get_theme_file_uri('/img/Emojione_1F353.svg') ?>" alt="strawberry" loading="lazy" />
							<h2 class="font-weight-bold mt-4"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
        <ul class="navbar-nav d-flex flex-row mt-3">
          <!-- Icons -->
          <li class="nav-item mr-3 mr-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item mr-3 mr-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <!-- Icon dropdown -->
          <li class="nav-item mr-3 mr-lg-0 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Login</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>



				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->



<body>
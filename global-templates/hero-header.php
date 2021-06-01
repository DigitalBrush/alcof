<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

		<div class="container-fluid" id="wrapper-static-content" tabindex="-1">

			<div class="row hero-header">
				<div class="col-sm-6 hero-text">
					<div class="slider-text">
						<h2 class="big-heading"><?php the_field('titre_principal', 'option'); ?></h2>
						<div class="slider-body">
							<p class="hero-intro-text"><?php the_field('paragraphe_principal', 'option'); ?></p>
							<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-secondary"><?php the_field('bouton_principal', 'option'); ?></a>
						</div>
						<h4 class="small-heading"><?php the_field('sous-titre_principal', 'option'); ?></h4>
					</div>
				</div>
				<div class="col-sm-6 hero-image">
					<div class="slider-image">
						<img src="<?php the_field('image_principale', 'option'); ?>" id="hero-header-img"/>
					</div>
					<div class="slider-logo">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-fichet.svg"/>
					</div>
				</div>
			</div>

	</div>

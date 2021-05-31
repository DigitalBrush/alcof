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

			<div class="row section-location">
				<div class="col-sm-6 location-content">
					<div class="location-text">
						<h3 class="text-heading"><span class="main-color">10 boutiques</span> en Ile-de-France, plus de <span class="main-color">1000m²</span> de showroom</h3>
						<div class="text-body">
							<p class=""><?php the_field('carte_section_paragraphe', 'option'); ?></p>
							<a href="<?php echo esc_url(home_url('produits')); ?>" class="btn btn-lg btn-primary"><span class="material-icons">near_me</span><?php the_field('carte_section_bouton', 'option'); ?></a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 location-map">
					<div class="map-block">
						<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('lien_google_map', 'option'); ?>"></iframe>
					</div>
				</div>
			</div>
	</div>

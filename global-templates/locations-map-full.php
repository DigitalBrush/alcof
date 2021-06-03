<?php
/**
 * Full Width Map
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

		<div class="container-fluid" id="wrapper-static-content" tabindex="-1">

			<div class="section-location">
				<div class="location-map">
					<div class="map-block">
						<iframe width="100%" height="100%" class="responsive-iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('lien_google_map', 'option'); ?>"></iframe>
					</div>
				</div>
			</div>


	</div>

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

		<div class="container-fluid p-0" id="wrapper-static-content" tabindex="-1">

			<div class="section-location">
				<div class="location-map">
					<div class="map-block">
						<?php $boutique_adresse = get_field('boutique_adresse');
						$mapaddress = preg_replace('/\s+/', '+', trim($boutique_adresse)); ?>
						<img width="100%" height="100%" class="responsive-iframe" src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $mapaddress; ?>&zoom=13&map_id=e2bace0e1c307d8c&scale=2&size=1000x600&maptype=roadmap&key=AIzaSyD2n_ZpgnIlH0p1ZblXSKswdJJgLOXl3_Y&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xf77818%7Clabel:%7C<?php echo $mapaddress; ?>"/>
					</div>
				</div>
			</div>


	</div>

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
						<?php $boutique_adresse = get_field('boutique_adresse'); ?>
						<iframe width="100%" height="100%" class="responsive-iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $boutique_adresse; ?>&zoom=13&size=600x300&maptype=roadmap&markers=color:orange%7Clabel:S%7C48.84109808119936,2.2915690052985025&key=AIzaSyD2n_ZpgnIlH0p1ZblXSKswdJJgLOXl3_Y"></iframe>"></iframe>
					</div>
				</div>
			</div>


	</div>

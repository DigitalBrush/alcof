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

	<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
		<div class="page-section">

			<h3 class="section-title">Que voulez-vous protéger ?</h3>
			<div class="row section-services">

				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="service-image">
							<img class="img-fluid" src="<?php the_field('emplacement_une_image', 'option'); ?>" />
						</div>
						<div class="service-desc">
							<h4 class="title"><?php the_field('emplacement_un_titre', 'option'); ?></h4>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="service-image">
							<img class="img-fluid" src="<?php the_field('emplacement_deux_image', 'option'); ?>" />
						</div>
						<div class="service-desc">
							<h4 class="title"><?php the_field('emplacement_deux_titre', 'option'); ?></h4>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="service-image">
							<img class="img-fluid" src="<?php the_field('emplacement_trois_image', 'option'); ?>" />
						</div>
						<div class="service-desc">
							<h4 class="title"><?php the_field('emplacement_trois_titre', 'option'); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="page-section media">
			<div class="media-coverage">
				<h5 class="section-title mute">Vu à la télé</h5>
				<?php echo do_shortcode('[gslogo id=2]'); ?>
			</div>
		</div>
	</div>

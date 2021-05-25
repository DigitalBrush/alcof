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

	<section class="content-section">
		<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
				<h2 class="section-title">Que voulez-vous protéger ?</h2>
				<div class="row section-services">

					<div class="col-md-6 col-lg-4">
						<div class="single-service">
							<div class="service-image">
							<img class="img-fluid" src="<?php echo get_option('protect_img1');?>" />
							</div>
							<div class="service-desc">
								<h4 class="title"><?php echo get_option('protect_item1');?></h4>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4">
						<div class="single-service">
							<div class="service-image">
								<img class="img-fluid" src="<?php echo get_option('protect_img2');?>" />
							</div>
							<div class="service-desc">
								<h4 class="title"><?php echo get_option('protect_item2');?></h4>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4">
						<div class="single-service">
							<div class="service-image">
								<img class="img-fluid" src="<?php echo get_option('protect_img3');?>" />
							</div>
							<div class="service-desc">
								<h4 class="title"><?php echo get_option('protect_item3');?></h4>
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
	</section>
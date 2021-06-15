<?php
/**
 * Home Bootom Carousel
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="container-fluid" id="wrapper-static-content" tabindex="-1">
		<div class="row hero-footer">
			<div class="col-sm-6 hero-image">
				<div class="slider-image animated-slider-image">
					<img class="img-fluid" src="<?php the_field('locations_image', 'option'); ?>" />
				</div>
			</div>
			<div class="col-sm-6 hero-text">
				<div class="row owl-carousel owl-theme home-bottom-carousel">
					<div class="col-sm-12">
						<div class="content-block">
							<h3>Le plus grand Point Fort Fichet d’Europe</h3>
							<p>Lorsque Roger Bonhomme crée son entreprise en 1985, Alcof Sécurité l'aventure de la sécurité commençait. Progressivement, notre entreprise est devenue plus importante pour, à l'orée du XXIe siècle, faire ses premiers pas à l'international. Depuis, Alcof Sécurité est l'un des acteurs les plus importants de la scène européenne et un grand nom partout dans le monde, dans le secteur de la sécurité.</p>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="content-block">
							<h3>Le plus grand Point Fort Fichet d’Europe</h3>
							<p>Lorsque Roger Bonhomme crée son entreprise en 1985, Alcof Sécurité l'aventure de la sécurité commençait. Progressivement, notre entreprise est devenue plus importante pour, à l'orée du XXIe siècle, faire ses premiers pas à l'international. Depuis, Alcof Sécurité est l'un des acteurs les plus importants de la scène européenne et un grand nom partout dans le monde, dans le secteur de la sécurité.</p>
						</div>
					</div>

					<div class="col-sm-12">
						<div class="content-block">
							<h3>Le plus grand Point Fort Fichet d’Europe</h3>
							<p>Lorsque Roger Bonhomme crée son entreprise en 1985, Alcof Sécurité l'aventure de la sécurité commençait. Progressivement, notre entreprise est devenue plus importante pour, à l'orée du XXIe siècle, faire ses premiers pas à l'international. Depuis, Alcof Sécurité est l'un des acteurs les plus importants de la scène européenne et un grand nom partout dans le monde, dans le secteur de la sécurité.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

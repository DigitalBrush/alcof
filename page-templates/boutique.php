<?php
/**
 * Template Name: Boutique
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div id="full-width-page-wrapper">

	<div class="service-page boutique"  id="content" >
		<?php
			get_template_part( 'global-templates/locations-map-full' );
		?>

			<div class="container content-area" id="primary">
				
				<main class="site-main" id="main" role="main">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-sm-8">
								<div class="block-float top mb-5">
									<a href="tel:0890102030" target="_blank" rel="noopener"><span class="material-icons">phone</span>01 45 85 78 96</a>
								</div>

								<h2>Serrurier Point Fort Fichet<br/>Paris 16</h2>

								<div class="body-tags">
									<div class="btn btn-tag">
										<span class="material-icons">build</span> dépannage 24h/24
									</div>
									<div class="btn btn-tag">
										<span class="material-icons">meeting_room</span> Actuellement ouvert
									</div>
								</div>

								<div class="location-table">
									<table class="woocommerce-product-attributes shop_attributes">
										<tbody>
											<tr>
												<th>Lundi-vendredi</th>
												<td><p>8:00 - 19:00</p></td>
											</tr>
											<tr>
												<th>Samedi</th>
												<td><p>9:00 - 18:00</p></td>
											</tr>
											<tr>
												<th>Dimanche</th>
												<td><p>Fermé sauf dépannage</p></td>
											</tr>
										</tbody>
									</table>
								</div>

								<p>Afin de vous sentir protéger dans votre appartement à Paris 16 et de vous prévenir contre les cambrioleurs et les effractions, nous vous conseillons l’installation de porte blindée Fichet. Que vous habitiez une maison ou un appartement, avec une porte Fichet, vous choisissez la haute sécurité pour votre maison. Certifiée A2P, la porte blindée Fichet est beaucoup plus durable qu'une porte conventionnelle car elle est équipée d'un bloc de porte avec un cadre en acier et une serrure multipoints. Avec ses cylindres métalliques et son blindage renforcé, la porte blindée Fichet est garantie antieffraction. Elle est ainsi beaucoup plus résistantes face aux cambriolages. Conçue pour votre confort, cette porte est dotée d'une isolation thermique et phonique. Alcof Sécurité vous recommande la pose de porte blindée</p>

								<div class="number-body mt-5">
									<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-primary"><span class="material-icons">call</span>Contactez-nous</a>
								</div>
							</div>
							<div class="col-sm-12">

								<div class="location-gallery">
									
									<div class="row owl-carousel owl-theme location-carousel">
										<div class="col-sm-12">
											<div class="content-block">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-paris-16.png" class="img-fluid">
											</div>
										</div>

										<div class="col-sm-12">
											<div class="content-block">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-paris-16.png" class="img-fluid">
											</div>
										</div>

										<div class="col-sm-12">
											<div class="content-block">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-paris-16.png" class="img-fluid">
											</div>
										</div>

									</div>
								</div>

							</div>

							<div class="col-sm-8">
								<div class="content-block start">

									<p>Si vous souhaitez renforcer encore la sécurité de votre habitation à Paris 16, nous disposons d'une large gamme de dispositifs de protection : rideaux métalliques, stores, volets roulants, coffres forts, alarmes électroniques, serrures de tous types et de toutes les marques, etc. Nos produits haute sécurité, répondent aux normes des certifications APSAD et NF SERVICE.</p>

									<p>Les certifications APSAD sont des certifications de services. Elles sont attribuées à des entreprises dont la compétence et les moyens permettent d’offrir des prestations d’installation et de maintenance de qualité. La certification est délivrée après audits, contrôles de connaissances et vérifications en clientèle des prestations fournies. Des contrôles périodiques sont effectués pour son maintien. Dans le domaine de l’installation et de la maintenance des systèmes électroniques de sécurité, APSAD est délivrée conjointement avec la marque NF Service, attribuée par AFNOR Certification.</p>

									<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-primary mb-4"><span class="material-icons">description</span> obtenir un devis</a>

									<p>Nous possédons également un service artisanal de reproduction de clés. Si votre porte est verrouillée de l’intérieur, faites appel à notre service et nous vous transmettrons un double des clés. </p>

									<p>Alcof Sécurité, en tant que serrurier professionnel, vous propose un service de dépannage serrurier d'urgence si vous avez un problème pour ouvrir votre porte. Suite à votre appel, nos agents de dépannage interviennent rapidement et sont en mesure de faire face à toutes les situations : serrure et cylindre cassés, porte claquée, porte bloquée, clé perdue. De la cueillette au déverrouillage en passant par la reproduction des clés, notre service de dépannage rapide vous offrira la solution qui vous convient le mieux. </p>

								</div>
							</div>


							<div class="col-sm-12">

								<hr class="block-separator">
								<div class="marques">
									<h6>Nos marques disponibles</h6>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/marques1.png" class="img-fluid">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/marques2.png" class="img-fluid">
								</div>

								<hr class="block-separator">

							</div>

							<div class="col-sm-8">
								<div class="content-block last">
									<h3>Alcof Sécurité, tout pour votre sécurité, 59 avenue des Ternes, anciennement Ternes Protection.</h3>

									<p>Depuis 1985, le groupe Alcof est engagé dans l’aventure de la sécurité. Nous vous assurons un travail de qualité dans la sécurisation de votre logement ou entreprise mais aussi dans l’intervention rapide en cas de dépannage.</p>

									<p>Spécialiste en serrure, porte blindée haute sécurité, sur Paris 17 et en Île-de-France, nous intervenons 24h/24 et 7J/7 pour toute demande de dépannage serrurerie, remplacement de serrure, ouverture de porte.</p>

									<p>Si vous désirez obtenir des renseignements supplémentaires sur nos systèmes de sécurité, notre service de dépannage d’urgence, ou que vous souhaitez obtenir un audit sécurité appelez nous.</p>

									<div class="contact-info">
										<div class="d-block">
											<h4 class="pretitle"><span class="material-icons">phone</span>Telephone</h4>
											<a href="tel:01 45 05 15 12" target="_blank" rel="noopener">01 45 05 15 12</a>
										</div>
										<div class="d-block ml-5">
											<h4 class="pretitle"><span class="material-icons">mail</span>Email</h4>
											<a href="mailto:contact@alcof-securite.fr" target="_blank" rel="noopener">contact@alcof-securite.fr</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		<?php
			get_template_part( 'global-templates/locations-map-full' );
		?>

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();

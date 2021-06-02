<?php
/**
 * Template Name: Service Dépannage
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

	<div class="service-page depannage"  id="content" >
		<?php
			get_template_part( 'global-templates/page-header' );

		?>

			<div class="container content-area" id="primary">
				
				<main class="site-main" id="main" role="main">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-sm-8">
								<div class="block-float top mb-5">
									<a href="tel:0890102030" target="_blank" rel="noopener"><span class="material-icons">phone</span>01 45 85 78 96</a>
								</div>

								<h3>Intervention 24h/24 et 7j/7 Sur Paris et l’Ile-de-France</h3>

								<div class="body-tags">
									<div class="btn btn-tag">
										<span class="material-icons">build</span> des Spécialistes certifiés
									</div>
									<div class="btn btn-tag">
										<span class="material-icons">local_shipping</span> les Meilleurs délais
									</div>
								</div>

								<p>Quelle que soit votre demande notre service dépannage toutes marques 24h/24 assure des interventions de nuit et de week-end. Une équipe de dépanneurs, dotés de véhicules d’ateliers, ainsi que de véhicules rapides à deux roues, interviennent dans les plus brefs délais.</p>

								<p>Quel que soit le type de votre serrure (mécanique ou électronique) ou sa marque (Fichet, Mottura, Bricard, Heracles, Picard, Laperche…), nous intervenons dans les meilleurs délais pour vous apporter les solutions adaptées.</p>
								<?php
									while ( have_posts() ) {
										the_post();
										get_template_part( 'loop-templates/content', 'page' );
				
									}
								?>
							</div>
							<div class="col-sm-12">

								<hr class="block-separator">

								<div class="marques">
									<h6>Dépannage serrures toutes marques</h6>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/marques1.png" class="img-fluid">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/marques2.png" class="img-fluid">
								</div>

								<hr class="block-separator">

							</div>

							<div class="col-sm-8">
								<div class="content-block start">
									<h3>Certifications APSAD & NF SERVICE</h3>

									<p>Depuis près de vingt ans, Alcof Sécurité dispose d’équipes spécialisées sur ce type d’intervention. Tous nos techniciens sont formés en continu sur les spécificités de chaque fabricant de porte ou de serrure, et vous apportent savoir-faire et compétence.</p>
								</div>
							</div>

							<div class="col-sm-12">
								<div class="row certs">
									<div class="col">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-apsad.png" class="img-fluid">
									</div>
									<div class="col">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-NF-service.png" class="img-fluid">
									</div>
									<div class="col">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-CNPP.png" class="img-fluid">
									</div>
									<div class="col">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-NF.png" class="img-fluid">
									</div>
								</div>
							</div>

							<div class="col-sm-8">
								
								<p>S’il s’agit d’une tentative d’effraction, n’oubliez pas, d’en faire part à votre assurance qui sera à même, de prendre en charge le dépannage. Notre société est agréée par les compagnies d’assurance (Groupama, Axa, Macif, GMF, etc.).</p>

								<div class="block-float body mb-5">
									<a href="tel:0890102030" target="_blank" rel="noopener"><span class="material-icons">phone</span>01 45 85 78 96</a>
								</div>

							</div>

							<div class="col-sm-12">

								<hr class="block-separator">
								<h6>Agréé toutes compagnies d’assurance</h6>
								<div class="marques-assurance">
									<div class="row row-assurance">
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-axa.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-inter-mutuelles-assistance.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Mondial-assistance.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-assurance-1.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Matmut.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Groupama.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-GMF.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-MAAF.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-CIC-banques.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-euro-assurance.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-BNP-Paribas-bw.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Generali.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Direct-assurance.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Macif.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Assu-2000.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-SwissLife.png" class="img-fluid">
										</div>
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-MMA.png" class="img-fluid">
										</div>
										
										<div class="col-sm-3">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Allianz.png" class="img-fluid">
										</div>

									</div>
								</div>

								<hr class="block-separator">

							</div>

						</div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();

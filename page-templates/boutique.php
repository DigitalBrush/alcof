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

								<h2>Serrurier Point Fort Fichet<br/>
									<?php $boutique_titre = get_field('boutique_titre');  
									if($boutique_titre)  { ?>
										<?php echo $boutique_titre; ?>
									<?php } ?>
								
								</h2>

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

											<?php $heures_en_semaine = get_field('heures_en_semaine');  
											if($heures_en_semaine)  { ?>
											<tr>
												<th>Lundi-vendredi</th>
												<td>
													<p>
														
															<?php echo $heures_en_semaine; ?>
														
													</p>
												</td>
											</tr>
											<?php } ?>

											<?php $horaires_du_samedi = get_field('horaires_du_samedi');  
											if($horaires_du_samedi)  { ?>
											<tr>
												<th>Samedi</th>
												<td>
													<p><?php echo $horaires_du_samedi; ?></p>
												</td>
											</tr>
											<?php } ?>
											<tr>
												<th>Dimanche</th>
												<td><p>Fermé sauf dépannage</p></td>
											</tr>
										</tbody>
									</table>
								</div>

								<p><?php the_field('boutique_description'); ?></p>

								<div class="number-body mt-5">
									<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-primary"><span class="material-icons">call</span>Contactez-nous</a>
								</div>
							</div>
							<div class="col-sm-12">

								<div class="location-gallery">

									<?php $images = get_field('boutique_galerie');
									if( $images ): ?>
										<div class="row owl-carousel owl-theme location-carousel">
											
												<?php foreach( $images as $image ): ?>
													<div class="col-sm-12">
												<div class="content-block">
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														</div>
											</div>
												<?php endforeach; ?>
												
										</div>
									<?php endif; ?>

								</div>

							</div>

							<div class="col-sm-12">
								<div class="alcof-reviews">
									<?php  do_action( 'wprev_pro_plugin_action', 1 );  ?>
								</div>
							</div>

							<div class="col-sm-8">
								<div class="content-block start">

									<p><?php the_field ('boutique_paragraph_1'); ?></p>

									<a href="<?php echo esc_url(home_url('contact')); ?>" class="btn btn-lg btn-primary mb-4"><span class="material-icons">description</span> obtenir un devis</a>

									<p><?php the_field ('boutique_paragraph_2'); ?></p>

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
									<h3><?php the_field ('boutique_historie_titre'); ?></h3>

									<p><?php the_field ('boutique_historie'); ?></p>

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

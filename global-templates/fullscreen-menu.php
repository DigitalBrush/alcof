<?php
/**
 * Fullscreen menu
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

	?>

  <div aria-hidden="true" aria-labelledby="menuOverlayLabel" class="modal fade fullscreen-menu" id="menuOverlay" role="dialog" tabindex="-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="material-icons">close</span></button>
				</div>
				<div class="modal-body">
					<div class="container-fluid nav-overlay">
						<div class="row h-100">
							<div class="col-sm-3">
                				<span class="menu-heading">Tous nos produits</span>
							</div>
							<div class="col-sm nav-column">
								<a class="nav-full-item" href="<?php echo esc_url(home_url('produits-catégorie/porte-blindee')); ?>">
									<div class="nav-full-icon">
										<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-porte-blinde.svg"/>
									</div>
									<div class="nav-full-link">
										Porte blindée
									</div>
								</a>
								<a class="nav-full-item" href="<?php echo esc_url(home_url('produits-catégorie/alarme')); ?>">
									<div class="nav-full-icon">
										<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-alarme.svg"/>
									</div>
									<div class="nav-full-link">
										Alarme
									</div>
								</a>
								<a class="nav-full-item" href="<?php echo esc_url(home_url('produits-catégorie/coffre-fort')); ?>">
									<div class="nav-full-icon">
										<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-coffre-fort.svg"/>
									</div>
									<div class="nav-full-link">
										Coffre-fort
									</div>
								</a>
								<a class="nav-full-item" href="<?php echo esc_url(home_url('#')); ?>">
									<div class="nav-full-icon">
										<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-syndics.svg"/>
									</div>
									<div class="nav-full-link">
										Produits pour syndics
									</div>
								</a>
							</div>
							<div class="col-sm nav-column">
								<a class="nav-full-item" href="<?php echo esc_url(home_url('produits-catégorie/serrurerie')); ?>">
									<div class="nav-full-icon">
										<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-serrure.svg"/>
									</div>
									<div class="nav-full-link">
										Serrure
									</div>
								</a>
								<a class="nav-full-item" href="<?php echo esc_url(home_url('produits-catégorie/videosurveillance')); ?>">
									<div class="nav-full-icon">
										<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-surveillance.svg"/>
									</div>
									<div class="nav-full-link">
										Vidéosurveillance
									</div>
								</a>
								<a class="nav-full-item" href="<?php echo esc_url(home_url('#')); ?>">
									<div class="nav-full-icon">
										<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-menuiserie.svg"/>
									</div>
									<div class="nav-full-link">
										Menuiserie
									</div>
								</a>
								<a class="nav-full-item" href="<?php echo esc_url(home_url('boutiques')); ?>">
									<div class="nav-full-icon">
										<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/icon-boutique.svg"/>
									</div>
									<div class="nav-full-link">
										Sécurité des boutiques
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>

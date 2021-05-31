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
					<div class="container nav-overlay">
						<div class="row">
							<div class="col-sm">
                <h2 class="menu-heading">Tous nos produits</h2>
							</div>
							<div class="col-sm">
                <div class="nav-full">
                  <div class="nav-full-icon">
                    One of three columns
                  </div>
                  <div class="nav-full-item">
                    One of three columns
                  </div>
                </div>
							</div>
							<div class="col-sm">
								One of three columns
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a class="btn btn-lg btn-primary" href="%3C?php%20echo%20esc_url(home_url('contact'));%20?%3E"><span class="material-icons">call</span><?php the_field('home_bouton_modal', 'option'); ?></a>
					<p>pour en profiter</p>
				</div>
			</div>
		</div>
	</div>

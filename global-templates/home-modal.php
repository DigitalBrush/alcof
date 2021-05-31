<?php
/**
 * Homepage Popup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

	?>

<div class="modal fade" id="homeModal" tabindex="-1" role="dialog" aria-labelledby="homeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="" src="<?php the_field('home_image_modale', 'option'); ?>"/>
      </div>
      <div class="modal-footer">
        <a class="btn btn-lg btn-primary" href="<?php echo esc_url(home_url('contact')); ?>"><span class="material-icons">call</span><?php the_field('home_bouton_modal', 'option'); ?></a>
        <p>pour en profiter</p>
      </div>
    </div>
  </div>
</div>

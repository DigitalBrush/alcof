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

<div class="section accessories">
	<div class="container-fluid" id="wrapper-static-content" tabindex="-1"  >
		<div class="container">
			<div id="accordionstore">
			<?php 
				$images = get_field('accessoires');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $images ): ?>
				<div class="card">
					<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<button class="btn btn-tag" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Accessoires
						</button>
					</h5>
					</div>

					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionstore">
						<div class="card-body">
						
							<div class="row accessory-gallery">
								<?php foreach( $images as $image_id ): ?>
									<div class="col-sm-3">
										<?php echo wp_get_attachment_image( $image_id, $size ); ?>
									</div>
								<?php endforeach; ?>
							</div>
							
						</div>
					</div>
				</div>
				<?php endif; ?>

				<div class="card">
					<div class="card-header" id="headingTwo">
					<h5 class="mb-0">
						<button class="btn btn-tag collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Options
						</button>
					</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionstore">
					<div class="card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

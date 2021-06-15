<?php
/**
 * Services Page Slider
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

	<div class="<?php echo esc_attr( $container ); ?> services-slider" id="wrapper-static-content" tabindex="-1">
		<div class="page-section">

			<div class="services-section">
        <div class="row owl-carousel owl-theme services-carousel">

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php the_field('diagnostic_image', 'option'); ?>">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="<?php the_field('diagnostic_link', 'option'); ?>">En savoir plus</a>
              </div>

              <div class="service-inner">
                <h4 class="service-title"><?php the_field('diagnostic_title', 'option'); ?></h4>
                <h6 class="service-subtitle"><?php the_field('diagnostic_subtitle', 'option'); ?></h6>
                <p><?php the_field('diagnostic_description', 'option'); ?></p>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php the_field('installation_image', 'option'); ?>">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="<?php the_field('installation_link', 'option'); ?>">En savoir plus</a>
              </div>

              <div class="service-inner">
                <h4 class="service-title"><?php the_field('installation_title', 'option'); ?></h4>
                <h6 class="service-subtitle"><?php the_field('installation_subtitle', 'option'); ?></h6>
                <p><?php the_field('installation_description', 'option'); ?></p>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php the_field('serrurerie_image', 'option'); ?>">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="<?php the_field('serrurerie_link', 'option'); ?>">En savoir plus</a>
              </div>

              <div class="service-inner">
                <h4 class="service-title"><?php the_field('serrurerie_title', 'option'); ?></h4>
                <h6 class="service-subtitle"><?php the_field('serrurerie_subtitle', 'option'); ?></h6>
                <p><?php the_field('serrurerie_description', 'option'); ?></p>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php the_field('cles_image', 'option'); ?>">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="<?php the_field('cles_link', 'option'); ?>">En savoir plus</a>
              </div>

              <div class="service-inner">
                <h4 class="service-title"><?php the_field('cles_title', 'option'); ?></h4>
                <h6 class="service-subtitle"><?php the_field('cles_subtitle', 'option'); ?></h6>
                <p><?php the_field('cles_description', 'option'); ?></p>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="service-block">
              <div class="service-image">
                <img src="<?php the_field('financement_image', 'option'); ?>">
              </div>

              <div class="service-cta">
                <a class="btn btn-lg btn-primary" href="<?php the_field('financement_link', 'option'); ?>">En savoir plus</a>
              </div>

              <div class="service-inner">
                <h4 class="service-title"><?php the_field('financement_title', 'option'); ?></h4>
                <h6 class="service-subtitle"><?php the_field('financement_subtitle', 'option'); ?></h6>
                <p><?php the_field('financement_description', 'option'); ?></p>
              </div>
            </div>
          </div>


          <?php $num=get_option('service_num'); for($i=1;$i<$num;$i++):?>

            <div class="col-sm-12">
              <div class="service-block">
                <div class="service-image">
                  <img src="<?php echo get_option('s_img'.$i);?>">
                </div>

                <div class="service-cta">
                  <a class="btn btn-lg btn-primary" href="">En savoir plus</a>
                </div>

                <div class="service-inner">
                  <h4 class="service-title"><?php echo get_option('sh'.$i);?></h4>
                  <h6 class="service-subtitle"><?php echo get_option('ssh'.$i);?></h6>
                  <p><?php echo get_option('sd'.$i);?></p>
                </div>
              </div>
            </div>
          <?php endfor;?>



        </div>
      </div>  
		</div>
	</div>

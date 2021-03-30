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

	<div id="wrapper-static-content" tabindex="-1" >

		<section class="animate-section" style="background: url('<?php  
				echo get_the_post_thumbnail_url();
				?>'); background-size: cover; background-repeat: no-repeat; background-position-y: center;">
			<div class="container">
				<div class="row header-row">
					<div class="col-sm-6">
						<div class="header-text">
							<h1 class="headline"><?php echo wp_title(''); ?></h1>
							<h4 class="pretitle">40 ans d’experience à votre service</h4>
						</div>
					</div>
					<div class="about-text">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="animate-section">
			<div class="container about-contact-block" id="wrapper-static-content" tabindex="-1"  >
					<div class="row about-contact">
						<div class="col-md-9 block-left">
							<div class="block-left-content">
								<h1 class="heavy-weight">100,000</h1>
							</div>
							<div class="block-left-cta">
								<a class="btn btn-lg btn-primary" href=""><span class="material-icons">call</span>Contactez-nous</a>
							</div>
						</div>
						<div class="col-md-3 block-right">
							<p class="pretitle">particuliers et professionnels protégés</p>
						</div>
					</div>
			</div>
		</section>
		<section class="animated-section section dark negative-margin">
			<div class="container-fluid about-innovation" tabindex="-1">
				<div class="container">
					<div class="row innovation-content">
						<div class="col-md-8">
							<div class="row"> 
								<div class="col-md-12 mb-5">
									<h1 class="light-weight">L’innovation au service de ma sécurité</h1>
									<p class="pretitle">Des valeurs bien ancrées dans l’ADN d’aLCOF Sécurité</p>
								</div>
								<div class="col-md-7 mt-5 mb-5">
									<h2>Pionnier</h2>
									<p>Donec laoreet suscipit mi. Mauris leo orci, suscipit et orci et, tincidunt laoreet nisi. Integer sed nulla vulputate, condimentum erat vitae, interdum lectus. </p>
								</div>
								<div class="col-md-7 mt-5 mb-5">
									<h2>Rigoureux</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque volutpat cursus. Nullam aliquam erat sed erat hendrerit sagittis euismod id ligula. Ut ut nulla nunc donec massa.</p>
								</div>
								<div class="col-md-7 mt-5 mb-5">
									<h2>Ambitieux</h2>
									<p>Phasellus venenatis nisl tellus, sit amet scelerisque est venenatis nec. Integer non orci cursus, efficitur risus sed, rutrum orci. Sed pellentesque dignissim dui nec iaculis. Fusce libero nibh, suscipit posuere tincidunt dapibus.</p>
								</div>
								<div class="col-md-12 mb-5">
									<a class="btn btn-lg btn-primary" href=""><span class="material-icons">mail</span>Obtenir un devis</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

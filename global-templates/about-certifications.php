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

<div class="section negative-margin">
	<div class="container-fluid about-certification" tabindex="-1">
		<div class="container certification-header">
			<div class="row certification-content"> 
				<div class="col-md-8 mb-5">
					<h1 class="heavy-weight">35</h1>
					<h1 class="light-weight">Certifiés pour les meilleurs gages de qualité.</h1>
				</div>
			</div>
		</div>
		<div class="container certification-block">
			<div class="row certification-content">
				<div class="col-md-9">
					<div class="row"> 
						<div class="col-md-12 mt-5 mb-5">
							<h6>Nos certifications</h6>
							<div class="alcof-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link btn btn-tag active" id="cert-apsad-tab" data-toggle="tab" href="#cert-apsad" role="tab" aria-controls="cert-apsad" aria-selected="true">Apsad</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link btn btn-tag" id="cert-a2p-tab" data-toggle="tab" href="#cert-a2p" role="tab" aria-controls="cert-a2p" aria-selected="false">A2P</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link btn btn-tag" id="cert-nf-tab" data-toggle="tab" href="#cert-nf" role="tab" aria-controls="cert-nf" aria-selected="false">NF Services</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="cert-apsad" role="tabpanel" aria-labelledby="cert-apsad-tab">
										<p>Les certifications APSAD sont des certifications de services. Elles sont attribuées à des entreprises dont la compétence et les moyens permettent d’offrir des prestations d’installation et de maintenance de qualité.
										La certification est délivrée après audits, contrôles de connaissances et vérifications en clientèle des prestations fournies. Des contrôles périodiques sont effectués pour son maintien.</p>
										<p>Dans le domaine de l’installation et de la maintenance des systèmes électroniques de sécurité, APSAD est délivrée conjointement avec la marque NF Service, attribuée par AFNOR Certification.</p>
									</div>
									<div class="tab-pane fade" id="cert-a2p" role="tabpanel" aria-labelledby="cert-a2p-tab">
										<p>Les certifications A2P sont des certifications de services. Elles sont attribuées à des entreprises dont la compétence et les moyens permettent d’offrir des prestations d’installation et de maintenance de qualité.
										La certification est délivrée après audits, contrôles de connaissances et vérifications en clientèle des prestations fournies. Des contrôles périodiques sont effectués pour son maintien.</p>
										<p>Dans le domaine de l’installation et de la maintenance des systèmes électroniques de sécurité, APSAD est délivrée conjointement avec la marque NF Service, attribuée par AFNOR Certification.</p>
									</div>
									<div class="tab-pane fade" id="cert-nf" role="tabpanel" aria-labelledby="cert-nf-tab">
										<p>Les certifications NF Services sont des certifications de services. Elles sont attribuées à des entreprises dont la compétence et les moyens permettent d’offrir des prestations d’installation et de maintenance de qualité.
										La certification est délivrée après audits, contrôles de connaissances et vérifications en clientèle des prestations fournies. Des contrôles périodiques sont effectués pour son maintien.</p>
										<p>Dans le domaine de l’installation et de la maintenance des systèmes électroniques de sécurité, APSAD est délivrée conjointement avec la marque NF Service, attribuée par AFNOR Certification.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 mt-5 mb-5">
							<h2>Nous sommes également partenaires de nombreuses assurances.</h2>
						</div>
					</div>
					<div class="row owl-carousel owl-theme insurance-carousel">
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-AXA.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-inter-mutuelles-assistance.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Mondial-assistance.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-assurance-1.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Matmut.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Groupama.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-GMF.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-MAAF.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-CIC-banques.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-euro-assurance.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-BNP-Paribas-bw.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Generali.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Direct-assurance.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Macif.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Assu-2000.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-SwissLife.png" class="img-fluid">
						</div>
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-MMA.png" class="img-fluid">
						</div>
						
						<div class="cert-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/logo-Allianz.png" class="img-fluid">
						</div>
        			</div>
				</div>
			</div>
		</div>
	</div>
</div>

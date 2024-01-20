<?php
/**
* The template for displaying all pages.
* @package ancoracapital
*/

get_header(); ?>

<section class="mol--page-main" style="padding: 100px 0;">

	<div class="container">
		<div class="row">
			<div class="col-12 col-md-9">
				<h1><?php the_title();?></h1>
				<p>How do we update the navigation - we need 2x separate version.</p>
				<!-- A transparent white block / full width at 50-70% would work well on the background -->
				<a class="button atm--button-main" href="/labs">
					<span>Discover more</span><i class="fas fa-arrow-right"></i>
				</a>
			</div>
		</div>
	</div>
	<section>
		<div class="container-fluid" style="background:#111;">
			<div class="row g-0 d-flex">
				<div class="col-12 col-lg-6 align-self-center">
					<div class="d-flex justify-content-end">
						<figure>
							<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images//use-testpexels-thach-tran-756856.jpg">
						</figure>
					</div>
				</div>
				<div class="col-12 col-lg-6 align-self-center">
					<div style="padding:100px;color: white;">
						<h1>Ancora Partnerships</h1>
						<p><strong>Fusce at urna id tortor consectetur vestibulum ut nec eros.</strong></p>
						<p>Donec metus risus, bibendum nec neque egestas, vestibulum hendrerit ex. Vivamus at tempor quam. Praesent quis vulputate eros, in gravida ex.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

<?php get_footer(); ?>
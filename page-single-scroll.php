<?php
/**
* Template Name: Page - Single Scroll
* @package ancoracapital
*/

get_header(); ?>

<section class="templ--page-main">
	<section class="mol--page-main">

		<?php
		// Does this page have a slider with at least one image? If so, the slider replaces 'section_image'.
		$has_slider = false;
		foreach( (array) get_field('sp_builder') as $sp_row ) {
			foreach( (array) ($sp_row['section_builder'] ?? []) as $layout ) {
				if( ($layout['acf_fc_layout'] ?? '') === 'section_slider'
					&& ancoracapital_slider_urls($layout['section_slider_repeater'] ?? []) ) {
					$has_slider = true;
					break 2;
				}
			}
		}
		?>

		<?php if( have_rows('sp_builder') ): ?>
    		<?php while( have_rows('sp_builder') ): the_row(); ?>

				<!-- Start with replication of holding page-->
				<?php if(get_sub_field('section_title') ) : ?>
					<div><?php the_sub_field('section_title'); ?></div>
				<?php endif; ?>
				
				<section class="org--page-builder" id="<?php the_sub_field('section_id'); ?>">
					<?php while(has_sub_field('section_builder')): ?>
						
						<!-- Image slider (via https://splidejs.com/), logo fixed on top of the slides -->
						<?php if(get_row_layout() == 'section_slider'): ?>
							<?php $slides = ancoracapital_slider_urls( get_sub_field('section_slider_repeater') ); ?>
							<?php if( $slides ): ?>
								<section class="half--image-new block--slider">
									<div class="splide js--image-slider" aria-label="Ancora Capital Partners">
										<div class="splide__track">
											<ul class="splide__list">
												<?php foreach( $slides as $slide_url ): ?>
													<li class="splide__slide">
														<div class="block--half-container" style="background-image: url(<?php echo esc_url($slide_url); ?>);"></div>
													</li>
												<?php endforeach; ?>
											</ul>
										</div>
									</div>

									<div class="block--half-inner">
										<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-acp-logo-white.png" alt="Ancora Capital Parters">
									</div>
								</section>
							<?php endif; ?>
						<?php endif; ?>

						<!-- Add conditional for logo (fallback: only shown when the page has no slider images) -->
						<?php if(get_row_layout() == 'section_image' && ! $has_slider): ?>
						    <section class="half--image-new">
					            <div class="block--half-container" style="background-image: url(<?php the_sub_field('sp_image')?>);">
					                <div class="row justify-content-center">
					                	<div class="col-12">
					            			<div class="block--half-inner">
					            				<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-acp-logo-white.png" alt="Ancora Capital Parters">
					            			</div>
					                	</div>
					                </div>
					            </div>
						    </section>
						<?php endif; ?>

						<?php if(get_row_layout() == 'section_callout'): ?>

							<?php if(get_sub_field('sp_callout_align') == 'aligncenter') { ?>
					    		<section class="block--callout text-center">
					    	<?php } elseif(get_sub_field('sp_callout_align') == 'alignleft') { ?>
					    		<section class="block--callout">
					    	<?php } ?>

					    		<?php if(get_sub_field('sp_theme_select') == 'themelight')  { ?>
									<div class="mol--theme-light">
								<?php } elseif(get_sub_field('sp_theme_select') == 'themelight') { ?>
									<div class="mol--theme-dark">
								<?php } ?>
										<div class="mol---block-callout">
											<div class="container">
												<div class="row justify-content-center">
													<div class="col-12 col-md-10">
														<?php if(get_sub_field('sp_callout_title')) : ?>
															<h2><?php the_sub_field('sp_callout_title'); ?></h2>
														<?php endif; ?>
														<span><?php the_sub_field('sp_callout'); ?></span>
													</div>
												</div>
											</div>
										</div>
									</div>

							</section>
						<?php endif; ?>

						<?php if(get_row_layout() == 'section_5050'): ?>
							<section class="block--5050">
								<?php if(get_sub_field('sp_theme_select') == 'themelight')  { ?>
									<div class="mol--theme-light">
								<?php } elseif(get_sub_field('sp_theme_select') == 'themelight') { ?>
									<div class="mol--theme-dark">
								<?php } ?>
									<div class="container-fluid">
										<?php if(get_sub_field('sp_image_position') == 'imageleft' ) { ?>
											
												<div class="row g-0 d-flex">
													<div class="col-12 col-lg-6 align-self-center order-1">
														<div class="d-flex justify-content-end">
															<figure>
																<img class="mw-100" src="<?php the_sub_field('sp_image_file'); ?>">
															</figure>
														</div>
													</div>
													<div class="col-12 col-lg-6 align-self-center order-2">
														<div class="mol--5050">
															<?php if(get_sub_field('sp_title')) : ?>
																<h2><?php the_sub_field('sp_title'); ?></h2>
															<?php endif; ?>
															<div>
																<?php the_sub_field('sp_paragraph'); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										<?php } elseif(get_sub_field('sp_image_position') == 'imageright') { ?>
											<div class="row g-0 d-flex">
												<div class="col-12 col-lg-6 align-self-center order-2 order-lg-1 d-flex">
													<div class="mol--5050 ms-auto">
														<?php if(get_sub_field('sp_title')) : ?>
															<h2><?php the_sub_field('sp_title'); ?></h2>
														<?php endif; ?>
														<div>
															<?php the_sub_field('sp_paragraph'); ?>
														</div>
													</div>
												</div>
												<div class="col-12 col-lg-6 align-self-center order-1 orderlg-2">
													<div class="d-flex">
														<figure>
															<img class="mw-100" src="<?php the_sub_field('sp_image_file'); ?>">
														</figure>
													</div>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</section>
						<?php endif; ?>

						<?php if(get_row_layout() == 'section_template'): ?>
						 	<?php if (get_sub_field('sp_template') === 'selectteam') : ?>
						 		<section class="block--team">
									<div class="container">
										<div class="row justify-content-center">
											<div class="col-12 col-md-10">
												<?php get_template_part ('template-parts/unit-team'); ?>
											</div>
										</div>
									</div>
								</section>
						 	<?php endif; ?>
						<?php endif; ?>

					<?php endwhile; ?>
				</section>

			<?php endwhile; ?>
		<?php endif; ?>

	</section>
</section>

<?php get_footer(); ?>
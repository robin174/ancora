<?php while(has_sub_field('page_builder')): ?>

	<section class="org--page-builder">

		<?php if(get_row_layout() == 'page_image'): // layout: Page Image - Full Width ?>
	        <section class="block--image">
		        <div class="container">
			        <div class="row justify-content-center">
			            <div class="col-12 col-md-12">
			                <figure>
			                    <img class="mw-100" src="<?php the_sub_field('unit_image'); ?>" alt="" />
			                </figure>
			            </div>
			        </div>
		    	</div>
	    	</section>
	    <?php endif; ?>

	    <?php if(get_row_layout() == 'page_callout'): // layout: Page Callout ?>
	    	<section class="block--callout">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-12">
							<span><?php the_sub_field('unit_callout'); ?></span>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>


		<?php if(get_row_layout() == 'page_5050'): // layout: Page 50/50 ?>
			<section class="block--5050">
				<div class="container-fluid">
					<div class="row g-0 d-flex">
						<div class="col-12 col-lg-6 align-self-center">
							<div class="d-flex justify-content-end">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('5050_image'); ?>">
								</figure>
							</div>
						</div>
						<div class="col-12 col-lg-6 align-self-center">
							<div style="padding:100px;color: white;">
								<?php if(get_sub_field('5050_title')) : ?>
									<h2><?php the_sub_field('5050_title'); ?></h2>
								<?php endif; ?>
								<div>
									<?php the_sub_field('5050_paragraph'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

	</section>

<?php endwhile; ?>

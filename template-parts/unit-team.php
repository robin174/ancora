<section class="block--team">
	<div class="row g-5">
		<?php
		    $args=array(
					'post_type' => 'people',
				'post_status' => 'publish',
				'order' => 'ASC',
		    );
		    $my_query = null;
		    $my_query = new WP_Query($args);
		    if( $my_query->have_posts() ) {
		    	while ($my_query->have_posts()) : $my_query->the_post(); ?>
		    		<div class="col-12 col-md-6">
						<h2><?php the_title(); ?></h2>
						<h4><?php the_field('people_position'); ?></h4>
						<p class="atm__intro"><?php the_field('people_introduction'); ?></p>
						<p><?php the_field('people_description');?></p>
					</div>
				<?php endwhile; }
			wp_reset_query(); ?>
	</div>
</section>
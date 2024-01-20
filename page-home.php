<?php
/**
* Template Name: Page - Home
* @package ancoracapital
*/

get_header(); ?>

<section class="templ--page-main">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4">
				<figure>
					<img class="mw-100" src="<?php the_field('homepage_logo');?>">
				</figure>
			</div>
			<div class="col-12 col-md-7">
				<h1 class="large"><?php the_field('homepage_large'); ?></h1>
				<div>
					<h3><span><?php the_field('homepage_introduction'); ?></span></h3>
					<?php the_field('homepage_description'); ?>
				</div>
				<div>
					<h4 class="ut--uc">Expertise</h4>
					<!-- repeater: expertise -->
					<p class="skills">Design&nbsp;•&nbsp;Innovation&nbsp;•&nbsp;Technology</p>
				</div>
				<div>
					<h4 class="ut--uc">Services</h4>
					<!-- repeater: services -->
					<p class="skills">Design&nbsp;•&nbsp;Development&nbsp;•&nbsp;Prototyping&nbsp;•&nbsp;UX/UI&nbsp;•&nbsp;Design Coaching</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
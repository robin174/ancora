<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package ancoracapital
*/ 
?>
		</main><!-- end main -->
		<footer>
			<div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mol--unit-logo">
                        	<div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/use-acp-logo.svg" alt="Ancora Capita Partners logo">
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<?php /* <div class="mol__unit-contact">
							<h4>Phone</h4>
							<span><?php the_field('acp_phone', 'option'); ?></span>
						</div> */ ?>
                        <div class="mol--unit-contact">
                        	<h4>Address</h4>
							<span><?php the_field('acp_address', 'option'); ?></span>
						</div>
						
					</div>
					<div class="col-12 col-md-6 offset-md-6 col-lg-3 offset-lg-0">
                        <?php /* <div class="mol__unit-contact">
                        	<h4>Email</h4>
							<span><a href="mailto:<?php the_field('acp_email', 'option'); ?>" title="Email <?php the_title();?>"><?php the_field('acp_email', 'option'); ?></a></span>
						</div> */ ?>
						<div class="mol--unit-contact">
							<h4>Social</h4>
							<!-- LinkedIn -->
							<?php if( get_field('acp_linkedin', 'option') ): ?>
								<a href="<?php the_field('acp_linkedin', 'option'); ?>" title="<?php bloginfo( 'name' ); ?> on LinkedIn" target="_blank"><i class="fa-brands fa-lg fa-linkedin"></i></a>
							<?php else: ?>
								<i class="fa-brands fa-lg fa-linkedin inactive"></i>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-12">
						<div class="mol--unit-disclaimer">
							<h6>Disclaimer</h6>
							<?php the_field('acp_disclaimer', 'option'); ?>
						</div>
					</div>
				<div>
				<div class="row">
					<div class="col-12">
						<div class="mol--unit-copyright">
							<p class="atm--copyright">&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php the_field('acp_copyright', 'option'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
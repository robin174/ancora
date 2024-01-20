<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package ancoracapital
*/ 
?>
		</main><!-- end main -->
		<footer>
			<div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mol__unit-whoweare">
							<blockquote>&ldquo;<?php the_field('f_con_quote', 'option'); ?>&rdquo;
								<cite><?php the_field('f_con_quote_cite', 'option'); ?>
									<span class="context"><?php the_field('f_con_quote_cite_con', 'option'); ?></span>
								</cite>
							</blockquote>
						 	<p class="atm__copyright">&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php the_field('f_con_copyright', 'option'); ?></p>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<div class="mol__unit-contact">
							<h4>Phone</h4>
							<span><?php the_field('f_con_phone', 'option'); ?></span>
						</div>
                        <div class="mol__unit-contact">
                        	<h4>Address</h4>
							<span><?php the_field('f_con_address', 'option'); ?></span>
						</div>
					</div>
					<div class="col-12 col-md-6 offset-md-6 col-lg-3 offset-lg-0">
                        <div class="mol__unit-contact">
                        	<h4>Email</h4>
							<span><a href="mailto:<?php the_field('f_con_email', 'option'); ?>" title="Email <?php the_title();?>"><?php the_field('f_con_email', 'option'); ?></a></span>
						</div>
						<div class="mol__unit-contact">
							<h4>Social</h4>
							<!-- Facebook -->
							<?php if( get_field('f_con_facebook', 'option') ): ?>
								<a href="<?php the_field('f_con_facebook', 'option'); ?>" title="<?php bloginfo( 'name' ); ?> on Facebook" target="_blank"><i class="fa-brands fa-lg fa-facebook"></i></a>
							<?php else: ?>
								<i class="fa-brands fa-lg fa-facebook inactive"></i>
							<?php endif; ?>
							<!-- Twitter -->
							<?php if( get_field('f_con_twitter', 'option') ): ?>
								<a href="<?php the_field('f_con_twitter', 'option'); ?>" title="<?php bloginfo( 'name' ); ?> on Twitter" target="_blank"><i class="fa-brands fa-lg fa-x-twitter"></i></a>
							<?php else: ?>
								<i class="fa-brands fa-lg fa-x-twitter inactive"></i>
							<?php endif; ?>
							<!-- Instagram -->
							<?php if( get_field('f_con_instagram', 'option') ): ?>
								<a href="<?php the_field('f_con_instagram', 'option'); ?>" title="<?php bloginfo( 'name' ); ?> on Instagram" target="_blank"><i class="fa-brands fa-lg fa-instagram"></i></a>
							<?php else: ?>
								<i class="fa-brands fa-lg fa-instagram inactive"></i>
							<?php endif; ?>
							<!-- LinkedIn -->
							<?php if( get_field('f_con_linkedin', 'option') ): ?>
								<a href="<?php the_field('f_con_linkedin', 'option'); ?>" title="<?php bloginfo( 'name' ); ?> on LinkedIn" target="_blank"><i class="fa-brands fa-lg fa-linkedin"></i></a>
							<?php else: ?>
								<i class="fa-brands fa-lg fa-linkedin inactive"></i>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-12">
						<div class="mol__unit-disclaimer">
							<h6>Diclaimer</h6>
								<p>This presentation is confidential and may not be distributed, transmitted or otherwise communicated to others, in whole or in part, without the express consent of Ancora Capital Partners (“Ancora”).</p>
								<p>Ancora makes no representation or warranty, expressed or implied, with respect to the accuracy, reasonableness, or completeness of any of the information contained herein, including, but not limited to, information obtained from third parties. The information contained herein is not intended to provide, and should not be relied upon for, accounting, legal or tax advice or investment recommendations. Recipients should make an independent investigation of the investment or project described herein, including consulting their tax, legal, accounting or other advisors, about the matters discussed herein.</p>
								<p>Past performance is not indicative nor a guarantee of future returns. Certain information contained herein may be “forward-looking” in nature. Due to various risks and uncertainties, actual events or results or the actual performance of the Investment may differ materially from those reflected or contemplated in such forward-looking information. As such, undue reliance should not be placed on such information. Forward-looking statements may be identified by the use of terminology including, but not limited to, “may”, “will”, “should”, “expect”, “anticipate”, “target”, “project”, “estimate”, “intend”, “continue” or “believe” or the negatives thereof or other variations thereon or comparable. Additional information may be available upon request.</p>
							</div>
						</div>
					</div>
				<div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
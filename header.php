<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package ancoracapital
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<!-- Ancora Capital Partners
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"><!-- What is this? -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" />

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-PNS2LBS4N4"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-PNS2LBS4N4');
		</script>

		<!-- Font: Icon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="https://kit.fontawesome.com/3798695583.js" crossorigin="anonymous"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> style="background-color:<?php the_field('acp_background_colour', 'option'); ?>;">
		<header> 
			<div class="container">
				<?php get_template_part('template-parts/nav-walker5'); ?>
			</div>
		</header>
		<main>

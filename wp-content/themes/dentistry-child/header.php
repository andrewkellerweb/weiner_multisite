<!DOCTYPE html>
<!--[if IE 8]>    <html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>    <html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->

<title><?php hybrid_document_title(); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='http://fonts.googleapis.com/css?family=Arvo:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600,700' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

</head>

<body id="root" class="<?php hybrid_body_class(); ?>" <?php tokokoo_body_attribute(); ?>>

	<?php
		// Activate warning message for IE users.
		tokokoo_ie_warning_message(); 
	?>
	
	<div class="site" id="page">

		<header id="masthead" class="site-header cl" role="banner">

			<div class="header-top">
			
				<div class="container">
					<?php tokokoo_site_title();?>

				</div><!-- .container -->
			</div><!-- End .header-top -->

			<div class="access-wrap">
				<div class="container">
					<?php get_template_part( 'menu', 'primary' ) ?>
				</div><!-- End .container -->
			</div><!-- End .access-wrap -->
			
			<?php get_template_part( 'content', 'slider' ); ?>


		</header><!-- End #masthead -->

		<div class="site-main" id="main">
			<div class="container">
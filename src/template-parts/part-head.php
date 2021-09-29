<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="apple-touch-icon-precomposed"  href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icon-114x114.png">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.gif">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">

	<?php wp_head(); ?>

	<?php
  	$site_typography = get_theme_mod( 'site_typography' );
  	if ($site_typography == "gotham") { ?><link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6831932/6125612/css/fonts.css" /><?php }; ?>
</head>

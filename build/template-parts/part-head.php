<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<?php
  	$site_typography = get_theme_mod( 'site_typography' );
  	if ($site_typography == "gotham") { ?><link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6831932/7665612/css/fonts.css" /><?php }; ?>
</head>
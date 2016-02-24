<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php remove_filter( 'the_content', 'wpautop' ); remove_filter( 'the_excerpt', 'wpautop' ); ?>
</head>
<body>


<div id="menubar"><a href="/">Simple Steps Code</a></div>
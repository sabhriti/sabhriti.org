<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="icon">

	<?php wp_head(); ?>
	<?php wp_enqueue_style( 'sabhriti', get_template_directory_uri() . '/assets/css/sabhriti.css', false, '1.1', 'all' ); ?>
	<?php wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.1', 'all' ); ?>
	<?php wp_enqueue_style( 'material-icons', get_template_directory_uri() . '/assets/css/material-icons.css', false, '1.1', 'all' ); ?>
</head>
<body class="d-flex flex-column h-100">

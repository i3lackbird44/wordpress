<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style/css/style.css'; ?>">
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
        <header class="site-header">
            <h1><a href="<?php echo home_url();?>"><?php bloginfo( 'name' ); ?></a></h1>
            <h4><?php bloginfo( 'description' ); ?></h4>
        </header>
        <h1>Header area</h1>
    
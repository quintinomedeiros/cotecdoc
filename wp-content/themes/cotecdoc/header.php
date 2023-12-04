<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/cotecdoc/wp-content/themes/cotecdoc/style.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    
    <!-- Cabeçalho -->
    <header class="site-header">
        <div class="menu-links">
            <a class="logo-camara" href="https://www.camara.leg.br/" target="_blank"><img src="https://www.camara.leg.br/tema/assets/images/logo-brand-camara-desktop.png" alt=""></a>
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <nav class="site-nav">
                <?php 
                    $args = array(
                        'theme_location' => 'header-menu'
                    )
                ?>
            <?php wp_nav_menu( $args ); ?>
        </nav>
        </div>

    </header>
    <!-- /Cabeçalho -->

    <!-- Conteúdo principal -->
    <main class="container">

        <div id="primary-inicial" class="content-area-inicial">

            <!-- Menu Lateral Responsivo -->
            <div class="sidebar">
                <div class="menu-toggle">&#9776;</div>
                
                <nav class="site-nav">
                    <?php 
                        $args = array(
                            'theme_location' => 'menu-lateral'
                        )
                    ?>
                    <?php wp_nav_menu( $args ); ?>
                </nav>

            </div>
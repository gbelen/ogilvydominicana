<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogilvy | Dominicana</title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/manifest.json">

    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon/ms-icon-144x144.png">    
    <!-- <meta name="description" content="Ogilvy es una red creativa integrada ganadora de premios que hace que las marcas importen, especializándose en la creación de experiencias, el diseño y las comunicaciones."> -->

    <?php wp_head(); ?>
</head>
<body class="bg-0">

    <nav class="navbar">
        <a id="logo-header1" class="navbar-brand hidden" href="<?php bloginfo('url'); ?>"></a>
        
        <div class="navbar-toggler ml-auto border-0 d-flex justify-content-center" data-toggle="collapse" data-target="" aria-controls=""
            aria-expanded="false" aria-label="menu">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <?php if( !is_home() ){ ?>
            <a href="#" onclick="javascript: history.back(-1)" style="font-size: 3rem; color: #e84148;">
                &larr;
            </a>
        <?php } ?>
    </nav>

    <div id="sidenav-menu" class="">
        <div id="bg-header" class="text-left d-md-none">
            <a id="logo-header2" class="navbar-brand" href="."></a>
        </div>
        <ul class="list-unstyled">
            <li class="active d-none">
                <a href="#inicio" class="p-0">Inicio</a>
            </li>
            <li>
                <a href="#trabajos" class="p-0">Trabajos</a>
            </li>
            <li>
                <a href="#clientes" class="p-0">Clientes</a>
            </li>
            <li>
                <a href="#lideres" class="p-0">Líderes</a>
            </li>
            <li>
                <a href="#servicios" class="p-0">Servicios</a>
            </li>
            <li>
                <a href="#somos" class="p-0">Somos</a>
            </li>
            <li>
                <a href="#contacto" class="p-0">Contacto</a>
            </li>
            <div id="info-menu" class="mt-3">
                <p class="py-4 mb-0">
                    C/ Maguá #3, Urb. Los Ríos,<br/>
                    Distrito Nacional, <br/>
                    República Dominicana <br><br>
                    
                    Teléfono:<br/>
                    <strong><a href="tel:+8094725050">(809) 472-5050</a></strong>
                </p>
            </div>

            <ul class="pull-right redes">
                <li class="fb"><a href="https://www.facebook.com/OgilvyDominicana" target="_blank"></a></li>
                <li class="tw"><a href="https://twitter.com/ogilvyrd" target="_blank"></a></li>
                <li class="ig"><a href="https://www.instagram.com/ogilvyrd/" target="_blank"></a></li>
            </ul>
        </ul>
    </div>
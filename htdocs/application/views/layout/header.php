<html>
    <head>
        <title>Mucoop</title>
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/normalize.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/style.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/sucursal.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/contacto.css." />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/form.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/profile.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/contacto.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/servicios.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/icomoon.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/login.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/ofertas.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/novedades.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/account.css" />
        
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/nivo-slider.css" />
        <link rel="stylesheet" href="<?php echo SITE_URL?>css/nivo-dark.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <script src="<?php echo SITE_URL?>js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo SITE_URL?>js/jquery.nivo.slider.pack.js"></script>
    </head>
    
    <body>
        <header>
            <div class="center">
                <a href="<?php echo SITE_URL?>"><img src="<?php echo SITE_URL?>img/logo2.png" class="logo"/></a>
                
                <ul class="menu">
                <li>
                    <a href="<?php echo SITE_URL?>institucional">Institucional</a>
                </li>
                <li>
                    <a href="<?php echo SITE_URL?>sucursales">Sucursales</a>
                </li>
                <li><a href="<?php echo SITE_URL?>servicios">Servicios</a></li>
                <li><a href="<?php echo SITE_URL?>ofertas">Ofertas y descuentos</a></li>
                <li><a href="<?php echo SITE_URL?>novedades">Novedades</a></li>
                <?php
                    if(!array_key_exists('name',$_SESSION)) {
                ?>
                <li><a href="#" id="login">Ingresar</a></li>
                <?php
                    }else{
                ?>
                    <li>
                        <a>Mi cuenta</a>
                        <ul class="submenu">
                            <li><a href="<?php echo SITE_URL?>users/account">Cuenta corriente</a></li>
                            <li><a href="<?php echo SITE_URL?>users/logout">Salir</a></li>
                        </ul>
                    </li>
                <?php
                    }
                ?>
                <li><a href="<?php echo SITE_URL?>contacto">Contacto</a></li>
            </ul>
            </div>
        </header>
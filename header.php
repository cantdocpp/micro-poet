<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MicroPoetry</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head() ?>
        <style type="text/css" media="screen">
            html { margin-top: 0px !important; }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="navigation">
            <div class="navbar__inner">
                <div class="site__logo"><a href="<?php echo get_site_url() ?>/">MicroPoetry</a></div>
                <div class="site__navigation">
                    <a href=" <?php echo get_site_url() ?>/haiku">Haiku</a>
                    <a href="<?php echo get_site_url() ?>/tanka">Tanka</a>
                    <a href="<?php echo get_site_url() ?>/collection">Collection</a>
                    <a href="<?php echo get_site_url() ?>/analect">Analect</a>
                </div>
            </div>
        </div>

        <div class="mobile__navigation mobile__nav">
            <div class="mobile__navigation-inner">
                <div class="site__logo"><a href="<?php echo get_site_url() ?>/">MicroPoetry</a></div>
                <div class="hamburger__menu">
                    <div class="one line"></div>
                    <div class="two line"></div>
                    <div class="three line"></div>
                </div>
            </div>
        </div>

        <div class="toggle__menu">
            <div class="toggle__inner">
                <div class="mobile__menu partial__container">
                    <a class="mobile__anchor" href=" <?php echo get_site_url() ?>/haiku">Haiku</a>
                    <a class="mobile__anchor" href="<?php echo get_site_url() ?>/tanka">Tanka</a>
                    <a class="mobile__anchor" href="<?php echo get_site_url() ?>/collection">Collection</a>
                    <a class="mobile__anchor" href="<?php echo get_site_url() ?>/analect">Analect</a>
                </div>
            </div>
        </div>        

        <div class="container">
            <div class="container__inner">
                

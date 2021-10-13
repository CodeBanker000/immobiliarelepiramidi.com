<?php
/***********************************************************************************
 *                              STRUTTURA HTML DELL'HEADER 
 ***********************************************************************************/
?>
<!DOCTYPE html>
<html lang="<?=LANG?>">
    <head>
        <meta charset="<?=CHARSET?>">
        <title><?=$this->title?></title>
        <link rel="shortcut icon" href="<?=URL.PATH_ICO?>favicon.ico" />
        <!-- [if !IE ]>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <![endif]-->
        <link href="<?=URL.PATH_CSS?>screen.css" rel="stylesheet" />
        <? if (isset($this->aside) && ($this->aside)) : ?>
            <link href="<?=URL.PATH_CSS?>aside.css" rel="stylesheet" />
        <? endif; ?>
        <link href="<?=URL.PATH_CSS?>admin.css" rel="stylesheet" />
        <!--[if IE 9]>
            <link href="css/IE/ie9.css" rel="stylesheet" media="screen" />
        <![endif]-->
        <!--[if IE 8]>
            <link href="css/IE/ie8.css" rel="stylesheet" media="screen" />
        <![endif]-->
        <!--[if IE 7]>
            <link href="css/IE/ie7.css" rel="stylesheet" media="screen" />
        <![endif]-->
        <script type="text/javascript" src="<?=URL.PATH_JS?>mootools.js"></script>
        <!--[if lt IE 9]>  
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="<?=URL.PATH_JS?>selectivizr.js"></script>
        <![endif]-->     
    </head>
    <body>
        <div id="headerContainer">
            <header id="testata" class="container clearfix">
                <section class="column_1_3">
                    <img src="../immagini/logo_piramidi.png" title="le piramidi" />
                </section>
                <section class="column_2_3">
                    <h2>Agenzia Immobiliare in Firenze</h2>
                    <div id="fiaip">
                        <h5>Associato: <img src="../immagini/fiaip.jpg"></h5>
                    </div>
                </section>
                <?php require_once "views/layout/menu.php"; ?>
            </header>
        </div>
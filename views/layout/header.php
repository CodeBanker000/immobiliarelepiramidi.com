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
        <? if (isset($this->aside)) : ?>
            <link href="<?=URL.PATH_CSS?>aside.css" rel="stylesheet" />
        <? endif; ?>
        <? if (isset($this->mutuo) && ($this->mutuo)) : ?>
            <link href="<?=URL.PATH_CSS?>telemutuokit.css" rel="stylesheet" />
        <? endif; ?>
        <? if (isset($this->sldShow) && ($this->sldShow)) : ?>
            <link href="<?=URL.PATH_CSS?>slideshow.css" rel="stylesheet" />
        <? endif; ?>
        <!--[if IE 9]>
            <link href="<?=URL.PATH_CSS?>ie/ie9.css" rel="stylesheet" media="screen" />
        <![endif]-->
        <!--[if IE 8]>
            <link href="<?=URL.PATH_CSS?>ie/ie8.css" rel="stylesheet" media="screen" />
        <![endif]-->
        <!--[if IE 7]>
            <link href="<?=URL.PATH_CSS?>ie/ie7.css" rel="stylesheet" media="screen" />
        <![endif]-->
        <script type="text/javascript" src="<?=URL.PATH_JS?>mootools.js"></script>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="<?=URL.PATH_JS?>selectivizr.js"></script>
        <![endif]-->
        <? if (isset($this->mutuo) && ($this->mutuo)) : ?>
            <script src="<?=URL.PATH_JS?>AC_RunActiveContent.js" language="javascript" type="text/javascript"></script>
        <? endif; ?>
        <? if (isset($this->sldShow) && ($this->sldShow)) : ?>
            <script type="text/javascript" src="<?=URL.PATH_JS?>slideshow.js"></script>
        <? endif; ?>
        <? if (isset($this->aside)) : ?>
            <script type="text/javascript" src="<?=URL.PATH_JS?>aside.js"></script>
        <? endif; ?>
        <? if (isset($this->dettagli) && ($this->dettagli)) : ?>
            <script type="text/javascript" src="<?=URL.PATH_JS?>dettagli.js"></script>
        <? endif; ?>
        <? if (isset($this->index) && ($this->index)) : ?>
            <script type="text/javascript" src="<?=URL.PATH_JS?>index.js"></script>
        <? endif; ?>
        <? if (isset($this->contatti) && ($this->contatti)) : ?>
            <script type="text/javascript" src="<?=URL.PATH_JS?>contatti.js"></script>
        <? endif; ?>
    </head>
    <body>
        <!-- Header -->
        <div id="headerContainer">
            <header id="testata" class="container clearfix">
                <section class="column_1_3">
                    <img src="<?=URL.PATH_IMG?>logo_piramidi.png" title="le piramidi" />
                </section>
                <section class="column_2_3">
                    <h2>Agenzia Immobiliare in Firenze</h2>
                    <div id="fiaip">
                        <h5>Associato: <img src="<?=URL.PATH_IMG?>fiaip.jpg"></h5>
                    </div>
                </section>
                <? require_once "menu.php"; ?>
            </header>
        </div>
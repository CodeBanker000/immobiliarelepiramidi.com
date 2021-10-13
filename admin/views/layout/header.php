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
        <script type="text/javascript" src="<?=URL.PATH_JS?>mootools-more.js"></script>
        <? if (isset($this->new) && ($this->new)) : ?>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
            <script type="text/javascript" src="<?=URL.PATH_JS?>nuovo.js"></script>
        <? endif; ?>
        <? if (isset($this->mod) && ($this->mod)) : ?>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
            <script type="text/javascript" src="<?=URL.PATH_JS?>modifica.js"></script>
        <? endif; ?>
        <? if (isset($this->fotoUpl) && ($this->fotoUpl)) : ?>
            <script type="text/javascript" src="<?=URL.PATH_JS?>upload.js"></script>
        <? endif; ?>
        <? if (isset($this->vetrina) && ($this->vetrina)) : ?>
            <script type="text/javascript" src="<?=URL.PATH_JS?>vetrina.js"></script>
        <? endif; ?>
        <? if (isset($this->gestioneZone) && ($this->gestioneZone)) : ?>
            <script type="text/javascript" src="<?=URL.PATH_JS?>zone.js"></script>
        <? endif; ?>
        <!--[if lt IE 9]>  
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="<?=URL.PATH_JS?>selectivizr.js"></script>
        <![endif]-->
        <script>
            var map;
            function initialize() {
                var via = $('address').value;
                
                geocoder = new google.maps.Geocoder();
                // il metodo geocode con la funzione di callback inline
                geocoder.geocode({'address': via}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var mapOptions = {
                            zoom: 15,
                            center: new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('mappa'),
                        mapOptions);
                        document.getElementById('latitude').value = results[0].geometry.location.lat();
                        document.getElementById('longitude').value = results[0].geometry.location.lng();
                    }
                });
              
            }

//            google.maps.event.addListener(window, 'load', initialize);
        </script>
    </head>
    <body>
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
                <?php require_once "views/layout/menu.php"; ?>
            </header>
        </div>
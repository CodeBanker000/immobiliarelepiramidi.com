<?php
/*************************************************************************************
 *                        STRUTTURA PAGINA CALCOLATRICE RATA MUTUO
 *************************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <?php require_once 'layout/aside.php'; ?>
    <h3 class="column_3_4">calcolatrice rata mutuo:</h3>
    <div class="column_3_4 row"></div>
    <section id="calcolatriceRataMutuo" class="column_3_4">
        <script language="javascript" type="text/javascript">
            if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
            } else {
		AC_FL_RunContent(
                    'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
                    'width', '655',
                    'height', '650',
                    'src', 'calcolo_rata',
                    'quality', 'high',
                    'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
                    'align', 'middle',
                    'play', 'true',
                    'loop', 'true',
                    'scale', 'showall',
                    'wmode', 'transparent',
                    'devicefont', 'false',
                    'id', 'calcolo_rata',
                    'name', 'calcolo_rata',
                    'menu', 'true',
                    'allowFullScreen', 'false',
                    'allowScriptAccess','sameDomain',
                    'movie', 'calcolo_rata',
                    'salign', ''
                    ); //end AC code
            }
        </script>
        <noscript>
            <object id="flash1" type="application/x-shockwave-flash" data="calcolo_rata.swf">
                <param name="movie" value="calcolo_rata.swf" />
            </object>				
        </noscript>
    </section>
</div>

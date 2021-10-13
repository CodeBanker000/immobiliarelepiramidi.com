<?php
/*************************************************************************************
 *                        STRUTTURA PAGINA CALCOLATRICE TASSO
 *************************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <?php require_once 'layout/aside.php'; ?>
    <h3 class="column_3_4">calcolatrice piano ammortamento:</h3>
    <div class="column_3_4 row"></div>
    <section id="pianoAmmortamento" class="column_3_4">
        <script language="javascript" type="text/javascript">
		if (AC_FL_RunContent == 0) {
                    alert("This page requires AC_RunActiveContent.js.");
		} else {
                    AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
                        'width', '655',
                        'height', '520',
                        'src', 'piano_ammortamento',
                        'quality', 'high',
                        'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
                        'align', 'middle',
                        'play', 'true',
                        'loop', 'true',
                        'scale', 'showall',
                        'wmode', 'transparent',
                        'devicefont', 'false',
                        'id', 'piano_ammortamento',
                        'name', 'piano_ammortamento',
                        'menu', 'true',
                        'allowFullScreen', 'false',
                        'allowScriptAccess','sameDomain',
                        'movie', 'piano_ammortamento',
                        'salign', ''
                        ); //end AC code
		}
	</script>
        <noscript>
            <object id="flash1" type="application/x-shockwave-flash" data="piano_ammortamento.swf">
                <param name="movie" value="piano_ammortamento.swf" />
            </object>				
        </noscript>
    </section>
</div>
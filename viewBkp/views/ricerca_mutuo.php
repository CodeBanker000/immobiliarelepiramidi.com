<?php
	error_reporting (E_ALL ^ E_NOTICE);
	if (isset ($_POST['TipoMutuo'])) {
		$xmlstr = grabUrl("http://telemutuo.accomazzi.net/preventivoxml.php?TipoMutuo=".
		$_POST['TipoMutuo'].
		'&Finalita='.$_POST['Finalita'].
		'&Durata='.$_POST['Durata'].
		'&Importo='.$_POST['Importo'].
		'&Valore='.$_POST['Valore'].
		'&Provincia='.$_POST['Provincia'].
		'&Destinatari='.$_POST['Destinatari'].
		'&miglior='.$_POST['miglior']	
		);
		$xmlarray = new SimpleXMLElement($xmlstr);
        $urlParams = '';
        foreach($_POST as $var => $val){
            $urlParams .= "$var=$val&";        
        }
        $urlParams = substr($urlParams, 0, -1);
    }

	if ('SI'==$xmlarray->Errore->Bloccante) {
		echo '
					<!--table Paolo-->
					<table class="tablototaRisposta" border="1" cellspacing="2" cellpadding="2">
					  <form id="formPrevent" name="formPrevent" action="telemutuo_m.php" method="post">
					    <input type="hidden" value="DipAut" name="Destinatari" />
					    <tbody> 
					    <tr> 
					      <th colspan="2">'.$xmlarray->Errore->Messaggio.'</th>
					      <td>&nbsp; </td>
					      <td width="100" style="color:#CC3300;"><a href="mutui.html">Nuovo Preventivo</a></td>
					    </tr>
					    </tbody> 
					  </form>
					</table>
		 ';
	}
	else {

echo '
					<!--table Paolo-->
					<table class="tablototaRisposta" border="1" cellspacing="2" cellpadding="2">
					  <form id="formPrevent" name="formPrevent" action="telemutuo.php" method="post">
					    <input type="hidden" value="DipAut" name="Destinatari" />
					    <tbody> 
					    <tr> 
					      <th colspan="2">'.$xmlarray->Sintetico->titolo.'</th>
					      <td>&nbsp; </td>
					      <td width="100" style="color:#CC3300;">
                          <span class="box-calcolataeg-p1"><a class="calcolataeg" onclick="window.open (\'http://www.telemutuo.it/preventivionline/calcolo_taeg_kit.php?'.$urlParams.'\',\'mywindow\', \'status=0,toolbar=0,width=730,height=870,menubar=0\');" href="#">Calcola TAEG</a></span><br />
                          <a href="javaScript:history.back()">Nuovo Preventivo</a></td>
					    </tr>
					    <tr> 
					      <th valign="top">'.$xmlarray->Sintetico->label1.'</th>
					      <td style="color:#CC3300; font-size:18px;"> '.$xmlarray->Sintetico->stringa1.' &euro; </td>
					      <td>&nbsp; </td>
					    </tr>
					    <tr> 
					      <th valign="top">'.$xmlarray->Sintetico->label2.'</th>
					      <td style="color:#CC3300; font-size:18px;"> '.$xmlarray->Sintetico->stringa2.' </td>
					      <td>&nbsp; </td>
					    </tr>
					    <tr> 
					      <th valign="top">'.$xmlarray->Sintetico->label3.'.</th>
					      <td style="color:#CC3300; font-size:13px;">'.$xmlarray->Sintetico->campo3.' </td>
					      <td>&nbsp; </td>
					    </tr>
					    <tr> 
					      <th valign="top">'.$xmlarray->Sintetico->label4.'</th>
					      <td>'.$xmlarray->Sintetico->campo4.'
					      </td>
					      <td>&nbsp; </td>
					    </tr>
					    <tr> 
					      <th valign="top">'.$xmlarray->Sintetico->label5.'</th>
					      <td>'.$xmlarray->Sintetico->campo5.'
					      </td>
					      <td>&nbsp; </td>
					    </tr>
					    </tbody> 
					  </form>
					</table>
					
					<table class="tablaBotones" border="0" cellspacing="0" cellpadding="0">
					  <tr>
					    <td>
 
						  <form method="post" action="preventivo_dettagliato.php" name="formPrevent" id="formPrevent" >
						  <input type="hidden" value="'.$_POST['TipoMutuo'].'" name="TipoMutuo" />
						  <input type="hidden" value="'.$_POST['Finalita'].'" name="Finalita" />
						  <input type="hidden" value="'.$_POST['Durata'].'" name="Durata"  />
						  <input type="hidden" value="'.$_POST['Importo'].'" name="Importo" />
						  <input type="hidden" value="'.$_POST['Valore'].'" name="Valore" />
						  <input type="hidden" value="'.$_POST['Provincia'].'" name="Provincia" />
						  <input type="hidden" value="'.$_POST['Destinatari'].'" name="Destinatari" />
						  <input type="hidden" value="'.$_POST['miglior'].'" name="miglior" />

					      <input type="image" src="images/btn_preventivo_dettaglio.png" name="cerca" name="image";>
    					  </form>
					    </td>
					    <td><a target="_blank" href="http://www.telemutuo.it/preventivionline/richiesteagenti.php?id_partner=leptan04755">
					      <img src="images/btn_fattibilita.png">
					    </a></td>
					  </tr>
					</table>

					<!--/table Paolo-->

';

		 }
function grabUrl($urlToGrab) {
	if ('http' != substr($urlToGrab, 0, 4))
		$urlToGrab = "http://".$_SERVER['HTTP_HOST'].('/'==substr($urlToGrab,0,1)?'':'/').$urlToGrab;
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, $urlToGrab);
	curl_setopt ($ch, CURLOPT_HEADER, 0);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	$paginaRenderizzata = curl_exec ($ch);
	curl_close ($ch);
	return $paginaRenderizzata;
}
?>
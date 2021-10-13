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
        foreach($_POST as $var=>$val){
            $urlParams .= "$var=$val&";        
        }
        $urlParams = substr($urlParams, 0, -1);        
    }

	if ('SI'==$xmlarray->Errore->Bloccante) {
		echo '
					<!--table Paolo-->
					<table class="tablototaRisposta" border="1" cellspacing="2" cellpadding="2">
					  <form id="formPrevent" name="formPrevent" action="telemutuo.php" method="post">
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



			<div class="tableMutui">
				<table class="tableMutui" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				    <td background="images/tit_preventivo_dettagliato.png" height="56">&nbsp;</td>
				  </tr>
				  <tr>
				    <td background="images/form2.png">
					<div class="texto">
						Questo mutuo &egrave; disponibile presso uno sportello bancario convenzionato 
						  con TeleMutuo, dove riceverai assistenza di un funzionario della banca. Inviando 
						  la gratuita richiesta di attivazione a fine pagina ti verr&agrave; organizzato 
						  un incontro.
					</div>
					<!--table 1-->
					<table class="preventivoDettagliato" border="0" cellspacing="2" cellpadding="2">
					  <form id="formPrevent" name="formPrevent" action="telemutuo.php" method="post">
					    <input type="hidden" value="DipAut" name="Destinatari" />
					    <tbody> 
					    <tr> 
					      <td colspan="2" style="padding:3px 3px 3px 3px; background-color:#404040; color:#FF9900; font-weight:bold;">Il Contratto </td>
					    </tr>
					    <tr> 
					     <th valign="top" width="160"> '.$xmlarray->Dettaglio->Contratto->label1.'</th>
					      <th> '.$xmlarray->Dettaglio->Contratto->campo1.' </th>
					    </tr>
					    <tr> 
					      <td valign="top">'.$xmlarray->Dettaglio->Contratto->label2.'</td>
					      <td>'.$xmlarray->Dettaglio->Contratto->campo2.'</td>
					    </tr>
					    <tr> 
					      <th valign="top">'.$xmlarray->Dettaglio->Contratto->label3.'</th>
					      <th>'.$xmlarray->Dettaglio->Contratto->campo3.'</th>
					    </tr>
					    <tr> 
					      <td valign="top">'.$xmlarray->Dettaglio->Contratto->label4.':</td>
					      <td>'.$xmlarray->Dettaglio->Contratto->campo4.'</td>
					    </tr>
					    </tbody> 
					  </form>
					</table>					
					
					<!--table 2-->
					<table class="preventivoDettagliato" border="0" cellspacing="2" cellpadding="2">
					  <form id="formPrevent" name="formPrevent" action="telemutuo.php" method="post">
					    <input type="hidden" value="DipAut" name="Destinatari" />
					    <tbody> 
					    <tr> 
					      <td colspan="2" style="padding:3px 3px 3px 3px; background-color:#404040; color:#FF9900; font-weight:bold;">Le Condizioni </td>
					    </tr>
					    <tr> 
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label7.'</td>
					      <td>'.$xmlarray->Dettaglio->Condizioni->campo7.'</td>
					    </tr>
					    <tr> 
					      <th valign="top">'.$xmlarray->Dettaglio->Condizioni->label8.'</th>
					      <th>'.$xmlarray->Dettaglio->Condizioni->campo8.'</th>
					    </tr>
					    <tr> 
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label10.'</td>
					      <td>'.$xmlarray->Dettaglio->Condizioni->campo10.'</td>
					    </tr>
					    <tr>
					      <th valign="top">'.$xmlarray->Dettaglio->Condizioni->label11.'</th>
					      <th>'.$xmlarray->Dettaglio->Condizioni->campo11.'</th>
					    </tr>
					    <tr>
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label12.'</td>
					      <td>'.$xmlarray->Dettaglio->Condizioni->campo12.'</td>
					    </tr>
					    <tr>
					      <th valign="top">'.$xmlarray->Dettaglio->Condizioni->label13.'</th>
					      <th>'.$xmlarray->Dettaglio->Condizioni->campo13.'</th>
					    </tr>
					    <tr>
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label14.'</td>
					      <td>'.$xmlarray->Dettaglio->Condizioni->campo14.'</td>
					    </tr>
					    <tr>
					      <th valign="top"> '.$xmlarray->Dettaglio->Condizioni->label18.' </th>
					      <th>'.$xmlarray->Dettaglio->Condizioni->campo18.' </th>
					    </tr>
					    <tr>
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label19.'</td>
					      <td>'.$xmlarray->Dettaglio->Condizioni->campo19.'</td>
					    </tr>
					    <tr>
					      <th valign="top"> '.$xmlarray->Dettaglio->Condizioni->label20.' </th>
					      <th>'.$xmlarray->Dettaglio->Condizioni->campo20.' </th>
					    </tr>
					    <tr>
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label21.'</td>
					      <td>'.$xmlarray->Dettaglio->Condizioni->campo21.'</td>
					    </tr>
					    <tr>
					      <th valign="top"> '.$xmlarray->Dettaglio->Condizioni->label22.' </th>
					      <th>'.$xmlarray->Dettaglio->Condizioni->campo22.' </th>
					    </tr>
					    <tr>
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label23.'</td>
					      <td>'.$xmlarray->Dettaglio->Condizioni->campo23.'</td>
					    </tr>
					    <tr>
					      <th valign="top"> '.$xmlarray->Dettaglio->Condizioni->label24.' </th>
					      <th>'.$xmlarray->Dettaglio->Condizioni->campo24.' </th>
					    </tr>
					    </tbody> 
					  </form>
					</table>

					<!--table 3-->
					<table class="preventivoDettagliato" border="0" cellspacing="2" cellpadding="2">
					  <form id="formPrevent" name="formPrevent" action="telemutuo.php" method="post">
					    <input type="hidden" value="DipAut" name="Destinatari" />
					    <tbody> 
					    <tr> 
					      <td colspan="2" style="padding:3px 3px 3px 3px; background-color:#404040; color:#FF9900; font-weight:bold;">I Requisiti </td>
					    </tr>
					    <tr> 
					      <th valign="top" width="160">'.$xmlarray->Dettaglio->Condizioni->label25.'</th>
					      <th> '.$xmlarray->Dettaglio->Requisiti->campo25.' </th>
					    </tr>
					    <tr> 
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label26.'</td>
					      <td> '.$xmlarray->Dettaglio->Requisiti->campo26.'  </td>
					    </tr>
					    <tr> 
					      <th valign="top"> '.$xmlarray->Dettaglio->Condizioni->label27.'</th>
					      <th>'.$xmlarray->Dettaglio->Requisiti->campo27.' </th>
					    </tr>
					    <tr> 
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label28.' </td>
					      <td>'.$xmlarray->Dettaglio->Requisiti->campo28.' </td>
					    </tr>
					    <tr> 
					      <th valign="top">'.$xmlarray->Dettaglio->Condizioni->label29.'</th>
					      <th>'.$xmlarray->Dettaglio->Requisiti->campo29.' </th>
					    </tr>
					    </tbody> 
					  </form>
					</table>					
					<!--table 4-->
					<table class="preventivoDettagliato" border="0" cellspacing="2" cellpadding="2">
					  <form id="formPrevent" name="formPrevent" action="telemutuo.php" method="post">
					    <input type="hidden" value="DipAut" name="Destinatari" />
					    <tbody> 
					    <tr> 
					      <td colspan="2" style="padding:3px 3px 3px 3px; background-color:#404040; color:#FF9900; font-weight:bold;">L\' istruttoria</td>
					    </tr>
					    <tr> 
					      <th valign="top" width="160">'.$xmlarray->Dettaglio->Condizioni->label30.'</th>
					      <th>'.$xmlarray->Dettaglio->Istruttoria->campo30.' </th>
					    </tr>
					    <tr> 
					      <td valign="top">'.$xmlarray->Dettaglio->Condizioni->label31.' </td>
					      <td>'.$xmlarray->Dettaglio->Istruttoria->campo31.' </td>
					    </tr>
					    </tbody> 
					  </form>
					</table>
					<div class="textoNaranja">
                    <span class="box-calcolataeg-p2"><a class="calcolataeg" onclick="window.open (\'http://www.telemutuo.it/preventivionline/calcolo_taeg_kit.php?'.$urlParams.'\',\'mywindow\', \'status=0,toolbar=0,width=730,height=870,menubar=0\');" href="#">Calcola TAEG</a></span>                    
						Chiedi subito la gratuita abilitazione al circuito TeleMutuo.
						<br /><br />
						Cos&igrave; potrai inoltrare la domanda di mutuo in banca a queste condizioni
						  in qualsiasi momento. Per procedere clicca sul pulsante qui sotto.
					</div>
					<!--table botones-->
					<table class="tablaBotonSolito" border="0" cellspacing="0" cellpadding="0">
					  <tr>
					    <td><a href="http://www.telemutuo.it/preventivionline/richiesteagenti.php?id_partner=leptan04755"><img src="images/btn_fattibilita.png" name="cerca" name="image" /></a></td>
					  </tr>
					</table>
					<!--/table Paolo-->
                    <span class="box-complementari"><a class="info-complementari" onclick="window.open (\'http://www.telemutuo.it/preventivionline/info_complementari_kit.php?'.$urlParams.'\',\'mywindow\', \'status=0,toolbar=0,width=730,height=540,menubar=0\');" href="#">Informazioni complementari ai sensi delle disposizioni UIC del 29 aprile 2005.</a></span>              
      
				    </td>
				  </tr>
				</table>

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
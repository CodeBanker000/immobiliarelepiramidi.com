<?php
/*************************************************************************************
 *                        STRUTTURA PAGINA MUTUI
 *************************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <?php require_once 'layout/aside.php'; ?>
    <table class="tablotota" border="0" cellspacing="2" cellpadding="2">
	<form id="formPrevent" name="formPrevent" action="telemutuo.php" method="post">
            <input type="hidden" value="DipAut" name="Destinatari" />  
            <tbody>
		<tr>
                    <td width="150"><label for="tipo">Scegli il tipo di mutuo</label></td>
                    <td>
			<select id="tipo" name="TipoMutuo">
                            <option value="Fisso" selected="selected">Tasso fisso</option>
                            <option value="Variabile">Variabile Classico</option>
                            <option value="Rata_Fissa">Variabile con Rata Fissa</option>
                            <option value="Protetto"> Variabile ma con tetto massimo</option>
			</select>
                    </td>
		</tr>
		<tr>
                    <td><label for="scopo">Scopo del mutuo</label></td>
                    <td>
			<select name="Finalita" class="inputs" id="scopoo">
                            <option value="A">Acquistare una casa</option>
                            <option value="P">Sostituire un altro mutuo</option>
                            <option value="R">Eseguire lavori edili</option>
                            <option value="L">Ottenere denaro garantito dalla casa</option>
			</select>
                    </td>
		</tr>
		<tr>
                    <td><label for="durata">Durata del mutuo</label></td>
                    <td><input type="text" name="Durata" class="inputt" maxlength="2" id="durata" size="28"/></td>
		</tr>
		<tr>
                    <td><label for="importo">Importo del mutuo</label></td>
                    <td><input type="text" name="Importo" class="inputt" maxlength="6" id="importo" size="28"/></td>
		</tr>
		<tr>
                    <td><label for="importo">Valore dell&rsquo;immobile</label></td>
                    <td><input type="text" name="Valore" class="inputt" maxlength="7" id="valore" size="28"/></td>
		</tr>
		<tr>
                    <td><label for="provincia">Provincia dell&rsquo;immobile</label></td>
                    <td>
                        <select name="Provincia" class="inputs" id="provinciao">
                            <option value="" id="provincia">Seleziona</option>
                            <option value="AG">Agrigento</option>
                            <option value="AL">Alessandria</option>
                            <option value="AN">Ancona</option>
                            <option value="AO">Aosta</option>
                            <option value="AR">Arezzo</option>
                            <option value="AP">Ascoli Piceno</option>
                            <option value="AT">Asti</option>
                            <option value="AV">Avellino</option>
                            <option value="BA">Bari</option>
                            <option value="BL">Belluno</option>
                            <option value="BN">Benevento</option>
                            <option value="BG">Bergamo</option>
                            <option value="BI">Biella</option>
                            <option value="BO">Bologna</option>
                            <option value="BZ">Bolzano</option>
                            <option value="BS">Brescia</option>
                            <option value="BR">Brindisi</option>
                            <option value="CA">Cagliari</option>
                            <option value="CL">Caltanissetta</option>
                            <option value="CB">Campobasso</option>
                            <option value="CE">Caserta</option>
                            <option value="CT">Catania</option>
                            <option value="CZ">Catanzaro</option>
                            <option value="CH">Chieti</option>
                            <option value="CO">Como</option>
                            <option value="CS">Cosenza</option>
                            <option value="CR">Cremona</option>
                            <option value="KR">Crotone</option>
                            <option value="CN">Cuneo</option>
                            <option value="EN">Enna</option>
                            <option value="FE">Ferrara</option>
                            <option value="FI">Firenze</option>
                            <option value="FG">Foggia</option>
                            <option value="FC">Forli' Cesena</option>
                            <option value="FR">Frosinone</option>
                            <option value="GE">Genova</option>
                            <option value="GO">Gorizia</option>
                            <option value="GR">Grosseto</option>
                            <option value="IM">Imperia</option>
                            <option value="IS">Isernia</option>
                            <option value="AQ">L'Aquila</option>
                            <option value="SP">La Spezia</option>
                            <option value="LT">Latina</option>
                            <option value="LE">Lecce</option>
                            <option value="LC">Lecco</option>
                            <option value="LI">Livorno</option>
                            <option value="LO">Lodi</option>
                            <option value="LU">Lucca</option>
                            <option value="MC">Macerata</option>
                            <option value="MN">Mantova</option>
                            <option value="MS">Massa Carrara</option>
                            <option value="MT">Matera</option>
                            <option value="ME">Messina</option>
                            <option value="MI">Milano</option>
                            <option value="MO">Modena</option>
                            <option value="NA">Napoli</option>
                            <option value="NO">Novara</option>
                            <option value="NU">Nuoro</option>
                            <option value="OR">Oristano</option>
                            <option value="PD">Padova</option>
                            <option value="PA">Palermo</option>
                            <option value="PR">Parma</option>
                            <option value="PV">Pavia</option>
                            <option value="PG">Perugia</option>
                            <option value="PU">Pesaro Urbino</option>
                            <option value="PE">Pescara</option>
                            <option value="PC">Piacenza</option>
                            <option value="PI">Pisa</option>
                            <option value="PT">Pistoia</option>
                            <option value="PN">Pordenone</option>
                            <option value="PZ">Potenza</option>
                            <option value="PO">Prato</option>
                            <option value="RG">Ragusa</option>
                            <option value="RA">Ravenna</option>
                            <option value="RC">Reggio Calabria</option>
                            <option value="RE">Reggio Emilia</option>
                            <option value="RI">Rieti</option>
                            <option value="RN">Rimini</option>
                            <option value="RM">Roma</option>
                            <option value="RO">Rovigo</option>
                            <option value="SA">Salerno</option>
                            <option value="SS">Sassari</option>
                            <option value="SV">Savona</option>
                            <option value="SI">Siena</option>
                            <option value="SR">Siracusa</option>
                            <option value="SO">Sondrio</option>
                            <option value="TA">Taranto</option>
                            <option value="TE">Teramo</option>
                            <option value="TR">Terni</option>
                            <option value="TO">Torino</option>
                            <option value="TP">Trapani</option>
                            <option value="TN">Trento</option>
                            <option value="TV">Treviso</option>
                            <option value="TS">Trieste</option>
                            <option value="UD">Udine</option>
                            <option value="VA">Varese</option>
                            <option value="VE">Venezia</option>
                            <option value="VB">Verbania</option>
                            <option value="VC">Vercelli</option>
                            <option value="VR">Verona</option>
                            <option value="VV">Vibo Valentia</option>
                            <option value="VI">Vicenza</option>
                            <option value="VT">Viterbo</option>
                        </select>
                    </td>
		</tr>
		<tr>
                    <td><label class="radio" for="scopo">Cerca miglior:</label></td>
                    <td>
			<span style="clear: both; float: left; font-size: 11px; border:0px;">     
			<input style="border:0px;" type="radio" name="miglior" value="Tasso" checked="" />Tasso </span>      
			<span style="float: left; font-size: 11px;">     
			<input style="border:0px;" type="radio" name="miglior" value="Spread" />Spread </span>      
			<span style="float: left; font-size: 11px;">     
			<input style="border:0px;" type="radio" name="miglior" value="TAEG" />Taeg </span>
                    </td>
		</tr>
		<tr>
                    <td>&nbsp;</td>
                    <td>
                        <input style="margin:10px 0 0 45px; border:0px;" type="image" src="immagini/telemutuo/btn_calcola.png" name="cerca" name="image";>
                    </td>
		</tr>
                <tr>
                    <td colspan="2">
                        <div align="justify"><br />
                            Risparmia sul  
                            <a href="http://www.telemutuo.it/"> mutuo </a>con TeleMutuo!.
                            Riduzioni di tasso e consulenza personalizzata per ottenere il tuo mutuo ideale. 
                            Esperienza e cortesia di un servizio interamente gratuito utilizzato da oltre 100.000 persone negli scorsi 25 anni.<br /> 
                            Questo spazio è stato concesso in uso pubblicitario a Tele Mutuo S.p.A.. 
                            I preventivi dei mutui on line e la consulenza al cliente vengono provveduti direttamente da Tele Mutuo S.p.A. 
                            e non sono riconducibili al titolare di questo sito, che non potrà conseguentemente assumere alcuna responsabilità in merito. 
                            Per maggiori informazioni sulla natura e sull'origine del servizio vedi<a href="http://www.telemutuo.it/affidabile/trasparenza-mutui.html"> Trasparenza Mutui
                        </div>
                    </td>
                </tr>
            </tbody>
	</form>
    </table>
</div>

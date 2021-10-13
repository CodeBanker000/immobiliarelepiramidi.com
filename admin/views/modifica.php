<?
/*******************************************************************************
 *              STRUCTUR HTML OF THE "MODIFICA" PAGE FROM ADMIN
 *******************************************************************************/

$immobile = $this->immobile[0];
$accessori = $this->accessori[0];

$epi = explode(" ", $immobile['epi']);
?>
<div id="mainContainer" class="container clearfix">
    <h3 class="column_1">modifica immobile:</h3>
    <div class="row column_1"></div>
    <form id="frmImmobile" name="frmImmobile" method="post" action="<?=URL?>admin/immobili/update">
        <section id="datiPrincipali" class="column_1">
            <h6>dati principali:</h6>
            <div>
                <ul>
                    <li>
                        <label for="codRif">Riferimento</label>
                    </li>
                    <li>
                        <input id="codRif" name="codRif" type="text" maxlength="7" value="<?=$immobile['cod_rif']?>" />
                        <input id="immoID" name="immoID" type="hidden" value="<?=$immobile['id_immo']?>" />
                        <span id="response"></span>
                    </li>
                    <li>
                        <label for="stato">Stato</label>
                    </li>
                    <li>
                        <select id="stato" name="stato">
                            <option value="1" <? if ($immobile['stato'] == 1) echo 'selected';?>>Attivo</option>
                            <option value="2" <? if ($immobile['stato'] == 2) echo 'selected';?>>Sospeso</option>
                            <option value="0" <? if ($immobile['stato'] == 0) echo 'selected';?>>Non Attivo</option>
                        </select>
                    </li>
                    <li>
                        <label for="contratto">Contratto</label>
                    </li>
                    <li>
                        <select id="contratto" name="contratto">
                            <? foreach ($this->contract as $contratto) :?>
                                <option value="<?=$contratto['id_contr']?>" <? if ($immobile['contratto'] == $contratto['id_contr']) echo 'selected';?>>
                                    <?=$contratto['nm_contr']?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    </li>
                    <li>
                        <label for="categoria">Categoria</label>
                    </li>
                    <li>
                        <select id="categoria" name="categoria">
                            <? foreach ($this->categ as $categ) :?>
                                <option value="<?=$categ['id_categ']?>" <? if ($immobile['categ'] == $categ['id_categ']) echo 'selected';?>>
                                    <?=$categ['nm_categ']?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    </li>
                    <li>
                        <label for="tipologia">Tipologia</label>
                    </li>
                    <li>
                        <select id="tipologia" name="tipologia">
                            <? foreach ($this->tipo as $tipo) :?>
                                <option value="<?=$tipo['id_tipo']?>" <? if ($immobile['tipo'] == $tipo['id_tipo']) echo 'selected';?>>
                                    <?=$tipo['nm_tipo']?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    </li>
                    <li <? if ($immobile['att_comm'] == 1) echo 'class="hidden"'; ?>>
                        <label for="attivita">Attivit&agrave; Commerciale</label>
                    </li>
                    <li <? if ($immobile['att_comm'] == 1) echo 'class="hidden"'; ?>>
                        <select id="attivita" name="attivita">
                            <option value="1" selected>Seleziona Attivit&agrave;</option>
                            <? if ($immobile['att_comm'] != 1) : ?>
                                <? foreach ($this->attComm as $attComm) :?>
                                    <option value="<?=$attComm['id_att_comm']?>" <? if ($immobile['att_comm'] == $attComm['id_att_comm']) echo 'selected';?>>
                                        <?=$attComm['nm_att_comm']?>
                                    </option>
                                <? endforeach; ?>
                            <? endif; ?>
                        </select>
                    </li>
                </ul> 
            </div>
            <div>
                <ul>
                    <li class="both">
                        <label for="condizione">Condizione</label>
                    </li>
                    <li class="both">
                        <select id="condizione" name="condizione">
                            <option value="0">Seleziona Condizione</option>
                            <? foreach ($this->cond as $cond) :?>
                                <option value="<?=$cond['id_cond']?>" <? if ($immobile['cond'] == $cond['id_cond']) echo 'selected';?>>
                                    <?=$cond['nm_cond']?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    </li>
                    <li class="both">
                        <label for="vani">Vani</label>
                    </li>
                    <li class="both">
                        <input id="vani" name="vani" type="text" value="<?=$immobile['vani']?>" />
                    </li>
                    <li>
                        <label for="superficie">Superficie</label>
                    </li>
                    <li>
                        <input id="superficie" name="superficie" type="text" value="<?=$immobile['sup']?>" />
                    </li>
                    <li>
                        <label for="prezzo">Prezzo</label>
                    </li>
                    <li>
                        <input id="prezzo" name="prezzo" type="text" value="<?=$immobile['prezzo']?>" />
                    </li>
                    <li class="both">
                        <label for="classe">Classe</label>
                    </li>
                    <li class="both">
                        <select id="classe" name="classe">
                            <option value="A+" <? if ($immobile['ape'] == "A+") echo 'selected';?>>A+</option>
                            <option value="A" <? if ($immobile['ape'] == "A") echo 'selected';?>>A</option>
                            <option value="B" <? if ($immobile['ape'] == "B") echo 'selected';?>>B</option>
                            <option value="C" <? if ($immobile['ape'] == "C") echo 'selected';?>>C</option>
                            <option value="D" <? if ($immobile['ape'] == "D") echo 'selected';?>>D</option>
                            <option value="E" <? if ($immobile['ape'] == "E") echo 'selected';?>>E</option>
                            <option value="F" <? if ($immobile['ape'] == "F") echo 'selected';?>>F</option>
                            <option value="G" <? if ($immobile['ape'] == "G") echo 'selected';?>>G</option>
                            <option value="non soggetto" <? if ($immobile['ape'] == "non soggetto") echo 'selected';?>>Non soggetto</option>
                        </select>
                    </li>
                    <li class="both">
                        <label for="indice">Epi</label>
                    </li>
                    <li class="both">
                        <input id="indice" name="indice" type="text" value="<?=$epi[0]?>" />
                        <select id="misIndice" name="misIndice">
                            <option value="kwh/mq*annuo" <? if ($epi[1] == "kwh/mq*annuo") echo 'selected';?>>kwh/mq*annuo</option>
                            <option value="kwh/mc*annuo" <? if ($epi[1] == "kwh/mc*annuo") echo 'selected';?>>kwh/mc*annuo</option>
                        </select>
                    </li>
                </ul>
            </div>   
        </section>
        <section id="ubicazione" class="column_1">
            <h6>ubicazione:</h6>
            <ul>
                <li>
                    <label for="localita">Localit&agrave;</label>
                </li>
                <li>
                    <select id="localita" name="localita">
                        <? foreach ($this->comune as $comune) :?>
                            <option value="<?=$comune['id_comune']?>" <? if ($immobile['comune'] == $comune['id_comune']) echo 'selected';?>><?=$comune['nm_comune']?></option>
                        <? endforeach; ?>
                    </select>
                </li>
                <li>
                    <label for="zona">Zona</label>
                </li>
                <li>
                    <select id="zona" name="zona">
                        <? foreach ($this->zona as $zona) :?>
                            <option value="<?=$zona['id_zona']?>" <? if ($immobile['zona'] == $zona['id_zona']) echo 'selected';?>>
                                <?=$zona['nm_zona']?>
                            </option>
                        <? endforeach; ?>
                    </select>
                </li>
                <li>
                    <label for="address">Indirizzo:</label>
                </li>
                <li>
                    <input id="address" name="address" type="text" />
                    <button type="button" onclick="javascript:initialize();">Calcola</button>
                </li>
                <li>
                    <input id="latitude" name="latitude" type="hidden" />
                    <input id="longitude" name="longitude" type="hidden" />
                </li>
                <div id="mappa"></div>
            </ul>
        </section>
        <section id="descrizione" class="column_1">
            <h6>descrizione:</h6>
            <textarea id="descrizione" name="descrizione"><?=$immobile['desc']?></textarea>
        </section>
        <section id="datiAccessori" class="column_1">
            <h6>dati accessori:</h6>
            <div>
                <ul>
                    <li class="all">
                        <label for="tipoProprieta">Tipo Propriet&agrave;</label>
                    </li>
                    <li class="all">
                        <select id="tipoProprieta" name="tipoProprieta">
                            <option value="intera propriet&agrave;" <? if ($accessori['tipo_prop'] == "intera propriet&agrave;") echo 'selected'; ?>>
                                intera propriet&agrave;
                            </option>
                            <option value="parziale" <? if ($accessori['tipo_prop'] == "parziale") echo 'selected'; ?>>
                                intera propriet&agrave;
                            </option>
                            <option value="multipropriet&agrave;" <? if ($accessori['tipo_prop'] == "multipropriet&agrave;") echo 'selected'; ?>>
                                multipropriet&agrave;
                            </option>
                            <option value="nuda propriet&agrave;" <? if ($accessori['tipo_prop'] == "nuda propriet&agrave;") echo 'selected'; ?>>
                                nuda propriet&agrave;
                            </option>
                        </select>
                    </li>
                    <li class="both">
                        <label for="piano">Piano</label>
                    </li>
                    <li class="both">
                        <select id="piano" name="piano">
                            <option value="0" <? if ($accessori['piano'] == "0") echo 'selected'; ?>>
                                Seleziona Piano
                            </option>
                            <option value="interrato" <? if ($accessori['piano'] == "interrato") echo 'selected'; ?>>
                                Interrato
                            </option>
                            <option value="seminterrato" <? if ($accessori['piano'] == "seminterrato") echo 'selected'; ?>>
                                Seminterrato
                            </option>
                            <option value="terra" <? if ($accessori['piano'] == "terra") echo 'selected'; ?>>
                                Terra
                            </option>
                            <option value="rialzato" <? if ($accessori['piano'] == "rialzato") echo 'selected'; ?>>
                                Rialzato
                            </option>
                            <option value="ammezzato" <? if ($accessori['piano'] == "ammezzato") echo 'selected'; ?>>
                                Ammezzato
                            </option>
                            <option value="1&deg;" <? if ($accessori['piano'] == "1&deg;") echo 'selected'; ?>>1&deg;</option>
                            <option value="2&deg;" <? if ($accessori['piano'] == "2&deg;") echo 'selected'; ?>>2&deg;</option>
                            <option value="3&deg;" <? if ($accessori['piano'] == "3&deg;") echo 'selected'; ?>>3&deg;</option>
                            <option value="4&deg;" <? if ($accessori['piano'] == "4&deg;") echo 'selected'; ?>>4&deg;</option>
                            <option value="5&deg;" <? if ($accessori['piano'] == "5&deg;") echo 'selected'; ?>>5&deg;</option>
                            <option value="6&deg;" <? if ($accessori['piano'] == "6&deg;") echo 'selected'; ?>>6&deg;</option>
                            <option value="7&deg;" <? if ($accessori['piano'] == "7&deg;") echo 'selected'; ?>>7&deg;</option>
                            <option value="8&deg;" <? if ($accessori['piano'] == "8&deg;") echo 'selected'; ?>>8&deg;</option>
                            <option value="9&deg;" <? if ($accessori['piano'] == "9&deg;") echo 'selected'; ?>>9&deg;</option>
                            <option value="10&deg;" <? if ($accessori['piano'] == "10&deg;") echo 'selected'; ?>>10&deg;</option>
                        </select>
                    </li>
                    <li class="both">
                        <label for="livelli">Livelli</label>
                    </li>
                    <li class="both">
                        <select id="livelli" name="livelli">
                            <option value="0" <? if ($accessori['livelli'] == 0) echo 'selected'; ?>>Seleziona Livelli</option>
                            <option value="1" <? if ($accessori['livelli'] == 1) echo 'selected'; ?>>1</option>
                            <option value="2" <? if ($accessori['livelli'] == 2) echo 'selected'; ?>>2</option>
                            <option value="3" <? if ($accessori['livelli'] == 3) echo 'selected'; ?>>3</option>
                            <option value="4" <? if ($accessori['livelli'] == 4) echo 'selected'; ?>>4</option>
                            <option value="5" <? if ($accessori['livelli'] == 5) echo 'selected'; ?>>5</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="ascensore" name="ascensore" type="checkbox" value="1" <? if ($accessori['ascensore'] == 1) echo 'checked'; ?> />
                        <label for="ascensore">Ascensore</label>
                    </li>
                    <li class="both"></li>
                    <li class="residenziale">
                        <label for="soggiorno">Soggiorno</label>
                    </li>
                    <li class="residenziale">
                        <input id="soggiorno" name="soggiorno" type="number" value="<?=$accessori['soggiorno']?>" />
                    </li>
                    <li class="residenziale">
                        <label for="cucina">Cucina</label>
                    </li>
                    <li class="residenziale">
                        <select id="cucina" name="cucina">
                            <option value="0" <? if ($accessori['cucina'] == "0") echo 'selected'; ?>>Seleziona Cucina</option>
                            <option value="abitabile" <? if ($accessori['cucina'] == "abitabile") echo 'selected'; ?>>Abitabile</option>
                            <option value="angolo cottura" <? if ($accessori['cucina'] == "angolo cottura") echo 'selected'; ?>>Angolo Cottura</option>
                            <option value="semiabitabile" <? if ($accessori['cucina'] == "semiabitabile") echo 'selected'; ?>>Semiabitabile</option>
                            <option value="cucinotto" <? if ($accessori['cucina'] == "cucinotto") echo 'selected'; ?>>Cucinotto</option>
                        </select>
                    </li>
                    <li class="residenziale">
                        <label for="camera">Camera</label>
                    </li>
                    <li class="residenziale">
                        <input id="camera" name="camera" type="number" value="<?=$accessori['camera']?>" />
                    </li>
                    <li class="commerciale">
                        <label for="supProduttivi">Mq.&nbsp;Produttivi</label>
                    </li>
                    <li class="commerciale">
                        <input id="supProduttivi" name="supProduttivi" type="number" value="<?=$accessori['sup_prod']?>" />
                    </li>
                    <li class="commerciale">
                        <label for="supUffici">Mq.&nbsp;Uffici</label>
                    </li>
                    <li class="commerciale">
                        <input id="supUffici" name="supUffici" type="number" value="<?=$accessori['sup_uff']?>" />
                    </li>
                    <li class="commerciale">
                        <label for="supCommerciali">Mq.&nbsp;Commerciali</label>
                    </li>
                    <li class="commerciale">
                        <input id="supCommerciali" name="supCommerciali" type="number" value="<?=$accessori['sup_comm']?>" />
                    </li>
                    <li class="commerciale">
                        <label for="supEsterni">Mq.&nbsp;Esterni</label>
                    </li>
                    <li class="commerciale">
                        <input id="supEsterni" name="supEsterni" type="number" value="<?=$accessori['sup_est']?>" />
                    </li>
                    <li class="both">
                        <label for="bagno">Bagno</label>
                    </li>
                    <li class="both">
                        <input id="bagno" name="bagno" type="number" value="<?=$accessori['bagno']?>" />
                    </li>
                    <li class="terreno">
                        <label for="coltura">Coltura</label>
                    </li>
                    <li class="terreno">
                        <input id="coltura" name="coltura" type="text" value="<?=$accessori['coltura']?>" />
                    </li>
                    <li class="terreno">
                        <label for="panorama">Panorama</label>
                    </li>
                    <li class="terreno">
                        <input id="panorama" name="panorama" type="text" value="<?=$accessori['panorama']?>" />
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class="both">
                        <input id="balcone" name="balcone" type="checkbox" value="1" <? if ($accessori['balcone'] == 1) echo 'checked'; ?> />
                        <label for="balcone">Balcone/Terrazzo</label>
                    </li>
                    <li class="both"></li>
                    <li class="both">
                        <input id="terrazza" name="terrazza" type="checkbox" <? if ($accessori['terrazza'] == 1) echo 'checked'; ?> />
                        <label for="terrazza">Terrazza</label>
                    </li>
                    <li class="both"></li>
                    <li class="both">
                        <input id="giardino" name="giardino" type="checkbox" <? if ($accessori['giardino'] != "0") echo 'checked'; ?> />
                        <label for="giardino">Giardino/Resede</label>
                    </li>
                    <li class="both">
                        <select id="tipoGiardino" name="tipoGiardino" <? if ($accessori['giardino'] == "0") echo 'disabled'; ?>>
                            <option value="0" <? if ($accessori['giardino'] == "0") echo 'selected'; ?>>Seleziona Tipo</option>
                            <option value="condominiale" <? if ($accessori['giardino'] == "condominiale") echo 'selected'; ?>>Condominiale</option>
                            <option value="privato" <? if ($accessori['giardino'] == "privato") echo 'selected'; ?>>Privato</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="garage" name="garage" type="checkbox" <? if ($accessori['garage'] != "0") echo 'checked'; ?> />
                        <label for="garage">Garage</label>
                    </li>
                    <li class="both">
                        <select id="tipoGarage" name="tipoGarage" <? if ($accessori['garage'] == "0") echo 'disabled'; ?>>
                            <option value="0" <? if ($accessori['garage'] == "0") echo 'selected'; ?>>Seleziona Tipo</option>
                            <option value="singolo" <? if ($accessori['garage'] == "singolo") echo 'selected'; ?>>Singolo</option>
                            <option value="doppio" <? if ($accessori['garage'] == "doppio") echo 'selected'; ?>>Doppio</option>
                            <option value="triplo" <? if ($accessori['garage'] == "triplo") echo 'selected'; ?>>Triplo</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="soffitta" name="soffitta" type="checkbox" value="1" <? if ($accessori['soffitta'] == 1) echo 'checked'; ?> />
                        <label for="soffitta">Soffitta</label>
                    </li>
                    <li class="both"></li>
                    <li class="residenziale">
                        <input id="mansarda" name="mansarda" type="checkbox" value="1" <? if ($accessori['mansarda'] == 1) echo 'checked'; ?> />
                        <label for="mansarda">Mansarda</label>
                    </li>
                    <li class="residenziale"></li>
                    <li class="both">
                        <input id="cantina" name="cantina" type="checkbox" value="1" <? if ($accessori['cantina'] == 1) echo 'checked'; ?> />
                        <label for="cantina">Cantina</label>
                    </li>
                    <li class="both"></li>
                    <li class="residenziale">
                        <input id="taverna" name="taverna" type="checkbox" value="1" <? if ($accessori['taverna'] == 1) echo 'checked'; ?> />
                        <label for="taverna">Taverna</label>
                    </li>
                    <li class="residenziale"></li>
                    <li class="residenziale">
                        <input id="piscina" name="piscina" type="checkbox" value="1" <? if ($accessori['piscina'] == 1) echo 'checked'; ?> />
                        <label for="piscina">Piscina</label>
                    </li>
                    <li class="residenziale"></li>
                    <li class="commerciale">
                        <input id="montacarichi" name="montacarichi" type="checkbox" value="1" <? if ($accessori['montacarichi'] == 1) echo 'checked'; ?> />
                        <label for="montacarichi">Montacarichi</label>
                    </li>
                    <li class="commerciale"></li>
                    <li class="commerciale">
                        <input id="ribalte" name="ribalte" type="checkbox" value="1" <? if ($accessori['ribalte'] == 1) echo 'checked'; ?> />
                        <label for="ribalte">Ribalte</label>
                    </li>
                    <li class="commerciale"></li>
                    <li class="commerciale">
                        <input id="carroponte" name="carroponte" type="checkbox" value="1" <? if ($accessori['carroponte'] == 1) echo 'checked'; ?> />
                        <label for="carroponte">Carroponte</label>
                    </li>
                    <li class="commerciale"></li>
                    <li class="affitto both">
                        <input id="arredato" name="arredato" type="checkbox" <? if ($accessori['arredato'] != "0") echo 'checked'; ?> />
                        <label for="arredato">Arredato</label> 
                    </li>
                    <li class="affitto both">
                        <select id="tipoArredo" name="tipoArredo" <? if ($accessori['arredato'] == "0") echo 'disabled'; ?>>
                            <option value="0" <? if ($accessori['arredato'] == "0") echo 'selected'; ?>>Seleziona Arredo</option>
                            <option value="completamente" <? if ($accessori['arredato'] == "completamente") echo 'selected'; ?>>Completamente</option>
                            <option value="parzialmente" <? if ($accessori['arredato'] == "parzialmente") echo 'selected'; ?>>Parzialmente</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="allarme" name="allarme" type="checkbox" <? if ($accessori['allarme'] != "0") echo 'checked'; ?> />
                        <label for="allarme">Impianto Allarme</label>
                    </li>
                    <li class="both">
                        <select id="tipoAllarme" name="tipoAllarme" <? if ($accessori['allarme'] == "0") echo 'disabled'; ?>>
                            <option value="0" <? if ($accessori['allarme'] == "0") echo 'selected'; ?>>Seleziona Tipo</option>
                            <option value="predisposizione" <? if ($accessori['allarme'] == "predisposizione") echo 'selected'; ?>>Predisposizione</option>
                            <option value="installato" <? if ($accessori['allarme'] == "installato") echo 'selected'; ?>>Installato</option>
                        </select>
                    </li>
                    <li class="both">
                        <label for="riscaldamento">riscaldamento</label>
                    </li>
                    <li class="both">
                        <select id="riscaldamento" name="riscaldamento">
                            <option value="inesistente" <? if ($accessori['riscaldamento'] == "inesistente") echo 'selected'; ?>>inesistente</option>
                            <option value="termosingolo" <? if ($accessori['riscaldamento'] == "termosingolo") echo 'selected'; ?>>termosingolo</option>
                            <option value="centralizzato" <? if ($accessori['riscaldamento'] == "centralizzato") echo 'selected'; ?>>centralizzato</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="climatizzatore" name="climatizzatore" type="checkbox" <? if ($accessori['climatizzatore'] != "0") echo 'checked'; ?> />
                        <label for="climatizzatore">Aria Condizionata</label>
                    </li>
                    <li class="both">
                        <select id="tipoClima" name="tipoClima" <? if ($accessori['climatizzatore'] == "0") echo 'disabled'; ?>>
                            <option value="0" <? if ($accessori['climatizzatore'] == "0") echo 'selected'; ?>>Seleziona Tipo</option>
                            <option value="predisposizione" <? if ($accessori['climatizzatore'] == "predisposizione") echo 'selected'; ?>>Predisposizione</option>
                            <option value="installata" <? if ($accessori['climatizzatore'] == "installata") echo 'selected'; ?>>Installata</option>
                        </select>
                    </li>
                    <li class="terreno">
                        <label for="ettari">Terreno Ha</label>
                    </li>
                    <li class="terreno">
                        <input id="ettari" name="ettari" type="text" value="<?=$accessori['ettari']?>" />
                    </li>
                    <li class="terreno">
                        <label for="giacitura">Giacitura</label>
                    </li>
                    <li class="terreno">
                        <input id="giacitura" name="giacitura" type="text" value="<?=$accessori['giacitura']?>" />
                    </li>
                    <li class="terreno">
                        <label for="dotazione">Dotazione Macchine</label>
                    </li>
                    <li class="terreno">
                        <input id="dotazione" name="dotazione" type="text" value="<?=$accessori['dotazione']?>" />
                    </li>
                </ul>
            </div>
            <button id="btnSubmitImmobile" type="button" class="buttonBlue">Salva</button>
        </section>
    </form>
</div>
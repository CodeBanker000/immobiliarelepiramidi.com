<?php
/*******************************************************************************
 *              STRUCTUR HTML OF THE "NUOVO" PAGE FROM ADMIN
 *******************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <h3 class="column_1">inserisci immobile:</h3>
    <div class="row column_1"></div>
    <form id="frmImmobile" name="frmImmobile" method="post" action="<?=URL?>admin/immobili/create">
        <section id="datiPrincipali" class="column_1">
            <h6>dati principali:</h6>
            <div>
                <ul>
                    <li>
                        <label for="codRif">Riferimento</label>
                    </li>
                    <li>
                        <input id="codRif" name="codRif" type="text" maxlength="7" placeholder="V00-100" />
                        <span id="response"></span>
                    </li>
                    <li>
                        <label for="stato">Stato</label>
                    </li>
                    <li>
                        <select id="stato" name="stato">
                            <option value="">Seleziona Stato</option>
                            <option value="1">Attivo</option>
                            <option value="2">Sospeso</option>
                            <option value="0">Non Attivo</option>
                        </select>
                    </li>
                    <li>
                        <label for="contratto">Contratto</label>
                    </li>
                    <li>
                        <select id="contratto" name="contratto">
                            <option value="0">Seleziona Contratto</option>
                            <? foreach ($this->contract as $k => $v) :?>
                                <option value="<?=$this->contract[$k]['id_contr']?>"><?=$this->contract[$k]['nm_contr']?></option>
                            <? endforeach; ?>
                        </select>
                    </li>
                    <li>
                        <label for="categoria">Categoria</label>
                    </li>
                    <li>
                        <select id="categoria" name="categoria">
                            <option value="0" selected>Seleziona Categoria</option>
                            <? foreach ($this->categ as $k => $v) :?>
                                <option value="<?=$this->categ[$k]['id_categ']?>"><?=$this->categ[$k]['nm_categ']?></option>
                            <? endforeach; ?>
                        </select>
                    </li>
                    <li>
                        <label for="tipologia">Tipologia</label>
                    </li>
                    <li>
                        <select id="tipologia" name="tipologia">
                            <option value="0" selected>Seleziona Tipologia</option>
                            <!-- da aggiungere le altri voci in base al tipo di contratto -->
                        </select>
                    </li>
                    <li class="hidden">
                        <label for="attivita">Attivit&agrave; Commerciale</label>
                    </li>
                    <li class="hidden">
                        <select id="attivita" name="attivita">
                            <option value="1" selected>Seleziona Attivit&agrave;</option>
                            <!-- da aggiungere le altri voci -->
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
                            <option value="0" selected>Seleziona Condizione</option>
                            <? foreach ($this->cond as $k => $v) :?>
                                <option value="<?=$this->cond[$k]['id_cond']?>"><?=$this->cond[$k]['nm_cond']?></option>
                            <? endforeach; ?>
                        </select>
                    </li>
                    <li class="both">
                        <label for="vani">Vani</label>
                    </li>
                    <li class="both">
                        <input id="vani" name="vani" type="text" />
                    </li>
                    <li>
                        <label for="superficie">Superficie</label>
                    </li>
                    <li>
                        <input id="superficie" name="superficie" type="text" />
                    </li>
                    <li>
                        <label for="prezzo">Prezzo</label>
                    </li>
                    <li>
                        <input id="prezzo" name="prezzo" type="text" />
                    </li>
                    <li class="both">
                        <label for="classe">Classe</label>
                    </li>
                    <li class="both">
                        <select id="classe" name="classe">
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G" selected>G</option>
                            <option value="non soggetto">Non soggetto</option>
                        </select>
                    </li>
                    <li class="both">
                        <label for="indice">Epi</label>
                    </li>
                    <li class="both">
                        <input id="indice" name="indice" type="text" />
                        <select id="misIndice" name="misIndice">
                            <option value="kwh/mq&nbsp;annuo">kwh/mq*annuo</option>
                            <option value="kwh/mc&nbsp;annuo">kwh/mc*annuo</option>
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
                        <option value="0">Seleziona Localit&agrave;</option>
                        <? foreach ($this->comune as $k => $v) :?>
                            <option value="<?=$this->comune[$k]['id_comune']?>"><?=$this->comune[$k]['nm_comune']?></option>
                        <? endforeach; ?>
                    </select>
                </li>
                <li>
                    <label for="zona">Zona</label>
                </li>
                <li>
                    <select id="zona" name="zona">
                        <option value="0">Seleziona Zona</option>
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
            <textarea id="descrizione" name="descrizione"></textarea>
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
                            <option value="intera propriet&agrave;" selected>intera propriet&agrave;</option>
                            <option value="parziale">parziale</option>
                            <option value="multipropriet&agrave;">multipropriet&agrave;</option>
                            <option value="nuda propriet&agrave;">nuda propriet&agrave;</option>
                        </select>
                    </li>
                    <li class="both">
                        <label for="piano">Piano</label>
                    </li>
                    <li class="both">
                        <select id="piano" name="piano">
                            <option value="0" selected>Seleziona Piano</option>
                            <option value="interrato">Interrato</option>
                            <option value="seminterrato">Seminterrato</option>
                            <option value="terra">Terra</option>
                            <option value="rialzato">Rialzato</option>
                            <option value="ammezzato">Ammezzato</option>
                            <option value="1&deg;">1&deg;</option>
                            <option value="2&deg;">2&deg;</option>
                            <option value="3&deg;">3&deg;</option>
                            <option value="4&deg;">4&deg;</option>
                            <option value="5&deg;">5&deg;</option>
                            <option value="6&deg;">6&deg;</option>
                            <option value="7&deg;">7&deg;</option>
                            <option value="8&deg;">8&deg;</option>
                            <option value="9&deg;">9&deg;</option>
                            <option value="10&deg;">10&deg;</option>
                        </select>
                    </li>
                    <li class="both">
                        <label for="livelli">Livelli</label>
                    </li>
                    <li class="both">
                        <select id="livelli" name="livelli">
                            <option value="0" selected>Seleziona Livelli</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="ascensore" name="ascensore" type="checkbox" value="1" />
                        <label for="ascensore">Ascensore</label>
                    </li>
                    <li class="both"></li>
                    <li class="residenziale">
                        <label for="soggiorno">Soggiorno</label>
                    </li>
                    <li class="residenziale">
                        <input id="soggiorno" name="soggiorno" type="number" />
                    </li>
                    <li class="residenziale">
                        <label for="cucina">Cucina</label>
                    </li>
                    <li class="residenziale">
                        <select id="cucina" name="cucina">
                            <option value="0" selected>Seleziona Cucina</option>
                            <option value="abitabile">Abitabile</option>
                            <option value="angolo cottura">Angolo Cottura</option>
                            <option value="semiabitabile">Semiabitabile</option>
                            <option value="cucinotto">Cucinotto</option>
                        </select>
                    </li>
                    <li class="residenziale">
                        <label for="camera">Camera</label>
                    </li>
                    <li class="residenziale">
                        <input id="camera" name="camera" type="number" />
                    </li>
                    <li class="commerciale">
                        <label for="supProduttivi">Mq.&nbsp;Produttivi</label>
                    </li>
                    <li class="commerciale">
                        <input id="supProduttivi" name="supProduttivi" type="number" />
                    </li>
                    <li class="commerciale">
                        <label for="supUffici">Mq.&nbsp;Uffici</label>
                    </li>
                    <li class="commerciale">
                        <input id="supUffici" name="supUffici" type="number" />
                    </li>
                    <li class="commerciale">
                        <label for="supCommerciali">Mq.&nbsp;Commerciali</label>
                    </li>
                    <li class="commerciale">
                        <input id="supCommerciali" name="supCommerciali" type="number" />
                    </li>
                    <li class="commerciale">
                        <label for="supEsterni">Mq.&nbsp;Esterni</label>
                    </li>
                    <li class="commerciale">
                        <input id="supEsterni" name="supEsterni" type="number" />
                    </li>
                    <li class="both">
                        <label for="bagno">Bagno</label>
                    </li>
                    <li class="both">
                        <input id="bagno" name="bagno" type="number" />
                    </li>
                    <li class="terreno">
                        <label for="coltura">Coltura</label>
                    </li>
                    <li class="terreno">
                        <input id="coltura" name="coltura" type="text" />
                    </li>
                    <li class="terreno">
                        <label for="panorama">Panorama</label>
                    </li>
                    <li class="terreno">
                        <input id="panorama" name="panorama" type="text" />
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class="both">
                        <input id="balcone" name="balcone" type="checkbox" value="1" />
                        <label for="balcone">Balcone/Terrazzo</label>
                    </li>
                    <li class="both"></li>
                    <li class="both">
                        <input id="terrazza" name="terrazza" type="checkbox" />
                        <label for="terrazza">Terrazza</label>
                    </li>
                    <li class="both"></li>
                    <li class="both">
                        <input id="giardino" name="giardino" type="checkbox" />
                        <label for="giardino">Giardino/Resede</label>
                    </li>
                    <li class="both">
                        <select id="tipoGiardino" name="tipoGiardino" disabled>
                            <option value="0" selected>Seleziona Tipo</option>
                            <option value="condominiale">Condominiale</option>
                            <option value="privato">Privato</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="garage" name="garage" type="checkbox" />
                        <label for="garage">Garage</label>
                    </li>
                    <li class="both">
                        <select id="tipoGarage" name="tipoGarage" disabled>
                            <option value="0" selected>Seleziona Tipo</option>
                            <option value="singolo">Singolo</option>
                            <option value="doppio">Doppio</option>
                            <option value="triplo">Triplo</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="soffitta" name="soffitta" type="checkbox" value="1" />
                        <label for="soffitta">Soffitta</label>
                    </li>
                    <li class="both"></li>
                    <li class="residenziale">
                        <input id="mansarda" name="mansarda" type="checkbox" value="1" />
                        <label for="mansarda">Mansarda</label>
                    </li>
                    <li class="residenziale"></li>
                    <li class="both">
                        <input id="cantina" name="cantina" type="checkbox" value="1" />
                        <label for="cantina">Cantina</label>
                    </li>
                    <li class="both"></li>
                    <li class="residenziale">
                        <input id="taverna" name="taverna" type="checkbox" value="1" />
                        <label for="taverna">Taverna</label>
                    </li>
                    <li class="residenziale"></li>
                    <li class="residenziale">
                        <input id="piscina" name="piscina" type="checkbox" value="1" />
                        <label for="piscina">Piscina</label>
                    </li>
                    <li class="residenziale"></li>
                    <li class="commerciale">
                        <input id="montacarichi" name="montacarichi" type="checkbox" value="1" />
                        <label for="montacarichi">Montacarichi</label>
                    </li>
                    <li class="commerciale"></li>
                    <li class="commerciale">
                        <input id="ribalte" name="ribalte" type="checkbox" value="1" />
                        <label for="ribalte">Ribalte</label>
                    </li>
                    <li class="commerciale"></li>
                    <li class="commerciale">
                        <input id="carroponte" name="carroponte" type="checkbox" value="1" />
                        <label for="carroponte">Carroponte</label>
                    </li>
                    <li class="commerciale"></li>
                    <li class="affitto both">
                        <input id="arredato" name="arredato" type="checkbox" />
                        <label for="arredato">Arredato</label> 
                    </li>
                    <li class="affitto both">
                        <select id="tipoArredo" name="tipoArredo" disabled>
                            <option value="0" selected>Seleziona Arredo</option>
                            <option value="completamente">Completamente</option>
                            <option value="parzialmente">Parzialmente</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="allarme" name="allarme" type="checkbox" />
                        <label for="allarme">Impianto Allarme</label>
                    </li>
                    <li class="both">
                        <select id="tipoAllarme" name="tipoAllarme" disabled>
                            <option value="0" selected>Seleziona Tipo</option>
                            <option value="predisposizione">Predisposizione</option>
                            <option value="installato">Installato</option>
                        </select>
                    </li>
                    <li class="both">
                        <label for="riscaldamento">riscaldamento</label>
                    </li>
                    <li class="both">
                        <select id="riscaldamento" name="riscaldamento">
                            <option value="inesistente" selected>inesistente</option>
                            <option value="termosingolo">termosingolo</option>
                            <option value="centralizzato">centralizzato</option>
                        </select>
                    </li>
                    <li class="both">
                        <input id="climatizzatore" name="climatizzatore" type="checkbox" />
                        <label for="climatizzatore">Aria Condizionata</label>
                    </li>
                    <li class="both">
                        <select id="tipoClima" name="tipoClima" disabled>
                            <option value="0" selected>Seleziona Tipo</option>
                            <option value="predisposizione">Predisposizione</option>
                            <option value="installata">Installata</option>
                        </select>
                    </li>
                    <li class="terreno">
                        <label for="ettari">Terreno Ha</label>
                    </li>
                    <li class="terreno">
                        <input id="ettari" name="ettari" type="text" />
                    </li>
                    <li class="terreno">
                        <label for="giacitura">Giacitura</label>
                    </li>
                    <li class="terreno">
                        <input id="giacitura" name="giacitura" type="text" />
                    </li>
                    <li class="terreno">
                        <label for="dotazione">Dotazione Macchine</label>
                    </li>
                    <li class="terreno">
                        <input id="dotazione" name="dotazione" type="text" />
                    </li>
                </ul>
            </div>
            <button id="btnSubmitImmobile" type="button" class="buttonBlue">Salva</button>
        </section>
    </form>
</div>
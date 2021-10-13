<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="mainContainer" class="container clearfix">
    <h3 class="column_1">inserisci immobile:</h3>
    <div class="row column_1"></div>
    <form id="frmInsImmobile" name="frmInsImmobile">
        <section id="datiPrincipaliIns" class="column_1">
            <h6>dati principali:</h6>
            <div>
                <ul>
                    <li>
                        <label for="codRif">Riferimento</label>
                    </li>
                    <li>
                        <input id="codRif" name="codRif" type="text" maxlength="7" placeholder="V00-100" />
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                    <li>
                        <label for="stato">Stato</label>
                    </li>
                    <li>
                        <select id="stato" name="stato">
                            <option>Seleziona Stato</option>
                            <option>Attivo</option>
                            <option>Sospeso</option>
                            <option>Non Attivo</option>
                        </select>
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                    <li>
                        <label for="contratto">Contratto</label>
                    </li>
                    <li>
                        <select id="contratto" name="contratto">
                            <option>Seleziona Contratto</option>
                            <option>Affitto</option>
                            <option>Vendita</option>
                        </select>
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                    <li>
                        <label for="categoria">Categoria</label>
                    </li>
                    <li>
                        <select id="categoria" name="categoria">
                            <option>Seleziona Categoria</option>
                            <option>Residenziale</option>
                            <option>Commerciale</option>
                            <option>Terreno</option>
                        </select>
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                    <li>
                        <label for="tipologia">Tipologia</label>
                    </li>
                    <li>
                        <select id="tipologia" name="tipologia">
                            <option>Seleziona Tipologia</option>
                            <!-- da aggiungere le altri voci in base al tipo di contratto -->
                        </select>
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                    <li>
                        <label for="attivita">Attivit&agrave; Commerciale</label>
                    </li>
                    <li>
                        <select id="attivita" name="attivita">
                            <option>Seleziona Attivit&agrave;</option>
                            <!-- da aggiungere le altri voci -->
                        </select>
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                </ul> 
            </div>
            <div>
                <ul>
                    <li>
                        <label for="condizione">Condizione</label>
                    </li>
                    <li>
                        <select id="condizione" name="condizione">
                            <option>Seleziona Condizione</option>
                            <option>Da Ristrutturare</option>
                            <option>Da Rimodernare</option>
                            <option>Abitabile</option>
                            <option>Buone</option>
                            <option>Ottime</option>
                            <option>Ristrutturato</option>
                            <option>Seminuovo</option>
                            <option>Nuova Costruzione</option>
                        </select>
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                    <li>
                        <label for="vani">Vani</label>
                    </li>
                    <li>
                        <input id="vani" name="vani" type="text" />
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                    <li>
                        <label for="superficie">Superficie</label>
                    </li>
                    <li>
                        <input id="superficie" name="superficie" type="text" />
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                    <li>
                        <label for="prezzo">Prezzo</label>
                    </li>
                    <li>
                        <input id="prezzo" name="prezzo" type="text" />
                        <span>
                            <img src="../immagini/icone/action_check.png" alt="" >
                        </span>
                    </li>
                    <li>
                        <label for="classe">Classe</label>
                    </li>
                    <li>
                        <select id="classe" name="classe">
                            <option>A+</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                            <option>F</option>
                            <option selected>G</option>
                        </select>
                        <label for="indice">Epi</label>
                        <input id="indice" name="indice" type="text" />
                        <select id="misIndice" name="misIndice">
                            <option>kwh/mq&nbsp;annuo</option>
                            <option>kwh/mc&nbsp;annuo</option>
                        </select>
                    </li>
                </ul>
            </div>   
        </section>
        <section id="ubicazioneIns" class="column_1">
            <h6>ubicazione:</h6>
            <ul>
                <li>
                    <label for="localita">Località</label>
                </li>
                <li>
                    <select id="localita" name="localita">
                        <option>Seleziona Localit&agrave;</option>
                    </select>
                    <span>
                        <img src="../immagini/icone/action_check.png" alt="" >
                    </span>
                </li>
                <li>
                    <label for="zona">Zona</label>
                </li>
                <li>
                    <select id="zona" name="zona">
                        <option>Seleziona Zona</option>
                    </select>
                    <span>
                        <img src="../immagini/icone/action_check.png" alt="" >
                    </span>
                </li>
                <div id="mappa">
                    
                </div>
            </ul>
        </section>
        <section id="descrizioneIns" class="column_1">
            <h6>descrizione:</h6>
            <textarea id="descrizione" name="descrizione"></textarea>
        </section>
        <section id="datiAccessoriIns" class="column_1">
            <h6>dati accessori:</h6>
            <div class="residenziale">
                <ul>
                    <li>
                        <label for="piano">Piano</label>
                    </li>
                    <li>
                        <select id="piano" name="piano">
                            <option>Seleziona Piano</option>
                            <option>Interrato</option>
                            <option>Seminterrato</option>
                            <option>Terra</option>
                            <option>Rialzato</option>
                            <option>Ammezzato</option>
                            <option>1&deg;</option>
                            <option>2&deg;</option>
                            <option>3&deg;</option>
                            <option>4&deg;</option>
                            <option>5&deg;</option>
                            <option>6&deg;</option>
                            <option>7&deg;</option>
                            <option>8&deg;</option>
                            <option>9&deg;</option>
                            <option>10&deg;</option>
                        </select>
                    </li>
                    <li>
                        <label for="livelli">Livelli</label>
                    </li>
                    <li>
                        <select id="livelli" name="livelli">
                            <option>Seleziona Livelli</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </li>
                    <li>
                        <input id="ascensore" name="ascensore" type="checkbox" value="1" />
                        <label for="ascensore">Ascensore</label>
                    </li>
                    <li></li>
                    <li>
                        <label for="soggiorno">Soggiorno</label>
                    </li>
                    <li>
                        <input id="soggiorno" name="soggiorno" type="text" />
                    </li>
                    <li>
                        <label for="cucina">Cucina</label>
                    </li>
                    <li>
                        <select id="cucina" name="cucina">
                            <option>Seleziona Cucina</option>
                            <option>Abitabile</option>
                            <option>Angolo Cottura</option>
                            <option>Semiabitabile</option>
                            <option>Cucinotto</option>
                        </select>
                    </li>
                    <li>
                        <label for="camera">Camera</label>
                    </li>
                    <li>
                        <input id="camera" name="camera" type="text" />
                    </li>
                    <li>
                        <label for="bagno">Bagno</label>
                    </li>
                    <li>
                        <input id="bagno" name="bagno" type="text" />
                    </li>
                </ul>
            </div>
            <div class="residenziale">
                <ul>
                    <li>
                        <input id="balcone" name="balcone" type="checkbox" value="1" />
                        <label for="balcone">Balcone/Terrazzo</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="terrazza" name="terrazza" type="checkbox" />
                        <label for="terrazza">Terrazza</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="giardino" name="giardino" type="checkbox" />
                        <label for="giardino">Giardino/Resede</label>
                        <select id="tipoGiardino" name="tipoGiardino" disabled>
                            <option>Seleziona Tipo</option>
                            <option>Condominiale</option>
                            <option>Privato</option>
                        </select>
                    </li>
                    <li></li>
                    <li>
                        <input id="garage" name="garage" type="checkbox" />
                        <label for="garage">Garage</label>
                        <select id="tipoGarage" name="tipoGarage" disabled>
                            <option>Seleziona Tipo</option>
                            <option>Singolo</option>
                            <option>Doppio</option>
                            <option>Triplo</option>
                        </select>
                    </li>
                    <li></li>
                    <li>
                        <input id="soffitta" name="soffitta" type="checkbox" />
                        <label for="soffitta">Soffitta</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="mansarda" name="mansarda" type="checkbox" />
                        <label for="mansarda">Mansarda</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="cantina" name="cantina" type="checkbox" />
                        <label for="cantina">Cantina</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="taverna" name="taverna" type="checkbox" />
                        <label for="taverna">Taverna</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="arredato" name="arredato" type="checkbox" />
                        <label for="arredato">Arredato</label>
                        <select id="tipoArredo" name="tipoArredo" disabled>
                            <option>Seleziona Arredo</option>
                            <option>Completamente</option>
                            <option>Parzialmente</option>
                        </select>
                    </li>
                    <li></li>
                    <li>
                        <input id="allarme" name="allarme" type="checkbox" />
                        <label for="allarme">Impianto Allarme</label>
                        <select id="tipoAllarme" name="tipoAllarme" disabled>
                            <option>Seleziona Tipo</option>
                            <option>Predisposizione</option>
                            <option>Installato</option>
                        </select>
                    </li>
                    <li></li>
                    <li>
                        <input id="climatizzatore" name="climatizzatore" type="checkbox" />
                        <label for="climatizzatore">Aria Condizionata</label>
                        <select id="tipoClima" name="tipoClima" disabled>
                            <option>Seleziona Tipo</option>
                            <option>Predisposizione</option>
                            <option>Installata</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="commerciale">
                <ul>
                    <li>
                        <label for="piano">Piano</label>
                    </li>
                    <li>
                        <select id="piano" name="piano">
                            <option>Seleziona Piano</option>
                            <option>Interrato</option>
                            <option>Seminterrato</option>
                            <option>Terra</option>
                            <option>Rialzato</option>
                            <option>Ammezzato</option>
                            <option>1&deg;</option>
                            <option>2&deg;</option>
                            <option>3&deg;</option>
                            <option>4&deg;</option>
                            <option>5&deg;</option>
                            <option>6&deg;</option>
                            <option>7&deg;</option>
                            <option>8&deg;</option>
                            <option>9&deg;</option>
                            <option>10&deg;</option>
                        </select>
                    </li>
                    <li>
                        <label for="livelli">Livelli</label>
                    </li>
                    <li>
                        <select id="livelli" name="livelli">
                            <option>Seleziona Livelli</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </li>
                    <li>
                        <input id="ascensore" name="ascensore" type="checkbox" value="1" />
                        <label for="ascensore">Ascensore</label>
                    </li>
                    <li></li>
                    <li>
                        <label for="supProduttivi">Mq.&nbsp;Produttivi</label>
                    </li>
                    <li>
                        <input id="supProduttivi" name="supProduttivi" type="text" />
                    </li>
                    <li>
                        <label for="supUffici">Mq.&nbsp;Uffici</label>
                    </li>
                    <li>
                        <input id="supUffici" name="supUffici" type="text" />
                    </li>
                    <li>
                        <label for="supCommerciali">Mq.&nbsp;Commerciali</label>
                    </li>
                    <li>
                        <input id="supCommerciali" name="supCommerciali" type="text" />
                    </li>
                    <li>
                        <label for="supEsterni">Mq.&nbsp;Esterni</label>
                    </li>
                    <li>
                        <input id="supEsterni" name="supEsterni" type="text" />
                    </li>
                    <li>
                        <label for="bagno">Bagno</label>
                    </li>
                    <li>
                        <input id="bagno" name="bagno" type="text" />
                    </li>
                </ul>
            </div>
            <div class="commerciale">
                <ul>
                    <li>
                        <input id="balcone" name="balcone" type="checkbox" value="1" />
                        <label for="balcone">Balcone/Terrazzo</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="terrazza" name="terrazza" type="checkbox" />
                        <label for="terrazza">Terrazza</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="giardino" name="giardino" type="checkbox" />
                        <label for="giardino">Giardino/Resede</label>
                        <select id="tipoGiardino" name="tipoGiardino" disabled>
                            <option>Seleziona Tipo</option>
                            <option>Condominiale</option>
                            <option>Privato</option>
                        </select>
                    </li>
                    <li></li>
                    <li>
                        <input id="garage" name="garage" type="checkbox" />
                        <label for="garage">Garage</label>
                        <select id="tipoGarage" name="tipoGarage" disabled>
                            <option>Seleziona Tipo</option>
                            <option>Singolo</option>
                            <option>Doppio</option>
                            <option>Triplo</option>
                        </select>
                    </li>
                    <li></li>
                    <li>
                        <input id="soffitta" name="soffitta" type="checkbox" />
                        <label for="soffitta">Soffitta</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="cantina" name="cantina" type="checkbox" />
                        <label for="cantina">Cantina</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="montacarichi" name="montacarichi" type="checkbox" />
                        <label for="montacarichi">Montacarichi</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="ribalte" name="ribalte" type="checkbox" />
                        <label for="ribalte">Ribalte</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="carroponte" name="carroponte" type="checkbox" />
                        <label for="carroponte">Carroponte</label>
                    </li>
                    <li></li>
                    <li>
                        <input id="arredato" name="arredato" type="checkbox" />
                        <label for="arredato">Arredato</label>
                        <select id="tipoArredo" name="tipoArredo" disabled>
                            <option>Seleziona Arredo</option>
                            <option>Completamente</option>
                            <option>Parzialmente</option>
                        </select>
                    </li>
                    <li></li>
                    <li>
                        <input id="allarme" name="allarme" type="checkbox" />
                        <label for="allarme">Impianto Allarme</label>
                        <select id="tipoAllarme" name="tipoAllarme" disabled>
                            <option>Seleziona Tipo</option>
                            <option>Predisposizione</option>
                            <option>Installato</option>
                        </select>
                    </li>
                    <li></li>
                    <li>
                        <input id="climatizzatore" name="climatizzatore" type="checkbox" />
                        <label for="climatizzatore">Aria Condizionata</label>
                        <select id="tipoClima" name="tipoClima" disabled>
                            <option>Seleziona Tipo</option>
                            <option>Predisposizione</option>
                            <option>Installata</option>
                        </select>
                    </li>
                </ul>
            </div>
            <button id="btnInsImmobile" class="buttonBlue">Salva</button>
        </section>
    </form>
</div>
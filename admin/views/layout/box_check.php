<? if ($_POST['cat'] == '1') : ?>
    <div class="residenziale">
        <ul>
            <li>
                <label for="piano">Piano</label>
            </li>
            <li>
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
            <li>
                <label for="livelli">Livelli</label>
            </li>
            <li>
                <select id="livelli" name="livelli">
                    <option value="0" selected>Seleziona Livelli</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
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
                <input id="soggiorno" name="soggiorno" type="number" />
            </li>
            <li>
                <label for="cucina">Cucina</label>
            </li>
            <li>
                <select id="cucina" name="cucina">
                    <option value="0" selected>Seleziona Cucina</option>
                    <option value="abitabile">Abitabile</option>
                    <option value="angolo cottura">Angolo Cottura</option>
                    <option value="semiabitabile">Semiabitabile</option>
                    <option value="cucinotto">Cucinotto</option>
                </select>
            </li>
            <li>
                <label for="camera">Camera</label>
            </li>
            <li>
                <input id="camera" name="camera" type="number" />
            </li>
            <li>
                <label for="bagno">Bagno</label>
            </li>
            <li>
                <input id="bagno" name="bagno" type="number" />
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
            </li>
            <li>
                <select id="tipoGiardino" name="tipoGiardino" disabled>
                    <option value="0" selected>Seleziona Tipo</option>
                    <option value="condominiale">Condominiale</option>
                    <option value="privato">Privato</option>
                </select>
            </li>
            <li>
                <input id="garage" name="garage" type="checkbox" />
                <label for="garage">Garage</label>
            </li>
            <li>
                <select id="tipoGarage" name="tipoGarage" disabled>
                    <option value="0" selected>Seleziona Tipo</option>
                    <option value="singolo">Singolo</option>
                    <option value="doppio">Doppio</option>
                    <option value="triplo">Triplo</option>
                </select>
            </li>
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
                <input id="piscina" name="piscina" type="checkbox" />
                <label for="piscina">Piscina</label>
            </li>
            <li></li>
            <li class="affitto">
                <input id="arredato" name="arredato" type="checkbox" />
                <label for="arredato">Arredato</label> 
            </li>
            <li class="affitto">
                <select id="tipoArredo" name="tipoArredo" disabled>
                    <option value="0" selected>Seleziona Arredo</option>
                    <option value="completamente">Completamente</option>
                    <option value="parzialmente">Parzialmente</option>
                </select>
            </li>
            <li>
                <input id="allarme" name="allarme" type="checkbox" />
                <label for="allarme">Impianto Allarme</label>
            </li>
            <li>
                <select id="tipoAllarme" name="tipoAllarme" disabled>
                    <option value="0" selected>Seleziona Tipo</option>
                    <option value="predisposizione">Predisposizione</option>
                    <option value="installato">Installato</option>
                </select>
            </li>
            <li>
                <input id="climatizzatore" name="climatizzatore" type="checkbox" />
                <label for="climatizzatore">Aria Condizionata</label>
            </li>
            <li>
                <select id="tipoClima" name="tipoClima" disabled>
                    <option value="0" selected>Seleziona Tipo</option>
                    <option value="predisposizione">Predisposizione</option>
                    <option value="installata">Installata</option>
                </select>
            </li>
        </ul>
    </div>
<? endif;?>
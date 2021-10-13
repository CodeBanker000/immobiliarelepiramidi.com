<?php
/***********************************************************************************
 *                           STRUTTURA HTML DELL'ASIDE
 ***********************************************************************************/
?>
<aside class="columnAside">
    <!-- form di ricerca -->
    <section id="ricerca">
        <h6>ricerca avanzata:</h6>
        <form id="frmRicerca" action="">
            <div id="boxSearchComune">
                <label for="comune">localit&agrave;</label>
                <select id="comune" name="comune">
                    <option>selezionare localit&agrave;</option>
                </select>
            </div>
            <div id="boxSearchZona">
                <label for="zona">zona</label>
                <select id="zona" name="zona">
                    <option>selezionare zona</option>
                </select>
            </div>
            <fieldset>
                <legend>contratto:</legend>
                <div id="boxSearchContratto">
                    <div>                       
                        <input id="vendita" name="contratto" type="radio">
                        <label for="vendita">vendita</label>
                    </div>
                    <div>
                        <input id="affitto" name="contratto" type="radio">
                        <label for="affitto">affitto</label>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>categoria:</legend>
                <div id="boxSearchCategoria">
                    <div>
                        <input id="residenziale" name="categoria" type="radio">
                        <label for="residenziale">residenziale</label>
                    </div>
                    <div>
                        <input id="commerciale" name="categoria" type="radio">
                        <label for="commerciale">commerciale</label>
                    </div>
                </div>
            </fieldset>
            <div id="boxSearchTipo">
                <label for="tipologia">tipologia:</label>
                <select id="tipologia" name="tipologia">
                    <option>selezionare tipologia</option>
                </select>
            </div>
            <div id="boxSearchAttCommerciale">
                <label for="attCommerciale">attivit&agrave;&nbsp;commerciale:</label>
                <select id="attCommerciale" name="attCommerciale">
                    <option>selezionare attivit&agrave;</option>
                </select>
            </div>
            <div>
                <label for="stato">stato:</label>
                <select id="stato" name="stato">
                    <option>selezionare stato</option>
                </select>
            </div>
            <fieldset>
                <legend>vani:</legend>
                <div id="boxSearchVani">
                    <div>
                        <label for="minVani">min:</label>
                        <input id="minVani" name="minVani" type="text">
                    </div>
                    <div>   
                        <label for="maxVani">max:</label>
                        <input id="maxVani" name="maxVani" type="text">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>mq.:</legend>
                <div id="boxSearchMQ">
                    <div>
                        <label for="minMQ">min:</label>
                        <input id="minMQ" name="minMQ" type="text">
                    </div>
                    <div>
                        <label for="maxMQ">max:</label>
                        <input id="maxMQ" name="maxMQ" type="text">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>prezzo:</legend>
                <div id="boxSearchPrezzo">
                    <div>
                        <label for="minPrezzo">min:</label>
                        <input id="minPrezzo" name="minPrezzo" type="text">
                    </div>
                    <div>
                        <label for="maxPrezzo">max:</label>
                        <input id="maxPrezzo" name="maxPrezzo" type="text">
                    </div>
                </div>
            </fieldset>
            <div id="boxSearchButton">
                <button class="buttonGreen" id="btnRicerca" type="submit">cerca</button>
            </div>
        </form>
    </section>
    <!-- Form di ricerca per codice -->
    <section id="ricercaCodice" class="riga gradient">
        <h6>ricerca per codice:</h6>
        <form id="frmRicercaCodice" action="">
            <label>codice immobile:</label>
            <br>
            <input type="text">
            <button class="buttonGreen" type="button">Cerca</button>
        </form>
    </section>
</aside>
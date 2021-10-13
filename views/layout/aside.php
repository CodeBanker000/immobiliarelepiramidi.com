<?php
/***********************************************************************************
 *                           STRUTTURA HTML DELL'ASIDE
 ***********************************************************************************/
?>
<aside class="columnAside">
    <!-- form di ricerca -->
    <section id="ricerca">
        <h6>ricerca avanzata:</h6>
        <form id="frmRicerca" action="<?=URL?>ricerca" method="post">
            <div id="boxSearchComune">
                <label for="comune">localit&agrave;</label>
                <select id="comune" name="comune">
                    <option value="0" selected>selezionare localit&agrave;</option>
                    <? foreach ($this->comune as $comune) :?>
                        <option value="<?=$comune['id_comune']?>"><?=$comune['nm_comune']?></option>
                    <? endforeach; ?>
                </select>
            </div>
            <div id="boxSearchZona" hidden>
                <label for="zona">zona</label>
                <select id="zona" name="zona">
                    <option value="0" selected>selezionare zona</option>
                </select>
            </div>
            <fieldset>
                <legend>contratto:</legend>
                <div id="boxSearchContratto">
                    <div>                       
                        <input id="vendita" name="contratto" type="radio" value="2">
                        <label for="vendita">vendita</label>
                    </div>
                    <div>
                        <input id="affitto" name="contratto" type="radio" value="1">
                        <label for="affitto">affitto</label>
                    </div>
                </div>
            </fieldset>
            <div id="boxSearchCategoria">
                <label for="categoria">categoria:</label>
                <select id="categoria" name="categoria">
                    <option value="0" selected>selezionare categoria</option>
                    <? foreach ($this->categ as $categ) :?>
                        <option value="<?=$categ['id_categ']?>"><?=$categ['nm_categ']?></option>
                    <? endforeach; ?>
                </select>
            </div>
            <div id="boxSearchTipo" hidden>
                <label for="tipologia">tipologia:</label>
                <select id="tipologia" name="tipologia">
                    <option value="0" selected>selezionare tipologia</option>
                </select>
            </div>
            <div id="boxSearchAttCommerciale" hidden>
                <label for="attCommerciale">attivit&agrave;&nbsp;commerciale:</label>
                <select id="attCommerciale" name="attCommerciale">
                    <option value="1" selected>selezionare attivit&agrave;</option>
                </select>
            </div>
            <div>
                <label for="stato">stato:</label>
                <select id="stato" name="stato">
                    <option value="0" selected>selezionare stato</option>
                    <? foreach ($this->cond as $k => $v) :?>
                        <option value="<?=$this->cond[$k]['id_cond']?>"><?=$this->cond[$k]['nm_cond']?></option>
                    <? endforeach; ?>
                </select>
            </div>
            <fieldset>
                <legend>vani:</legend>
                <div id="boxSearchVani">
                    <div>
                        <label for="minVani">min:</label>
                        <input id="minVani" name="minVani" type="number">
                    </div>
                    <div>   
                        <label for="maxVani">max:</label>
                        <input id="maxVani" name="maxVani" type="number">
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>mq.:</legend>
                <div id="boxSearchMQ">
                    <div>
                        <label for="minMQ">min:</label>
                        <input id="minMQ" name="minMQ" type="number">
                    </div>
                    <div>
                        <label for="maxMQ">max:</label>
                        <input id="maxMQ" name="maxMQ" type="number">
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
        <form id="frmRicercaCodice" action="<?=URL?>dettagli/codice" method="post">
            <label>codice immobile:</label>
            <br>
            <input id="codRif" name="codRif" type="text">
            <button class="buttonGreen" type="submit">Cerca</button>
        </form>
    </section>
</aside>
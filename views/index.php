<?php
/*************************************************************************************
 *                        STRUTTURA PAGINA HOME VENDESI
 *************************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <div id="gallery" class="column_1">
        <ul id="imgContainer" class="clearfix">	
            <? foreach ($this->slideshow as $slideshow) : ?>
            <li>
                <img src="<?=URL.PATH_IMAGE.$slideshow['id_immo'].'/'.$slideshow['vetrina']?>" alt="<?=$slideshow['alt']?>" />
                <hgroup>
                    <h1><?=$slideshow['nm_contr']?>&nbsp;<?=$slideshow['nm_tipo']?>&nbsp;pressi&nbsp;<?=$slideshow['nm_zona']?></h1>
                    <h2>&euro; <?=$slideshow['prezzo']?>&nbsp;&nbsp;<a href="<?=URL?>dettagli/immobile/<?=$slideshow['id_immo']?>">Dettagli...</a></h2>
                </hgroup>
            </li>
            <? endforeach; ?>
        </ul>
        <div id="prevBotton">&lt;&lt;</div>
        <div id="nextBotton">&gt;&gt;</div>
    </div>
    <h3  class="column_1">Ultimi Inserimenti:</h3>
    <div class="column_1 row"></div>
    <div id="last_article">
        <? foreach ($this->last as $last) : ?>
            <article class="column_1_4">
                <h4><?=$last['nm_contr']?>&nbsp;<?=$last['nm_tipo']?>&nbsp;<?=$last['nm_zona']?>:</h4>
                <img src="<?=URL.PATH_IMAGE.$last['id_immo'].'/'.$last['thumb']?>" alt="<?=$last['alt']?>" />
                <section>
                    <dl>
                        <dt>Mq:</dt>
                        <dd><?=$last['sup']?></dd>
                        <dt>Vani:</dt>
                        <dd><?=$last['vani']?></dd>
                        <dt>Classe:</dt>
                        <dd>
                            <? if ($last['ape'] == "non soggetto") : ?>
                                non soggetto
                            <? else : ?>
                                <img src="<?=URL.PATH_ICO?>classe<?=$last['ape']?>.png" width="30">
                            <? endif; ?>
                        </dd>
                        <dt>Prezzo:</dt>
                        <dd><?=$last['prezzo']?></dd>
                    </dl>
                    <span><a class="buttonBlue" href="<?=URL?>dettagli/immobile/<?=$last['id_immo']?>">Dettagli...</a></span>
                </section>	
            </article>
        <? endforeach; ?>
    </div>
    <section class="column_1_4">
        <h3>Ricerca per Codice:</h3>
        <div class="row"></div>
        <form id="ricercaHomeCod" action="<?=URL?>dettagli/codice" method="post">
            <p>Inserire il codice di riferimento dell'immobile, se l'immobile &egrave; ancora disponibile, vedrete immediatamente la scheda.
               <br><br>Digitare il Codice qui sotto:</p>
            <input id="codRif" name="codRif" type="text">
            <span>
                <button class="buttonGreen" type="submit">cerca</button>
            </span>
        </form>
    </section>
    <section class="column_1_2">
        <h3>Ricerca Immobili:</h3>
        <div class="row"></div>
        <form id="ricercaHome" action="<?=URL?>ricerca" method="post" class="clearfix">
            <div class="col">
                <div id="boxSearchHomeComune">
                    <label for="comune">localit&agrave;:</label>
                    <select id="comune" name="comune">
                        <option value="0" selected>selezionare localit&agrave;</option>
                        <? foreach ($this->comune as $comune) :?>
                            <option value="<?=$comune['id_comune']?>"><?=$comune['nm_comune']?></option>
                        <? endforeach; ?>
                    </select>
                </div>
                <div id="boxSearchHomeZona" hidden>
                    <label for="zona">zona</label>
                    <select id="zona" name="zona">
                        <option value="0" selected>selezionare zona</option>
                    </select>
                </div>
                <fieldset>
                    <legend>contratto:</legend>
                    <div id="boxSearchHomeContratto">
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
                <div id="boxSearchHomeCategoria">
                    <label for="categoria">categoria:</label>
                    <select id="categoria" name="categoria">
                        <option value="0" selected>selezionare categoria</option>
                        <? foreach ($this->categ as $categ) :?>
                            <option value="<?=$categ['id_categ']?>"><?=$categ['nm_categ']?></option>
                        <? endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col">
                <div id="boxSearchHomeTipo">
                    <label for="tipologia">tipologia:</label>
                    <select id="tipologia" name="tipologia">
                        <option value="0" selected>selezionare tipologia</option>
                    </select>
                </div>
                <div id="boxSearchHomeAttCommerciale" hidden>
                    <label for="attCommerciale">attivit&agrave;&nbsp;commerciale:</label>
                    <select id="attCommerciale" name="attCommerciale">
                        <option value="1" selected>selezionare attivit&agrave;</option>
                    </select>
                </div>
                <div>
                    <div id="boxSearchHomeVani">
                        <label for="vani">vani:</label>
                        <input id="vani" name="vani" type="text" />
                    </div>
                    <div id="boxSearchHomeSuperficie">
                        <label for="superficie">mq.:</label>
                        <input id="superficie" name="superficie" type="text" />
                    </div>
                </div>
                <div id="boxSearchHomePrezzo">
                    <label for="prezzo">prezzo:</label>
                    <input id="prezzo" name="prezzo" type="text" />
                </div>
            </div>
            <span>
                <input id="searchIndex" name="searchIndex" type="hidden" value="1">
                <button id="btnSearchHome" name="btnSearchHome" class="buttonGreen" type="submit">trova</button>
            </span>
        </form>
    </section>
    <section class="column_1_4">
        <h3>Ricerca Nel Network:</h3>
        <div class="row"></div>
        <div id="ricercaNetwork">
            <!--Inizio Tool di ricerca immobili powered by AgestaNET-->
            <iframe src="http://www.agestanet.it/ricerca/iframe_ricerca.asp?cod_agenzia_adm=3317&table_color=5971B5&tipo_maschera=A" scrolling="no" width="250" height="300" frameborder="0"></iframe>
            <!--Fine Tool di ricerca immobili powered by AgestaNET-->
        </div>
    </section>
    <section class="column_1_2">
        <h3>Tassi Interesse:</h3>
        <div class="row"></div>
        <div id="tassiInteresse">
            <!--Inizio Tassi Interesse powered by Telemutuo -->
            <iframe  width="350" height="415" src="http://telemutuo.accomazzi.net/tassi-formattati.php"></iframe>
            <!--Fine Tassi Interesse powered by Telemutuo-->
        </div>
    </section>
    <section class="column_1_4">
        <h3>Ricerca Mutuo:</h3>
        <div class="row"></div>
        <div id="ricercaMutuoSmall">
            <table class="tableCerchiMutuo" border="0" cellspacing="2" cellpadding="2">
                <form method="post" action="telemutuo.php" name="formPrevent" id="formPrevent" >
                    <input type="hidden" value="A" name="Finalita" />
                    <input type="hidden" value="1250000" name="Valore" />
                    <input type="hidden" value="FI" name="Provincia" />
                    <input type="hidden" value="DipAut" name="Destinatari" />
                    <input type="hidden" value="Tasso" name="miglior" />
                    <tr> 
                        <td><span class="tipoBlanca">Importo</span></td>
                    </tr>
                    <tr> 
                    <td> 
                        <input type="text" name="Importo"  maxlength="7" id="valore" />
                    </td>
                    </tr>
                    <tr> 
                        <td><span class="tipoBlanca">Anni</span></td>
                    </tr>
                    <tr> 
                        <td>
                            <input type="text" name="Durata"  maxlength="2" id="durata" />
                        </td>
                    </tr>
                    <tr> 
                        <td><span class="tipoBlanca">Tasso</span></td>
                    </tr>
                    <tr> 
                        <td>
                            <select id="tipo" name="TipoMutuo">
                                <option value="Fisso" selected="selected">Tasso fisso</option>
                                <option value="Variabile">Variabile Classico</option>
                            </select>
                        </td>
                    </tr>
                    <tr> 
                        <td> 
                            <input type="image" name="cerca" src="immagini/telemutuo/btn_calcolarata.png" style="margin-top: 14px;">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </section>
</div>
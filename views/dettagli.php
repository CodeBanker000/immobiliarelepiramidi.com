<?php
/***********************************************************************************
 *                        STRUTTURA HTML DELLA PAGINA DETTAGLI
 ***********************************************************************************/

$immobile = $this->immobile[0];
$immoID = $immobile['id_immo'];
$accessori = $this->accessori[0];
?>
<div id="mainContainer" class="container clearfix">
    <? require_once $this->aside; ?>
    <h3 class="column_3_4">
        <?=$immobile['nm_contr']?>&nbsp;<?=$immobile['nm_tipo']?>&nbsp;<?=$immobile['nm_categ']?>&nbsp;<?=$immobile['cod_rif']?>:
    </h3>
    <div id="infoTop" class="column_3_4">
        <span>vani:&nbsp;<strong><?=$immobile['vani']?></strong></span>
        <span>mq:&nbsp;<strong><?=$immobile['sup']?></strong></span>
        <span class="prezzo">&euro;&nbsp;<?=number_format($immobile['prezzo'], 0, ',', '.')?></span>
    </div>
    <div class="column_3_4 row"></div>
    <section id="fotogallery" class="column_3_4">
        <h6>galleria fotografica:</h6>
        <div id="placeImg">
            <img src="<?=URL.PATH_IMAGE.$immoID.'/'.$this->immagini[0]['gallery']?>" alt="<?=$this->immagini[0]['alt']?>">
        </div>
        <div id="imgHolder">
            <ul>
                <? foreach ($this->immagini as $key => $image) : ?>
                    <li id="list_<?=$key?>">
                        <a href="<?=URL.PATH_IMAGE.$immoID.'/'.$image['gallery']?>">
                            <img src="<?=URL.PATH_IMAGE.$immoID.'/'.$image['thumb']?>" alt="<?=$image['alt']?>">
                        </a>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </section>
    <section id="descrizione" class="column_3_4">
        <h6>descrizione:</h6>
        <p><?=$immobile['desc']?></p>
    </section>
    <section id="ubicazione" class="column_3_4">
        <h6>Ubicazione:</h6>
            <div>
                <dl>
                    <dt>localit&agrave;:</dt>
                    <dd><?=$immobile['nm_comune']?></dd>
                    <dt>zona:</dt>
                    <dd><?=$immobile['nm_zona']?></dd>
                </dl>
            </div>
            <div>
                <iframe width="800" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=via+M.+R.+Cecconi,+1,+Firenze&amp;aq=&amp;sll=43.355179,11.029038&amp;sspn=2.140779,5.377808&amp;ie=UTF8&amp;hq=&amp;hnear=Via+M.+Roselli+Cecconi,+1,+Firenze,+Toscana&amp;t=m&amp;ll=43.791172,11.219788&amp;spn=0.012392,0.068579&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=via+M.+R.+Cecconi,+1,+Firenze&amp;aq=&amp;sll=43.355179,11.029038&amp;sspn=2.140779,5.377808&amp;ie=UTF8&amp;hq=&amp;hnear=Via+M.+Roselli+Cecconi,+1,+Firenze,+Toscana&amp;t=m&amp;ll=43.791172,11.219788&amp;spn=0.012392,0.068579&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Visualizzazione ingrandita della mappa</a></small>
            </div>
    </section>
    <section id="caratteristiche" class="column_3_4">
        <h6>Caratteristiche Immobile:</h6>
        <div>
            <dl>
                <dt>tipo:</dt>
                <dd><?=$immobile['nm_tipo']?></dd>
                <dt>attivit&agrave;:</dt>
                <? if ($immobile['att_comm'] != 1) : ?>
                    <dd><?=$immobile['nm_att_comm']?></dd>
                    <dt>tipo propriet&agrave;:</dt>
                <? endif; ?>
                <dd><?=$accessori['tipo_prop']?></dd>
                <dt>cod. rif.:</dt>
                <dd><?=$immobile['cod_rif']?></dd>
                <dt>piano:</dt>
                <dd><?=$accessori['piano']?></dd>
                <dt>livelli:</dt>
                <dd><?=$accessori['livelli']?></dd>
                <dt>ascensore:</dt>
                <dd>
                <? if ($accessori['ascensore'] == 1) : ?>
                    <img src="<?=URL.PATH_ICO?>action_check.png">
                <? else : ?>
                    <img src="<?=URL.PATH_ICO?>action_delete.png">
                <? endif; ?>
                </dd>
                <dt>stato:</dt>
                <dd><?=$immobile['cond']?></dd>
                <? if ($immobile['categ'] == 1) : ?>
                    <dt>soggiorno:</dt>
                    <dd><?=$accessori['soggiorno']?></dd>
                    <dt>cucina:</dt>
                    <dd><?=$accessori['cucina']?></dd>
                    <dt>camere:</dt>
                    <dd><?=$accessori['camera']?></dd>
                <? endif; ?>
                <? if ($immobile['categ'] == 2) : ?>
                    <dt>superficie produzione:</dt>
                    <dd><?=$accessori['sup_prod']?></dd>
                    <dt>superficie uffici:</dt>
                    <dd><?=$accessori['sup_uff']?></dd>
                    <dt>superficie commerciale:</dt>
                    <dd><?=$accessori['sup_comm']?></dd>
                    <dt>superficie esterni:</dt>
                    <dd><?=$accessori['sup_est']?></dd>
                <? endif; ?>
                <? if ($immobile['categ'] == 3) : ?>
                    <dt>coltura:</dt>
                    <dd><?=$accessori['coltura']?></dd>
                    <dt>panorama:</dt>
                    <dd><?=$accessori['panorama']?></dd>
                    <dt>ettari:</dt>
                    <dd><?=$accessori['ettari']?></dd>
                    <dt>giacitura:</dt>
                    <dd><?=$accessori['giacitura']?></dd>
                    <dt>dotazione:</dt>
                    <dd><?=$accessori['dotazione']?></dd>
                <? endif; ?>
                <dt>bagno:</dt>
                <dd><?=$accessori['bagno']?></dd>      
            </dl>
        </div>
        <div>
            <dl>
                <dt>balcone/terrazzo:</dt>
                <dd>
                    <? if ($accessori['balcone'] == 1) : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? endif; ?>
                </dd>
                <dt>terrazza:</dt>
                <dd>
                    <? if ($accessori['terrazza'] == 1) : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? endif; ?>
                </dd>
                <dt>giardino/resede:</dt>
                <dd>
                    <? if ($accessori['giardino'] == '0') : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">&nbsp;<?=$accessori['giardino']?>
                    <? endif; ?>
                </dd>
                <dt>garage:</dt>
                <dd>
                    <? if ($accessori['garage'] == '0') : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">&nbsp;<?=$accessori['garage']?>
                    <? endif; ?>
                </dd>
                <dt>soffitta:</dt>
                <dd>
                    <? if ($accessori['soffitta'] == 1) : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? endif; ?>
                </dd>
                <dt>mansarda:</dt>
                <dd>
                    <? if ($accessori['mansarda'] == 1) : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? endif; ?>
                </dd>
                <dt>cantina:</dt>
                <dd>
                    <? if ($accessori['cantina'] == 1) : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? endif; ?>
                </dd>
                <dt>taverna:</dt>
                <dd>
                    <? if ($accessori['taverna'] == 1) : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? endif; ?>
                </dd>
                <dt>piscina:</dt>
                <dd>
                    <? if ($accessori['piscina'] == 1) : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? endif; ?>
                </dd>
                <? if ($immobile['categ'] == 2) :?>
                    <dt>montacarichi:</dt>
                    <dd>
                        <? if ($accessori['montacarichi'] == 1) : ?>
                            <img src="<?=URL.PATH_ICO?>action_check.png">
                        <? else : ?>
                            <img src="<?=URL.PATH_ICO?>action_delete.png">
                        <? endif; ?>
                    </dd>
                    <dt>ribalte:</dt>
                    <dd>
                        <? if ($accessori['ribalte'] == 1) : ?>
                            <img src="<?=URL.PATH_ICO?>action_check.png">
                        <? else : ?>
                            <img src="<?=URL.PATH_ICO?>action_delete.png">
                        <? endif; ?>
                    </dd>
                    <dt>carroponte:</dt>
                    <dd>
                        <? if ($accessori['carroponte'] == 1) : ?>
                            <img src="<?=URL.PATH_ICO?>action_check.png">
                        <? else : ?>
                            <img src="<?=URL.PATH_ICO?>action_delete.png">
                        <? endif; ?>
                    </dd>
                <? endif; ?>
                <? if ($immobile['id_contr'] == 2) : ?>
                    <dt>arredato:</dt>
                    <dd>
                        <? if ($accessori['arredato'] == '0') : ?>
                            <img src="<?=URL.PATH_ICO?>action_delete.png">
                        <? else : ?>
                            <img src="<?=URL.PATH_ICO?>action_check.png">&nbsp;<?=$accessori['arredato']?>
                        <? endif; ?>
                    </dd>
                <? endif; ?>
                <dt>impianto allarme:</dt>
                <dd>
                    <? if ($accessori['allarme'] == '0') : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">&nbsp;<?=$accessori['allarme']?>
                    <? endif; ?>
                </dd>
                <dt>riscaldamento:</dt>
                <dd><?=$accessori['riscaldamento']?></dd>
                <dt>aria condizionata:</dt>
                <dd>
                    <? if ($accessori['climatizzatore'] == '0') : ?>
                        <img src="<?=URL.PATH_ICO?>action_delete.png">
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>action_check.png">&nbsp;<?=$accessori['climatizzatore']?>
                    <? endif; ?>
                </dd>
                <dt>classe energetica:</dt>
                <dd>
                    <? if ($immobile['ape'] == "non soggetto") : ?>
                        non soggetto
                    <? else : ?>
                        <img src="<?=URL.PATH_ICO?>classe<?=$immobile['ape']?>.png" width="30">&nbsp;<?=$immobile['epi']?>
                    <? endif; ?>
                </dd>
            </dl>
        </div>
    </section>
    <section id="contatta" class="column_3_4">
        <h6>Richiedi Maggiori Informazioni:</h6>
        <form id="frmRichiestaInfo" name="frmRichiestaInfo">
            <div>
                <ul>
                    <li>
                        <label for="nome">nome:</label>
                    </li>
                    <li>
                        <input id="nome" name="nome" type="text" required>
                    </li>
                    <li>
                        <label for="cognome">cognome:</label>
                    </li>
                    <li>
                        <input id="cognome" name="cognome" type="text" required>
                    </li>
                    <li>
                        <label for="tel">telefono:</label>
                    </li>
                    <li>
                        <input id="tel" name="tel" type="text" >
                    </li>
                    <li>
                        <label for="email">email:</label>
                    </li>
                    <li>
                        <input id="email" name="email" type="text">
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <label for="messaggio">messaggio:</label>
                    </li>
                    <li>
                        <textarea id="messaggio" name="messaggio"></textarea>
                    </li>
                    <li>
                        <label class="checkPrivacy">
                            <input id="privacy" name="privacy" type="checkbox">Ho preso visione della <a href="<?=URL?>privacy">privacy</a> policy
                        </label>
                        <input id="verifica" name="verifica" type="hidden">
                        <input id="codice" name="codice" type="hidden" value="<?=$immobile['cod_rif']?>">
                    </li>
                </ul>
            </div>
            <span>
                <button id="btnFrmRichiestaInfo" name="btnFrmRichiestaInfo" type="button" class="buttonRed">Invia</button>
            </span>
        </form>
    </section>
</div>
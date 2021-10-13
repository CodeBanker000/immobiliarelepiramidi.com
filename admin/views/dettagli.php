<?php
/***********************************************************************************
 *                  STRUCTUR HTML OF THE "DETTAGLI" PAGE FROM ADMIN
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
        <span class="prezzo">&euro;&nbsp;<?=$immobile['prezzo']?></span>
    </div>
    <div class="column_3_4 row"></div>
    <section id="fotogallery" class="column_3_4">
        <h6>galleria fotografica:</h6>
        <div id="placeImg">
            <img src="<?=URL.PATH_IMAGE.$immoID.'/'.$this->immagini[0]['gallery']?>" alt="<?=$this->immagini[0]['alt']?>" width="573">
        </div>
        <div id="imgHolder">
            <ul>
                <? foreach ($this->immagini as $image) : ?>
                    <li>
                        <img src="<?=URL.PATH_IMAGE.$immoID.'/'.$image['thumb']?>" alt="<?=$image['alt']?>">
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
        <? switch ($immobile['id_categ']) : 
            case 1: ?>
                <div>
                    <dl>
                        <dt>tipo:</dt>
                        <dd><?=$immobile['nm_tipo']?></dd>
                        <dt>tipo propriet&agrave;:</dt>
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
                        <dt>soggiorno:</dt>
                        <dd><?=$accessori['soggiorno']?></dd>
                        <dt>cucina:</dt>
                        <dd><?=$accessori['cucina']?></dd>
                        <dt>camere:</dt>
                        <dd><?=$accessori['camera']?></dd>
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
                <? break; 
            case 2: ?>
                <div>
                    <dl>
                        <dt>tipo:</dt>
                        <dd><?=$immobile['nm_tipo']?></dd>
                        <dt>tipo propriet&agrave;:</dt>
                        <dd><?=$accessori['tipo_prop']?></dd>
                        <dt>attivit&agrave;:</dt>
                        <dd><?=$immobile['att_comm']?></dd>
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
                        <dt>superficie produzione:</dt>
                        <dd><?=$accessori['sup_prod']?></dd>
                        <dt>superficie uffici:</dt>
                        <dd><?=$accessori['sup_uff']?></dd>
                        <dt>superficie commerciale:</dt>
                        <dd><?=$accessori['sup_comm']?></dd>
                        <dt>superficie esterni:</dt>
                        <dd><?=$accessori['sup_est']?></dd>
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
                        <dt>montacarichi:</dt>
                        <dd>
                            <? if ($accessori['montacarichi'] == 1) : ?>
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
                <? break; 
            case 3 :?>
                <div>
                    <dl>
                        <dt>tipo:</dt>
                        <dd><?=$immobile['nm_tipo']?></dd>
                        <dt>tipo propriet&agrave;:</dt>
                        <dd><?=$accessori['tipo_prop']?></dd>
                        <dt>attivit&agrave;:</dt>
                        <dd><?=$immobile['att_comm']?></dd>
                        <dt>cod. rif.:</dt>
                        <dd><?=$immobile['cod_rif']?></dd>
                        <dt>coltura:</dt>
                        <dd><?=$accessori['coltura']?></dd>
                        <dt>panorama:</dt>
                        <dd><?=$accessori['panorama']?></dd>
                        <dt>stato:</dt>
                        <dd><?=$immobile['cond']?></dd>
                        <dt>ettari:</dt>
                        <dd><?=$accessori['ettari']?></dd>
                        <dt>giacitura:</dt>
                        <dd><?=$accessori['giacitura']?></dd>
                        <dt>dotazione:</dt>
                        <dd><?=$accessori['dotazione']?></dd>   
                    </dl>
                </div>
                <div>
                    <dl>
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
                <? break; ?>
        <? endswitch; ?>   
    </section>
</div>
<?php
/***********************************************************************************
 *                        STRUTTURA HTML DELLA PAGINA VENDITA 
 ***********************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <? require_once $this->aside; ?>
    <h3  class="column_3_4"><?=$this->h3?>:</h3>
    <div class="column_3_4 row"></div>
    <div id="result">
        <? foreach ($this->lista as $lista) : ?>
        <article class="column_1_4">
            <h4><?=$lista['nm_tipo']?>&nbsp;<?=$lista['nm_zona']?>&nbsp;<?=$lista['cod_rif']?>:</h4>
            <img src="<?=URL.PATH_IMAGE.$lista['id_immo'].'/'.$lista['thumb']?>" alt="<?=$lista['alt']?>" />
            <section>
                <dl>
                    <dt>Mq:</dt>
                    <dd><?=$lista['sup']?></dd>
                    <dt>Vani:</dt>
                    <dd><?=$lista['vani']?></dd>
                    <dt>Classe:</dt>
                    <dd>
                        <? if ($lista['ape'] == "non soggetto") : ?>
                            non soggetto
                        <? else : ?>
                            <img src="<?=URL.PATH_ICO?>classe<?=$lista['ape']?>.png" >
                        <? endif; ?>
                    </dd>
                    <dt>Prezzo:</dt>
                    <dd><?=$lista['prezzo']?></dd>
                </dl>
                <span><a class="buttonBlue" href="<?=URL?>dettagli/immobile/<?=$lista['id_immo']?>">Dettagli...</a></span>
            </section>	
        </article>
        <? endforeach; ?>
    </div>
</div>
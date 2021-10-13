<?php
/*******************************************************************************
 *           STRUCTUR HTML OF THE "LISTA IMMOBILI" PAGE FROM ADMIN
 *******************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <table class="column_1">
        <thead>
            <tr>
                <th>thumb</th>
                <th>cod. rif.</th>
                <th>contratto</th>
                <th>tipologia</th>
                <th>comune</th>
                <th>prezzo</th>
                <th>mq</th>
                <th>vani</th>
                <th>piano</th>
                <th>classe</th>
                <th>dettagli</th>
                <th>modifica</th>
                <th>foto</th>
                <th>copia</th>
                <th>elimina</th>
            </tr>
        </thead>
        <tbody>
            <? if (count($this->lista) != 0) : ?>
                <? foreach ($this->lista as $lista) : ?>
                    <tr>
                        <td>
                            <img src="<?=URL.PATH_IMAGE.$lista['id_immo'].'/'.$lista['thumb']?>" alt="<?=$lista['alt']?>" />
                        </td>
                        <td>
                            <?=$lista['cod_rif']?>
                        </td>
                        <td>
                            <?=$lista['nm_contr']?>
                        </td>
                        <td>
                            <?=$lista['nm_tipo']?>
                        </td>
                        <td>
                            <?=$lista['nm_comune']?>&nbsp;&minus;&nbsp;<?=$lista['nm_zona']?>
                        </td>
                        <td>
                            <?=$lista['prezzo']?>
                        </td>
                        <td>
                            <?=$lista['sup']?>
                        </td>
                        <td>
                            <?=$lista['vani']?>
                        </td>
                        <td>
                            <?=$lista['alt']?>
                        </td>
                        <td>
                            <? if ($lista['ape'] == "non soggetto") : ?>
                                non soggetto
                            <? else :?>
                                <img src="<?=URL.PATH_ICO?>classe<?=$lista['ape']?>.png" alt="" />
                            <? endif; ?>
                        </td>
                        <td>
                            <a href="<?=URL?>admin/immobili/dettagli/<?=$lista['id_immo']?>">
                                <img src="<?=URL.PATH_ICO?>gnome_search_tool.png" alt="" />
                            </a>
                        </td>
                        <td>
                            <a href="<?=URL?>admin/immobili/modifica/<?=$lista['id_immo']?>">
                                <img src="<?=URL.PATH_ICO?>text_edit.png" alt="" />
                            </a>
                        </td>
                        <td>
                            <a href="<?=URL?>admin/foto/immobile/<?=$lista['id_immo']?>">
                                <img src="<?=URL.PATH_ICO?>picture_edit.png" alt="" />
                            </a>
                        </td>
                        <td>
                            <a href="<?=URL?>admin/immobili/copia/<?=$lista['id_immo']?>">
                                <img src="<?=URL.PATH_ICO?>gnome_edit_copy.png" alt="" />
                            </a>
                        </td>
                        <td>
                            <a href="<?=URL?>admin/immobili/elimina/<?=$lista['id_immo']?>">
                                <img src="<?=URL.PATH_ICO?>human_user_trash.png" alt="" />
                            </a>
                        </td>
                    </tr>
                <? endforeach; ?>
            <? endif; ?>
        </tbody>
    </table>
</div>
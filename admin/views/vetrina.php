<?
/*******************************************************************************
 *               STRUCTUR HTML OF THE "VETRINA" PAGE FROM ADMIN
 *******************************************************************************/

$lista = $this->lista;
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
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>vetrina</th>
                <th>&nbsp;</th>
                <th>azione</th>
            </tr>
        </thead>
        <tbody>
            <? if (count($this->lista) != 0) : ?>
                <? foreach ($this->lista as $lista) : ?>
                    <tr <? if ($lista['slideshow'] == 1) echo 'class="select"'; ?>>
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
                            &nbsp;
                        </td>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            <input name="chkVetrina" type="checkbox" <? if ($lista['slideshow'] == 1) echo 'checked'; ?> />
                        </td>
                        <td>
                            <input name="immoID" type="hidden" value="<?=$lista['id_immo']?>" />
                        </td>
                        <td>
                            <button name="btnCheckSave" type="button">Salva</button>
                        </td>
                    </tr>
                <? endforeach; ?>
            <? endif; ?>
        </tbody>
    </table>
</div>
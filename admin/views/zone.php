<?
/*******************************************************************************
 *                  STRUCTUR HTML OF THE "ZONE" PAGE FROM ADMIN
 *******************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <h3 class="column_1">gestione zone:</h3>
    <div class="row column_1"></div>
    <section id="gestioneLocalita" class="column_1">
        <div id="boxLocalita">
            <h6>Localit&agrave;:</h6>
            <ul id="listComune">
                <? foreach ($this->comune as $comune) : ?>
                    <li>
                        <input class="btnLocalita" name="localita" type="radio" value="<?=$comune['id_comune']?>">
                        <label><?=$comune['nm_comune']?></label>&nbsp;&nbsp;
                        <input class="btnModifica" type="image" src="../immagini/icone/application_edit.png" alt="">
                        <input class="btnSave" type="image" src="../immagini/icone/disk.png" alt="">
                        <input class="btnDelete" type="image" src="../immagini/icone/action_delete.png" alt="">
                    </li>
                <? endforeach; ?>
            </ul>
            <ul>
                <li>
                    <label for="newComune">Nuova Localit&agrave;:</label>
                </li>
                <li>
                    <input id="newComune" name="newComune" type="text">
                    <input id="btnNewComune" name="btnNewComune" type="image" src="../immagini/icone/disk.png" alt="">
                </li>
            </ul>
        </div>
        <div id="boxZone">
            <h6>Zone:</h6>
            <ul id="listZone"></ul>
            <ul>
                <li>
                    <label for="newZona">Nuova Zona:</label>
                </li>
                <li>
                    <input id="newZona" name="newZona" type="text" />
                    <input type="image" src="../immagini/icone/disk.png" alt="" />
                </li>
            </ul>
        </div>   
    </section>
</div>
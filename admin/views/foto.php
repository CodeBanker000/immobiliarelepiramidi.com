<?
/*******************************************************************************
 *                  STRUCTUR HTML OF THE "FOTO" PAGE FROM ADMIN
 *******************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <h3 class="column_1">gestione foto:</h3>
    <div class="row column_1"></div>
    <section id="listaFoto" class="column_1">
        <h6>foto caricate:</h6>
        <? if (count($this->image) != 0) : ?>
            <? foreach ($this->image as $k => $v) : ?>
                <article>
                    <span><?=$this->image[$k]['pos']?></span>
                    <div style="text-align: center;">
                        <img class="anteprima" src="<?=URL.PATH_IMAGE.$this->immoID.'/'.$this->image[$k]['thumb']?>" alt="<?=$this->image[$k]['alt']?>" />
                    </div>
                    <div>
                        <input id="modDidascalia" name="modDidascalia" type="text" value="<?=$this->image[$k]['alt']?>" disabled />
                        <input type="image" src="<?=URL.PATH_ICO?>disk.png" alt="" onclick="javascript:save(this, <?=$this->image[$k]['id_img']?>);" disabled />
                        <input type="image" src="<?=URL.PATH_ICO?>application_edit.png" alt="" onclick="javascript:ableSave(this);" />
                    </div>
                    <div>
                        <input type="image" src="<?=URL.PATH_ICO?>arrow_left.png" alt="" />
                        <input type="image" src="<?=URL.PATH_ICO?>arrow_right.png" alt="" />
                        <input type="button" value="Preferito" onclick="javascript:setPref(this, <?=$this->image[$k]['id_img']?>);" />
                        <input type="button" value="Elimina" onclick="javascript:cancel(this, <?=$this->image[$k]['id_img']?>);" />
                    </div>
                </article>
            <? endforeach; ?>
        <? endif; ?>
    </section>
    <section id="uploadFoto" class="column_1">
        <h6>Upload Foto:</h6>
        <form id="frmUplFoto" method="post" action="<?=URL?>admin/foto/upload" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="file">File</label>
                </li>
                <li>
                    <input id="file" name="file[]" type="file" accept="image/*" multiple="multiple" />
                </li>
                <li>
                    <label for="didascalia">Didascalia</label>
                    <input id="immoID" name="immoID" type="hidden" value="<?=$this->immoID?>" />
                </li>
                <li>
                    <select id="didascalia" name="didascalia" hidden>
                        <option value="-" selected>Seleziona Testo</option>
                        <option value="angolo cottura">angolo cottura</option>
                        <option value="antibagno">antibagno</option>
                        <option value="bagno">bagno</option>
                        <option value="balcone/terrazzo">balcone/terrazzo</option>
                        <option value="camera">camera</option>
                        <option value="cucina">cucina</option>
                        <option value="cucinotto">cucinotto</option>
                        <option value="esterno">esterno</option>
                        <option value="giardino/resede">giardino/resede</option>
                        <option value="guardaroba">guardaroba</option>
                        <option value="ingresso">ingresso</option>
                        <option value="lavanderia">lavanderia</option>
                        <option value="piscina">piscina</option>
                        <option value="planimetria">planimetria</option>
                        <option value="ripostiglio">ripostiglio</option>
                        <option value="salone">salone</option>
                        <option value="soggiorno">soggiorno</option>
                        <option value="terrazza">terrazza</option>
                    </select>
                </li>
            </ul>
            <ul id="fileList">
                <li class="header">
                    <div class="selDelete">Sel.</div>
                    <div class="fileName">File</div>
                    <div class="fileSize">Size</div>
                    <div class="alt_text">Alt</div>
                    <div class="status">Status</div>
                </li>
            </ul>
            <button id="btnUpload" type="submit" class="buttonBlue">Carica</button>
        </form>
    </section>
</div>
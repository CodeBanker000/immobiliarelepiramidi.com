<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="mainContainer" class="container clearfix">
    <h3 class="column_1">gestione immagini:</h3>
    <div class="row column_1"></div>
    <section id="listaFoto" class="column_1">
        <h6>foto caricate:</h6>
        <article>
            <span>1</span>
            <img class="anteprima" src="../public/immobili/thumb/casa1.JPG" alt="" />
            <div>
                <input id="modDidascalia" name="modDidascalia" type="text" value="Cucina" disabled />
                <input type="image" src="../immagini/icone/disk.png" alt="" />
                <input type="image" src="../immagini/icone/application_edit.png" alt="" />
            </div>
            <div>
                <input type="image" src="../immagini/icone/arrow_left.png" alt="" />
                <input type="image" src="../immagini/icone/arrow_right.png" alt="" />
                <input type="button" value="Preferito" />
                <input type="button" value="Elimina" />
            </div>
        </article>
        <article>
            <span>2</span>
            <img class="anteprima" src="../public/immobili/thumb/casa1.JPG" alt="" />
            <div>
                <input id="modDidascalia" name="modDidascalia" type="text" value="Cucina" disabled />
                <input type="image" src="../immagini/icone/disk.png" alt="" />
                <input type="image" src="../immagini/icone/application_edit.png" alt="" />
            </div>
            <div>
                <input type="image" src="../immagini/icone/arrow_left.png" alt="" />
                <input type="image" src="../immagini/icone/arrow_right.png" alt="" />
                <input type="button" value="Preferito" />
                <input type="button" value="Elimina" />
            </div>
        </article>
        <article>
            <span>3</span>
            <img class="anteprima" src="../public/immobili/thumb/casa1.JPG" alt="" />
            <div>
                <input id="modDidascalia" name="modDidascalia" type="text" value="Cucina" disabled />
                <input type="image" src="../immagini/icone/disk.png" alt="" />
                <input type="image" src="../immagini/icone/application_edit.png" alt="" />
            </div>
            <div>
                <input type="image" src="../immagini/icone/arrow_left.png" alt="" />
                <input type="image" src="../immagini/icone/arrow_right.png" alt="" />
                <input type="button" value="Preferito" />
                <input type="button" value="Elimina" />
            </div>
        </article>
        <article>
            <span>4</span>
            <img class="anteprima" src="../public/immobili/thumb/casa1.JPG" alt="" />
            <div>
                <input id="modDidascalia" name="modDidascalia" type="text" value="Cucina" disabled />
                <input type="image" src="../immagini/icone/disk.png" alt="" />
                <input type="image" src="../immagini/icone/application_edit.png" alt="" />
            </div>
            <div>
                <input type="image" src="../immagini/icone/arrow_left.png" alt="" />
                <input type="image" src="../immagini/icone/arrow_right.png" alt="" />
                <input type="button" value="Preferito" />
                <input type="button" value="Elimina" />
            </div>
        </article>
        <article>
            <span>5</span>
            <img class="anteprima" src="../public/immobili/thumb/casa1.JPG" alt="" />
            <div>
                <input id="modDidascalia" name="modDidascalia" type="text" value="Cucina" disabled />
                <input type="image" src="../immagini/icone/disk.png" alt="" />
                <input type="image" src="../immagini/icone/application_edit.png" alt="" />
            </div>
            <div>
                <input type="image" src="../immagini/icone/arrow_left.png" alt="" />
                <input type="image" src="../immagini/icone/arrow_right.png" alt="" />
                <input type="button" value="Preferito" />
                <input type="button" value="Elimina" />
            </div>
        </article>
        <article>
            <span>6</span>
            <img class="anteprima" src="../public/immobili/thumb/casa1.JPG" alt="" />
            <div>
                <input id="modDidascalia" name="modDidascalia" type="text" value="Cucina" disabled />
                <input type="image" src="../immagini/icone/disk.png" alt="" />
                <input type="image" src="../immagini/icone/application_edit.png" alt="" />
            </div>
            <div>
                <input type="image" src="../immagini/icone/arrow_left.png" alt="" />
                <input type="image" src="../immagini/icone/arrow_right.png" alt="" />
                <input type="button" value="Preferito" />
                <input type="button" value="Elimina" />
            </div>
        </article>
    </section>
    <section id="uploadFoto" class="column_1">
        <h6>Upload Foto:</h6>
        <form id="frmUplFoto">
            <ul>
                <li>
                    <label for="file">File</label>
                </li>
                <li>
                    <input id="file" name="file[]" type="file" multiple="multiple" />
                </li>
                <li>
                    <label for="didascalia">Didascalia</label>
                </li>
                <li>
                    <select id="didascalia" name="didascalia"></select>
                </li>
            </ul>
            <button class="buttonBlue">Carica</button>
        </form>
    </section>
</div>
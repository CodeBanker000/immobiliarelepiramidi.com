<?
/*******************************************************************************
 *                  STRUTTURA HTML DELLA COLLABORAZIONE
 *******************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <h3 class="column_1">collaborazione:</h3>
    <div class="column_1 row"></div>
    <form id="frmCollaborazione">
        <section id="collaborazione" class="column_1">
            <h6>V00-100:</h6>
            <div>
                <ul>
                    <li>
                        <input type="checkbox" value="1" />
                        <label>Studio Montefusco</label>
                    </li>
                    <li>
                        <input type="checkbox" value="1" />
                        <label>Service & Consulting</label>
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <input type="checkbox" value="1" />
                        <label>Caterina Pirrone</label>
                    </li>
                    <li>
                        <input type="checkbox" value="1" />
                        <label>La Fiorentina Immobiliare</label>
                    </li>
                </ul>
            </div>
        </section>
        <section id="noteCollaborazione" class="column_1">
            <h6>Messaggio:</h6>
            <textarea id="note" name="note"></textarea>
            <input id="codRif" name="codRif" type="hidden" value="V00-100" />
            <button class="buttonBlue">Invia</button>
        </section>
    </form>
</div>
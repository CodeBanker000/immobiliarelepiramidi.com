<?php
/***********************************************************************************
 *                           STRUTTURA HTML DELLA PAGINA DETTAGLI
 ***********************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <?php require_once 'layout/aside.php'; ?>
    <h3 class="column_3_4">Vendita Residenziale V00-100:</h3>
    <div id="infoTop" class="column_3_4">
        <span>vani:&nbsp;<strong>2</strong></span>
        <span>mq:&nbsp;<strong>50</strong></span>
        <span class="prezzo">&euro;&nbsp;200.000</span>
    </div>
    <div class="column_3_4 row"></div>
    <section id="fotogallery" class="column_3_4">
        <h6>galleria fotografica:</h6>
        <div id="placeImg">
            <img src="public/immobili/gallery/casa1.jpg" width="573">
        </div>
        <div id="imgHolder">
            <ul>
                <li><img src="public/immobili/casa1.jpg"></li>
                <li><img src="public/immobili/casa2.jpg"></li>
                <li><img src="public/immobili/casa3.jpg"></li>
                <li><img src="public/immobili/casa4.jpg"></li>
                <li><img src="public/immobili/casa1.jpg"></li>
                <li><img src="public/immobili/casa2.jpg"></li>
                <li><img src="public/immobili/casa3.jpg"></li>
                <li><img src="public/immobili/casa4.jpg"></li>
                <li><img src="public/immobili/casa1.jpg"></li>
                <li><img src="public/immobili/casa2.jpg"></li>
                <li><img src="public/immobili/casa3.jpg"></li>
            </ul>
        </div>
    </section>
    <section id="descrizione" class="column_3_4">
        <h6>descrizione:</h6>
        <p>PERETOLA pressi vendesi grazioso bilocale recentemente ristrutturato posto al terzo e ultimo piano senza ascensore, 
           metratura 45 mq circa, composto da ingresso, camera con balcone, soggiorno angolo cottura, servizio finestrato e soffitta 
           a uso ripostiglio. Termoautonomo e spese condominiali minime. Possibilità di averlo anche completamente arredato.</p>
    </section>
    <section id="ubicazione" class="column_3_4">
        <h6>Ubicazione:</h6>
            <div>
                <dl>
                    <dt>localit&agrave;:</dt>
                    <dd>Firenze</dd>
                    <dt>zona:</dt>
                    <dd>Campo di Marte</dd>
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
                <dd>appartamento</dd>
                <dt>tipo propriet&agrave;:</dt>
                <dd>intera propriet&agrave;</dd>
                <dt>attivit&agrave;:</dt>
                <dd>-</dd>
                <dt>cod. rif.:</dt>
                <dd>V00-100</dd>
                <dt>piano:</dt>
                <dd>terra</dd>
                <dt>livelli:</dt>
                <dd>1</dd>
                <dt>ascensore:</dt>
                <dd><img src="immagini/icone/action_delete.png"></dd>
                <dt>stato:</dt>
                <dd>ottimo</dd>
                <dt>soggiorno:</dt>
                <dd>1</dd>
                <dt>cucina:</dt>
                <dd>angolo cottura</dd>
                <dt>camere:</dt>
                <dd>1</dd>
                <dt>bagno:</dt>
                <dd>1</dd>      
            </dl>
        </div>
        <div>
            <dl>
                <dt>balcone/terrazzo:</dt>
                <dd><img src="immagini/icone/action_delete.png"></dd>
                <dt>terrazza:</dt>
                <dd><img src="immagini/icone/action_delete.png"></dd>
                <dt>giardino/resede:</dt>
                <dd><img src="immagini/icone/action_check.png">&nbsp;privato</dd>
                <dt>garage:</dt>
                <dd><img src="immagini/icone/action_check.png">&nbsp;singolo</dd>
                <dt>soffitta:</dt>
                <dd><img src="immagini/icone/action_delete.png"></dd>
                <dt>mansarda:</dt>
                <dd><img src="immagini/icone/action_delete.png"></dd>
                <dt>cantina:</dt>
                <dd><img src="immagini/icone/action_delete.png"></dd>
                <dt>arredato:</dt>
                <dd><img src="immagini/icone/action_check.png"> parzialmente</dd>
                <dt>impianto allarme:</dt>
                <dd><img src="immagini/icone/action_delete.png"></dd>
                <dt>riscaldamento:</dt>
                <dd>singolo</dd>
                <dt>aria condizionata:</dt>
                <dd><img src="immagini/icone/action_check.png"> predisposizione</dd>
                <dt>classe energetica:</dt>
                <dd><img src="immagini/icone/classeG.png" width="30">&nbsp;175 kWh/mq*anno</dd>
            </dl>
        </div>
    </section>
    <section id="contatta" class="column_3_4">
        <h6>Richiedi Maggiori Informazioni:</h6>
        <form>
            <div>
                <ul>
                    <li>
                        <label>nome:</label>
                    </li>
                    <li>
                        <input type="text" >
                    </li>
                    <li>
                        <label>cognome:</label>
                    </li>
                    <li>
                        <input type="text" >
                    </li>
                    <li>
                        <label>telefono:</label>
                    </li>
                    <li>
                        <input type="text" >
                    </li>
                    <li>
                        <label>email:</label>
                    </li>
                    <li>
                        <input type="text" >
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <label>messaggio:</label>
                    </li>
                    <li>
                        <textarea></textarea>
                    </li>
                    <li>
                        <label class="checkPrivacy"><input type="checkbox">Ho preso visione della <a href="privacy.php">privacy</a> policy</label>
                    </li>
                </ul>
            </div>
            <span>
                <button class="buttonRed">Invia</button>
            </span>
        </form>
    </section>
</div>
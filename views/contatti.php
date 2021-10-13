<?php
/***********************************************************************************
 *                          STRUTTURA HTML DEI CONTATTI
 ***********************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <? require_once $this->aside; ?>
    <h3 class="column_3_4">CONTATTI:</h3>
    <div class="column_3_4 row"></div>
    <section id="contatti" class="column_3_4">
        <div>
            <ul>
                <li class="utente">Matteo Tancredi</li>
                <li class="cellulare">+39 348 3782155</li>
                <li class="telefono">+39 055 5271888</li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="fax">+39 055 5271888</li>
                <li class="email">agenzia.lepiramidi@gmail.com</li>
                <li class="email">info@immobiliarelepiramidi.com</li>
            </ul>
        </div>
    </section>
    <section id="moduloContatto" class="column_3_4">
        <form id="frmContatti" name="frmContatti" method="post">
            <div>
                <ul>
                    <li>
                        <label for="nome">nome:</label>
                    </li>
                    <li>
                        <input id="nome" name="nome" type="text">
                    </li>
                    <li>
                        <label for="cognome">cognome:</label>
                    </li>
                    <li>
                        <input id="cognome" name="cognome" type="text">
                    </li>
                    <li>
                        <label for="tel">telefono:</label>
                    </li>
                    <li>
                        <input id="tel" name="tel" type="text">
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
                            <input id="privacy" name="privacy" type="checkbox">Ho preso visione della <a href="<?=URL?>privacy/">privacy</a> policy
                        </label>
                        <input id="verifica" name="verifica" type="hidden">
                    </li>
                </ul>
            </div>
            <span>
                <button id="btnFrmContatti" name="btnFrmContatti" class="buttonRed">Invia</button>
            </span>
        </form>
    </section>
</div>
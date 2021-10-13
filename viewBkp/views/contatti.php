<?php
/***********************************************************************************
 *                           STRUTTURA HTML DEL FOOTER 
 ***********************************************************************************/
?>
<div id="mainContainer" class="container clearfix">
    <?php require_once 'layout/aside.php'; ?>
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
        <form>
            <div>
                <ul>
                    <li>
                        <label>nome:</label>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li>
                        <label>cognome:</label>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li>
                        <label>telefono:</label>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                    <li>
                        <label>email:</label>
                    </li>
                    <li>
                        <input type="text">
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
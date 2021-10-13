/* 
 * Framework for page Nuovo
 */

window.addEvent("domready", function() {
    
    $('codRif').addEvent("blur", function () {
        checkCode(this.value);
    });
    
    $('contratto').addEvent("change", showAffitto);
    
//    var divRes = $$('div.residenziale').dispose();
//    var divCom = $$('div.commerciale').dispose();
//    var divTer = $$('div.terreno').dispose();
    
    $('categoria').addEvent("change", function () {
        getListTipo(this.value);
        showAccessori(this.value);
    });
    $('tipologia').addEvent("change", function () {
       activeSelect(this.value); 
    });
    $('localita').addEvent("change", function () {
       getListZona(this.value); 
    });
    
    $('btnSubmitImmobile').addEvent("click", function() {
        if(validateForm())
            $('frmImmobile').submit();
    });
    
    $$('section#datiAccessori #giardino').addEvent("click", enableSel);
    $$('section#datiAccessori #garage').addEvent("click", enableSel);
    $$('section#datiAccessori #arredato').addEvent("click", enableSel);
    $$('section#datiAccessori #allarme').addEvent("click", enableSel);
    $$('section#datiAccessori #climatizzatore').addEvent("click", enableSel);
});

/**
 * Show the right tag by the id of category
 * 
 * @param int id
 */

var showAccessori = function (id) 
{
    var res = $$('#datiAccessori .residenziale');
    var com = $$('#datiAccessori .commerciale');
    var ter = $$('#datiAccessori .terreno');
    var duo = $$('.both');
    
    switch (id)
    {
        case '1':
            if (com[0].getStyle("display") != "none") com.setStyle("display", "none");
            if (ter[0].getStyle("display") != "none") ter.setStyle("display", "none");
            if (res[0].getStyle("display") == "none") res.setStyle("display", "inline-block");
            if (duo[0].getStyle("display") == "none") duo.setStyle("display", "inline-block");
            break;
        case '2':
            if (res[0].getStyle("display") != "none") res.setStyle("display", "none");
            if (ter[0].getStyle("display") != "none") ter.setStyle("display", "none");
            if (com[0].getStyle("display") == "none") com.setStyle("display", "inline-block");
            if (duo[0].getStyle("display") == "none") duo.setStyle("display", "inline-block");
            break;
        case '3':
            if (com[0].getStyle("display") != "none") com.setStyle("display", "none");
            if (res[0].getStyle("display") != "none") res.setStyle("display", "none");
            if (duo[0].getStyle("display") != "none") duo.setStyle("display", "none");
            if (ter[0].getStyle("display") == "none") ter.setStyle("display", "inline-block");
            break;
    }
};

//var showAcc = function (id, divRes, divCom, divTer) 
//{
//    
//    var divResNow = $$('div.residenziale');
//    var divComNow = $$('div.commerciale');
//    var divTerNow = $$('div.terreno');
//    
//    switch (id)
//    {
//        case '1':
//            if (divComNow[0] != "undefined") divComNow.destroy(); 
//            if (divTerNow[0] != "undefined") divTerNow.destroy();
//            
//            $$('#datiAccessori h6').grab(divRes[1], "after")
//                                      .grab(divRes[0], "after");
//            divRes.setStyle("display", "block");
//            $$('.both').setStyle("display", "inline-block");
//            
//            break;
//        case '2':
//            if (divResNow[0] != "undefined") divResNow.destroy(); 
//            if (divTerNow[0] != "undefined") divTerNow.destroy();
//            
//            $$('#datiAccessori h6').grab(divCom[1], "after")
//                                      .grab(divCom[0], "after");
//            divCom.setStyle("display", "block");
//            $$('.both').setStyle("display", "inline-block");
//
//            break;
//        case '3':
//            if (divComNow[0] != "undefined") divComNow.destroy(); 
//            if (divResNow[0] != "undefined") divResNow.destroy();
//            
//            $$('#datiAccessori h6').grab(divTer[1], "after")
//                                      .grab(divTer[0], "after");
//            divTer.setStyle("display", "block");
//            $$('.both').setStyle("display", "none");
//            break;
//    }
//    
//    $$('section#datiAccessori #giardino').addEvent("click", enableSel);
//    $$('section#datiAccessori #garage').addEvent("click", enableSel);
//    $$('section#datiAccessori #arredato').addEvent("click", enableSel);
//    $$('section#datiAccessori #allarme').addEvent("click", enableSel);
//    $$('section#datiAccessori #climatizzatore').addEvent("click", enableSel);
//};

/**
 * Show the tags with the class 'affitto'
 */

 var showAffitto = function () {
    var id = this.value;
    switch (id)
    {
        case '1':
            $$('.affitto').setStyle("display", "inline-block");
            break;
            
        default:
            $$('.affitto').setStyle("display", "none");
            break;
    }
};

/**
 * Disabled or not the select
 */

var enableSel = function () {
    var select = this.getParent().getNext().getChildren();
    
    if (this.checked) 
        select.setProperty("disabled", false);
    else
        select.setProperty("disabled", true);
};

var validateForm = function () {
    if (!$('codRif').value.test('[AV]{1}[0-9]{2}-[0-9]{3}'))
    {
        alert("Il formato del codice è errato");
        $('codRif').focus();
        return false;
    }
    else if ($('stato').value == null)
    {
        alert("Il Campo Stato è obbligatorio");
        $('stato').focus();
        return false;
    }
    else if ($('contratto').value == 0)
    {
        alert("Il Campo Contratto è obbligatorio");
        $('contratto').focus();
        return false;
    }
    else if ($('categoria').value == 0)
    {
        alert("Il Campo Categoria è obbligatorio");
        $('categoria').focus();
        return false;
    }
    else if ($('tipologia').value == 0)
    {
        alert("Il Campo Tipologia è obbligatorio");
        $('tipologia').focus();
        return false;
    }
    else if ($('tipologia').value == 22 && $('attivita').value == 1)
    {
        alert("Il Campo Attivita è obbligatorio");
        $('attivita').focus();
        return false;
    }
    else if ($('categoria').value != 3 && $('condizione').value == 0)
    {
        alert("Il Campo Condizione è obbligatorio");
        $('condizione').focus();
        return false;
    }
    else if ($('categoria').value != 3 && ($('vani').value == 0 || $('vani').value == null))
    {
        alert("Il Campo Vani è obbligatorio");
        $('vani').focus();
        return false;
    }
    else if ($('superficie').value == 0 || $('superficie').value == null)
    {
        alert("Il Campo Superficie è obbligatorio");
        $('superficie').focus();
        return false;
    }
    else if ($('prezzo').value == 0 || $('prezzo').value == null)
    {
        alert("Il Campo Prezzo è obbligatorio");
        $('prezzo').focus();
        return false;
    }
    else if ($('classe').value != "non soggetto" && ($('indice').value == 0 || $('indice').value == null))
    {
        alert("Il Campo Epi è obbligatorio");
        $('indice').focus();
        return false;
    }
    else if ($('localita').value == 0)
    {
        alert("Il Campo Località è obbligatorio");
        $('localita').focus();
        return false;
    }
    else if ($('zona').value == 0)
    {
        alert("Il Campo Zona è obbligatorio");
        $('zona').focus();
        return false;
    }
    else
        return true;
};

var getHMTL = function (classe) {
    var div = $('div.' + classe);
};

var getListTipo = function (categ) 
{
    
    var optSelected = $("tipologia").options[0];
    
    $("tipologia").empty();
    
    $("tipologia").grab(optSelected);
    
    var req = new Request.JSON({
        url: "http://localhost/lepiramidi/admin/immobili/getListTipo",
        data: {"categ": categ},
        onSuccess: function(responseText) {
            var optData = responseText;

            for (var i = 0; i < optData.length; i++)
            {
                var opt = new Element("option");
                opt.value = optData[i].id_tipo;
                opt.appendText(optData[i].nm_tipo);
                $("tipologia").grab(opt);
            }
        }
    });
    
    req.send();
};

var activeSelect = function (tipo)
{
    if(tipo == 22)
    {
        if ($$('#datiPrincipali li').hasClass('hidden'))
        {
            $$('#datiPrincipali li').removeClass('hidden');

            var req = new Request.JSON({
                url: "http://localhost/lepiramidi/admin/immobili/getListAtt",
                onSuccess: function(responseText) {
                    var optData = responseText;

                    for (var i = 0; i < optData.length; i++)
                    {
                        var opt = new Element("option");
                        opt.value = optData[i].id_att_comm;
                        opt.appendText(optData[i].nm_att_comm);
                        $("attivita").grab(opt);
                    }
                }
            });

            req.send();
        }
    }
    else
    {
        if ($('attivita').getParent().hasClass('hidden') == false)
        {
            $('attivita').getParent().addClass('hidden');
            $('attivita').getParent().getPrevious().addClass('hidden');
            
            var optSelected = $("attivita").options[0];

            $("attivita").empty();

            $("attivita").grab(optSelected);
        }
    }
};

var getListZona = function (comune) 
{

    var optSelected = $("zona").options[0];
    
    $("zona").empty();
    
    $("zona").grab(optSelected);

    var req = new Request.JSON({
        url: "http://localhost/lepiramidi/admin/immobili/getListZona",
        data: {"comune": comune},
        onSuccess: function(responseText) {
            var optData = responseText;
            
            for (var i = 0; i < optData.length; i++)
            {
                var opt = new Element("option");
                opt.value = optData[i].id_zona;
                opt.appendText(optData[i].nm_zona);
                $("zona").grab(opt);
            }
        }
    });
    
    req.send();
};

var checkCode = function(data) {
    
    var span = $('response');
    
    span.empty();
    
    var req = new Request({
        url: "http://localhost/lepiramidi/admin/immobili/checkCode",
        onSuccess: function(responseText) {
            
            if (responseText == 0) {
                var img = new Element('img');
                img.setProperty("src", "http://localhost/lepiramidi/immagini/icone/action_check.png");
                
                if (span.hasClass('error')) span.removeClass('error');
                span.grab(img);
            } else {
                var img = new Element('img');
                img.setProperty("src", "http://localhost/lepiramidi/immagini/icone/action_delete.png");
                
                span.addClass('error');
                span.grab(img);
                span.appendText("Il codice è  già esistente!");
            }
        }
    });
    
    req.send("cod_rif=" + data);
};
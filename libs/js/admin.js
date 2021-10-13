/* 
 * Funzioni di gestione parte Admin
 */

window.addEvent("domready", function() {
   $('codRif').addEvent("blur", function () {
       checkCode(this.value);
   });
   $('contratto').addEvent("change", showAffitto);
   
   var divRes = $$('div.residenziale').dispose();
   var divCom = $$('div.commerciale').dispose();
   var divTer = $$('div.terreno').dispose();
   
   $('categoria').addEvent("change", function () {
       getListTipo(this.value);
       showAcc(this.value, divRes, divCom, divTer);
   });
   $('tipologia').addEvent("change", function () {
      activeSelect(this.value); 
   });
   $('localita').addEvent("change", function () {
      getListZona(this.value); 
   });
    
   $$('section#datiAccessoriIns #giardino').addEvent("click", enableSel);
   $$('section#datiAccessoriIns #garage').addEvent("click", enableSel);
   $$('section#datiAccessoriIns #arredato').addEvent("click", enableSel);
   $$('section#datiAccessoriIns #allarme').addEvent("click", enableSel);
   $$('section#datiAccessoriIns #climatizzatore').addEvent("click", enableSel);
    
   $('btnInsImmobile').addEvent("click", function() {
       if(validateForm())
           $('frmInsImmobile').submit();
   });
   $('file').addEvent("change", function () {
       var input = $('file');
//        console.log(input.files[0].type);
       
       
       for (var i=0; i < input.files.length; i++ )
       {
           
           var row = new Element('li');
           var divSel = new Element('div');
           var divFile = new Element('div');
           var divType = new Element('div');
           var divStatus = new Element('div');
           var link = new Element('a');
           var icon = new Element('img');
           
           divSel.addClass('selDelete');
           divFile.addClass('fileName');
           divType.addClass('fileType');
           divStatus.addClass('status');
           
           
           icon.setProperty("src", "http://localhost/lepiramidi/immagini/icone/action_delete.png");
           link.grab(icon);
           divSel.grab(link);
           divFile.appendText(input.files[i].name);
           divType.appendText(input.files[i].type);
           
           row.grab(divSel);
           row.grab(divFile);
           row.grab(divType);
           
           $('fileList').grab(row);
       }
       
   });
   

var uploadFiles = new Upload('frmUplFoto');

});

var showAcc = function (id, divRes, divCom, divTer) 
{
    
    var divResNow = $$('div.residenziale');
    var divComNow = $$('div.commerciale');
    var divTerNow = $$('div.terreno');
    
//    var divResBkp = divRes.clone();
//    var divComBkp = divCom.clone();
//    var divTerBkp = divTer.clone();
    
//    divRes.destroy();
//    divCom.destroy();
//    divTer.destroy();
    
    
    switch (id)
    {
        case '1':
            if (divComNow[0] != "undefined") divComNow.destroy(); 
            if (divTerNow[0] != "undefined") divTerNow.destroy();
            
            $$('#datiAccessoriIns h6').grab(divRes[1], "after")
                                      .grab(divRes[0], "after");
            divRes.setStyle("display", "block");
            $$('.both').setStyle("display", "inline-block");
            
            break;
        case '2':
            if (divResNow[0] != "undefined") divResNow.destroy(); 
            if (divTerNow[0] != "undefined") divTerNow.destroy();
            
            $$('#datiAccessoriIns h6').grab(divCom[1], "after")
                                      .grab(divCom[0], "after");
            divCom.setStyle("display", "block");
            $$('.both').setStyle("display", "inline-block");

            break;
        case '3':
            if (divComNow[0] != "undefined") divComNow.destroy(); 
            if (divResNow[0] != "undefined") divResNow.destroy();
            
            $$('#datiAccessoriIns h6').grab(divTer[1], "after")
                                      .grab(divTer[0], "after");
            divTer.setStyle("display", "block");
            $$('.both').setStyle("display", "none");
            break;
    }
    
    $$('section#datiAccessoriIns #giardino').addEvent("click", enableSel);
    $$('section#datiAccessoriIns #garage').addEvent("click", enableSel);
    $$('section#datiAccessoriIns #arredato').addEvent("click", enableSel);
    $$('section#datiAccessoriIns #allarme').addEvent("click", enableSel);
    $$('section#datiAccessoriIns #climatizzatore').addEvent("click", enableSel);
};

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
   else if ($('tipologia').value == 22 && $('attivita').value == 0)
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
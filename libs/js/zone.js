/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

window.addEvent("domready", function () {
    var btnComune = $$(".btnLocalita");
    var btnModifica = $$(".btnModifica");
    var btnSave = $$(".btnSave");
    var btnDelete = $$(".btnDelete");
    
    btnSave.setProperty("disabled", true);
    $('btnNewComune').setProperty("disabled", true);
    
    $('newComune').addEvent("focus", function () {
        $('btnNewComune').setProperty("disabled", false);
    });
    
    btnComune.addEvent("click", function () {
        if (this.checked)
            getListZona(this.value);
    });
    
    btnModifica.addEvent("click", function () {
        createInput(this);
        btnModifica.setProperty("disabled", true);
    });
    
    btnSave.addEvent("click", function () {
        saveNameComune(this);
        btnModifica.setProperty("disabled", false);
    });
    
    $('btnNewComune').addEvent("click", function () {
        nuovoComune();
    });
    
});

var getListZona = function (comune) 
{
    $("listZone").empty();

    var req = new Request.JSON({
        url: location.href + "/getListZona",
        data: {"comune": comune},
        onSuccess: function(responseText) {
           
            var optData = responseText;            
            
            if (optData.length != 0)
            {

                for (var i = 0; i < optData.length; i++)
                {
                    var li = new Element("li");
                    var input = new Element("input.btnZona", {
                        type: "checkbox"
                    });
                    var label = new Element("label", {
                        text: optData[i].nm_zona
                    });
                    var btnMod = new Element("input.btnModifica", {
                        type: "image",
                        src: $$(".btnModifica")[0].src
                    });
                    var btnSave = new Element("input.btnSave", {
                        type: "image",
                        src: $$(".btnSave")[0].src
                    });
                    var btnDel = new Element("input.btnDelete", {
                        type: "image",
                        src: $$(".btnDelete")[0].src
                    });
                    li.grab(input);
                    li.grab(label);
                    li.grab(btnMod);
                    li.grab(btnSave);
                    li.grab(btnDel);
                   
                    $('listZone').grab(li);
                }
            }
        }
    });
    
    req.send();
};

var saveNameComune = function (el) 
{
    var id = el.getPrevious().getPrevious().getPrevious().value;
    
    var name = $('nameComune').value;   
    
    var req = new Request.JSON({
        url: location.href + "/modificaComune",
        data: {
            "id": id,
            "comune": name
        },
        onSuccess: function(responseText) {
            
            var input = el.getPrevious().getPrevious();
            var text = responseText[0].nm_comune;

            var label = new Element("label", {
                text: text
            });

            label.replaces(input);
            el.setProperty("disabled", true);
        }
    });
    
    req.send();
    
//    setLabel(el);
};

var nuovoComune = function () 
{
    var comune = $('newComune').value;   
    
    if (comune == "")
        alert("Il campo non può essere vuoto");
    else
    {
        var req = new Request.JSON({
            url: location.href + "/createComune",
            data: {"comune": comune},
            onSuccess: function(responseText) {
                var data = responseText;
                var list = new Element("li");
                
                list = $$('#listComune li')[0].clone();
                
                var checkbox = list.getFirst();
                var label = checkbox.getNext();
                
                checkbox.setProperty("value", 5);
                label.set("text", "ciao");
                
                $('listComune').grab(list);
            }
        });

        req.send();
    }
//    setLabel(el);
};

var createInput = function (el) 
{
    var label = el.getPrevious();
    var text = label.get("text");
    
    var input = new Element("input", {
        id: "nameComune",
        type: "text",
        value: text
    });
    
    input.replaces(label);
    el.getNext().setProperty("disabled", false);
};

var setLabel = function (el)
{
    var input = el.getPrevious().getPrevious();
    var text = input.value;
    
    var label = new Element("label", {
        text: text
    });
    
    label.replaces(input);
};
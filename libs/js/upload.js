/* 
 * Framework page Foto
 */

window.addEvent("domready", function () {
   $('file').addEvent("change", function () {
       createList(this);        

       for (var i=0; i < input.files.length; i++ )
       {
           fileListHTML(input.files[i]);            
       }
       
   });
   
   $('btnUpload').addEvent("click", function () {
       xhrUpload();
   });
    
});

var createList = function (input) {
    if (input.files.length > 0) {
        
        console.log(input.files);
        
        $each(input.files, function (v, k) {

            var row = new Element('li.item');
            var divSel = new Element('div.selDelete');
            var divFile = new Element('div.fileName');
            var divSize = new Element('div.fileSize');
            var divAlt = new Element('div.alt_text');
            var divStatus = new Element('div.status');
            var selText = $('didascalia').clone();
            var link = new Element('a');
            var icon = new Element('img', {
                "src": "http://localhost/lepiramidi/immagini/icone/action_delete.png"
            });

            link.addEvent("click", function () {
                delete(v);
                
                console.log(input.files);
            });

            selText.setProperty("id", "didascalia_" + k);
            selText.hidden = false;

            link.grab(icon);
            divSel.grab(link);
            divAlt.grab(selText);
            divFile.appendText(v.name);
            divSize.appendText(v.size);

            row.grab(divSel);
            row.grab(divFile);
            row.grab(divSize);
            row.grab(divAlt);

            $('fileList').grab(row);

        });
    }
};

var ableSave = function (el) {
    var text = el.getPrevious().getPrevious();
    var btnSave = el.getPrevious();
    btnSave.disabled = false;
    text.disabled = false;
    
};

var save = function (el, id) {
    var altContainer = el.getPrevious();
    var alt = altContainer.value;
    
    var req = new Request({
        url: "http://localhost/lepiramidi/admin/foto/updateAlt",
        onSuccess: function (responseText) {
            if (responseText == 'true')
                altContainer.disabled = true;
                el.disabled = true;
        }
    }).send('alt='+alt+'&imgID='+id);
};

var setPref = function (el, id) {
    var container = el.getParent().getParent();
    var elPos = container.getFirst().get('text');
    
    var mysort = new Fx.Sort($$('section#listaFoto article'), {mode: "horizontal"});
    
//    console.log(elPos);

    mysort.swap(13, 0);
};

var cancel = function (el, id) {
    
    var container = el.getParent().getParent();
    
    var req = new Request({
        url: "http://localhost/lepiramidi/admin/foto/erase",
        onSuccess: function (responseText) {
            if (responseText == 'true')
                container.destroy();
        }
    });
    
    req.send('imgID='+id);
};

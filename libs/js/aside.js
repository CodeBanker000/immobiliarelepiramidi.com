/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

window.addEvent("domready", function () {
    $('comune').addEvent("change", function () {
       getListZona(this.value); 
    });
    
    $('categoria').addEvent("change", function () {
        getListTipo(this.value);
    });
    
    $('tipologia').addEvent("change", function () {
       activeSelect(this.value); 
    });
});

var getListZona = function (comune) 
{

    var optSelected = $("zona").options[0];
    
    $("zona").empty();
    
    $("zona").grab(optSelected);

    var req = new Request.JSON({
        url: location.href + "/getListZona",
        data: {"comune": comune},
        onSuccess: function(responseText) {
           
            var optData = responseText;
            
            if (optData.length == 0)
            {
                $('boxSearchZona').setStyle("display", "none");
            }
            else
            {
                $('boxSearchZona').setStyle("display", "block");

                for (var i = 0; i < optData.length; i++)
                {
                    var opt = new Element("option");
                    opt.value = optData[i].id_zona;
                    opt.appendText(optData[i].nm_zona);
                    $("zona").grab(opt);
                }
            }
        }
    });
    
    req.send();
};

var getListTipo = function (categ) 
{
    
    var optSelected = $("tipologia").options[0];
    
    $("tipologia").empty();
    
    $("tipologia").grab(optSelected);
    
    var req = new Request.JSON({
        url: location.href + "/getListTipo",
        data: {"categ": categ},
        onSuccess: function(responseText) {
           
            var optData = responseText;
            
            if (optData.length == 0)
            {
                $('boxSearchTipo').setStyle("display", "none");
            }
            else
            {
                $('boxSearchTipo').setStyle("display", "block");

                for (var i = 0; i < optData.length; i++)
                {
                    var opt = new Element("option");
                    opt.value = optData[i].id_tipo;
                    opt.appendText(optData[i].nm_tipo);
                    $("tipologia").grab(opt);
                }
            }
        }
    });
    
    req.send();
};

var activeSelect = function (tipo)
{
    var optSelected = $("attCommerciale").options[0].dispose();
    
    if(tipo == 22)
    {
        $("boxSearchAttCommerciale").setStyle("display", "block");
            
        var req = new Request.JSON({
            url: location.href + "/getListAtt",
            onSuccess: function(responseText) {
                var optData = responseText;

                for (var i = 0; i < optData.length; i++)
                {
                    var opt = new Element("option");
                    opt.value = optData[i].id_att_comm;
                    opt.appendText(optData[i].nm_att_comm);
                    $("attCommerciale").grab(opt);
                }
            }
        });

        req.send();
    }
    else
    {
        $("boxSearchAttCommerciale").setStyle("display", "none");
        
        $("attCommerciale").empty();

        $("attCommerciale").grab(optSelected);
        
    }
};
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

window.addEvent("domready", function () {
    var btn = document.getElementsByName("btnCheckSave");
    var chk = document.getElementsByName("chkVetrina");
    var immoID = document.getElementsByName("immoID");
    
    $each(btn, function (val, index) {
        val.addEvent("click", function () {
            var row = val.getParent().getParent();
            
            var vetrina = getValue(chk[index]);
            
            var  req = new Request({
                url: 'http://localhost/immobiliarelepiramidi.com/current/admin/vetrina/setVetrina',
                onSuccess: function (responseText) {
                    if (responseText == 1)
                        if (row.hasClass("select") == false) row.addClass("select");
                    if (responseText == 0)
                        if (row.hasClass("select") == true) row.removeClass("select");
                }
            }).send('vetrina='+vetrina+'&immoID='+immoID[index].value);
        });
    });
});


var getValue = function (checkbox) {
    if (checkbox.checked == true)
        return 1;
    else
        return 0;
};

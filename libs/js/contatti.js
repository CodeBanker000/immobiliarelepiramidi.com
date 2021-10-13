/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

window.addEvent("domready", function () {
    $('btnFrmContatti').addEvent('click', function () {
        validateFrmContatti();
    });
});

var validateFrmContatti = function () {
    if ($('nome').value == "")
    {
        alert("Il campo nome è obbligatorio");
        $('nome').focus();
        return false;
    }
    else if ($('cognome').value == "")
    {
        alert("Il campo cognome è obbligatorio");
        $('cognome').focus();
        return false;
    }
    else if ($('tel').value == "")
    {
        alert("Il campo telefono è obbligatorio");
        $('tel').focus();
        return false;
    }
    else if (!$('email').value.test('[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}'))
    {
        alert("Il campo email è obbligatorio\n\
        o il campo non può essere vuoto.");
        $('email').focus();
        return false;
    }
    else if (!$('privacy').checked)
    {
        alert("Per inviare il seguente modulo è obbligatorio selezionare la presa visione della privacy");
        $('privacy').focus();
        return false;
    }
    else
        alert("submit!!");
};

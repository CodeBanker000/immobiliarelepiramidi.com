<?php
/*
 * Controller Page Vendita
 */

class Contatti extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Immobiliare Le Piramidi - Contatti";
        
        $this->view->contatti = true;
    }
    
    public function index() 
    {
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->render('contatti');
    }
    
    public function sendEmail() 
    {
        if ($_POST['verifica'] == "")
        {
            //dichiarazione delle variabili;
            $nominativo = $_POST['nome'].' '.$_POST['cognome'];
            $telefono = $_POST['tel'];
            $email = $_POST['email'];
            $richiesta = htmlentities($_POST['messaggio'], ENT_NOQUOTES, 'UTF-8');
            $titolo = "Contatto da $nominativo";

            $from = 'From :'.$email;

            $messaggio = "Contatto da parte di : 

                          Nominativo: $nominativo

                          E-mail: $email

                          Num. Telefonico: $telefono

                          Contenuto: ".html_entity_decode($richiesta);

            mail('info@immobiliarelepiramidi.com', $titolo, $messaggio, $from);
        }
    }
    
}
?>
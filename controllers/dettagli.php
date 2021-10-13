<?php

/*
 * Controller Page Lista Immobili
 */

class Dettagli extends Controller 
{

    function __construct() 
    {
        parent::__construct();     
        
        $this->view->title = "Immobiliare Le Piramidi - Dettagli Immobile ";
        
        $this->view->dettagli = TRUE;
    }
    
    public function immobile($immoID)
    {
        
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->immobile = $this->model->getImmobile(array(":id_immo" => $immoID));
        
        $this->view->accessori = $this->model->getAccessori(array(":cod_immo" => $immoID));
        
        $this->view->immagini = $this->model->getImages(array(":cod_immo" => $immoID));
        
        $this->view->render('dettagli');
    }
    
    public function codice()
    {
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->immobile = $this->model->getImmobileCodice(array(":cod_rif" => $_POST['codRif']));
        
        $immoID = $this->view->immobile[0]['id_immo'];
        
        $this->view->accessori = $this->model->getAccessori(array(":cod_immo" => $immoID));
        
        $this->view->immagini = $this->model->getImages(array(":cod_immo" => $immoID));
              
        $this->view->render('dettagli');
    }
    
    public function sendEmail() 
    {
        if ($_POST['verifica'] == "")
        {
            //dichiarazione delle variabili;
            $nominativo = $_POST['nome'].' '.$_POST['cognome'];
            $telefono = $_POST['tel'];
            $codice = $_POST['cod_rif'];
            $email = $_POST['email'];
            $richiesta = htmlentities($_POST['messaggio'], ENT_NOQUOTES, 'UTF-8');
            $titolo = "Richiesta Ulteriori Informazioni $codice";

            $from = 'From :'.$email;

            $messaggio = "Un nuovo contatto da parte di : 

                          Nominativo: $nominativo

                          E-mail: $email

                          Num. Telefonico: $telefono

                          Cod. Rif.: $codice

                          Contenuto: ".html_entity_decode($richiesta);

            mail('info@immobiliarelepiramidi.com', $titolo, $messaggio, $from);
        }
    }
}
?>
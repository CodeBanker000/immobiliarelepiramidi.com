<?php

/*
 * Controller Page Index
 */

class Zone extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Immobiliare Le Piramidi - Gestione Zone";
    }
    
    public function index() 
    {
        $this->view->comune = $this->model->getListComune();
        
        $this->view->gestioneZone = true;
        
        $this->view->render('zone');
    }
    
    public function createComune() 
    {
//        $this->model->createComune(array(
//            "nm_comune" => $_POST['comune']
//        ));
//        
//        $result = $this->model->getComune(array(":id_comune" => $this->model->getLastID()));
//        
//        echo json_encode($result);
        echo json_encode("{id: 2}");
    }
    
    public function modificaComune()
    {
        $this->model->modificaComune(array(
            "id_comune" => $_POST['id'],
            "nm_comune" => $_POST['comune']
        ));
        
        $result = $this->model->getComune(array(":id_comune" => $_POST['id']));
        
        echo json_encode($result);
    }
}
?>
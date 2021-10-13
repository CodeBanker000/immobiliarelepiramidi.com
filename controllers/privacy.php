<?php
/*
 * Controller Page Vendita
 */

class Privacy extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Immobiliare Le Piramidi - Privacy";
        
    }
    
    public function index() 
    {
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->render('privacy');
    }
    
}
?>
<?php

/*
 * Controller Page Index
 */

class Index extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Immobiliare Le Piramidi - Homepage";
        
        $this->view->sldShow = true;
        $this->view->mutuo = false;
        
        $this->view->index = true;
    }
    
    public function index()
    {
        $this->view->slideshow = $this->model->getVetrina();
        
        $this->view->last = $this->model->getLastImmobili();
        
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->render('index');
    }
}
?>

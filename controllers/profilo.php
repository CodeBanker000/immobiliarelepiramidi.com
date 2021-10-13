<?php
/*
 * Controller Page Vendita
 */

class Profilo extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Le Piramidi - Profilo";
    }
    
    public function index() 
    {
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->render('profilo');
    }
    
}
?>


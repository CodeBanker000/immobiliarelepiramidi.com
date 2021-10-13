<?php
/*
 * Controller Page Vendita
 */

class Vendita extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Le Piramidi - Vendita";
    }
    
    public function index() 
    {        
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->lista = $this->model->getVenditaImmobili();
        
        $this->view->h3 = "Immobili in Vendita - Tutti (". count($this->view->lista) .")";
        
        $this->view->render('lista');
    }
    
    public function vani($vani)
    {
        
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->lista = $this->model->getListaVani(array(":vani" => $vani));
        
        $this->view->h3 = "Immobili Residenziali in Vendita - $vani vani (". count($this->view->lista) .")";
        
        $this->view->render('lista');
    }
    
    public function commerciale()
    {
        
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->lista = $this->model->getCommerciale();
        
        $this->view->h3 = "Immobili Commerciali in Vendita - Tutti (". count($this->view->lista) .")";
        
        $this->view->render('lista');
    }
    
}
?>

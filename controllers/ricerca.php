<?php
/*
 * Controller Page Affitto
 */

class Ricerca extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Immobiliare Le Piramidi - Risultati Ricerca";
    }
    
    public function index() 
    {
        
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        if (isset($_POST['searchIndex']) && ($_POST['searchIndex'] == 1))
        {
            $data = array();
            $data['comune'] = $_POST['comune'];
            $data['zona'] = $_POST['zona'];
            $data['contratto'] = (isset($_POST['contratto'])) ? $_POST['contratto'] : 0;
            $data['categoria'] = $_POST['categoria'];
            $data['tipologia'] = $_POST['tipologia'];
            $data['att_comm'] = $_POST['attCommerciale'];
            $data['vani'] = ($_POST['vani'] == NULL) ? 0 : $_POST['vani'];
            $data['sup'] = ($_POST['superficie'] == NULL) ? 0 : $_POST['superficie'];
            $data['prezzo'] = ($_POST['prezzo'] == NULL) ? 0 : $_POST['prezzo'];
            
            $this->view->lista = $this->model->getRicercaImmobiliHome($data);
        }
        else 
        {
            $data = array();
            $data['comune'] = $_POST['comune'];
            $data['zona'] = $_POST['zona'];
            $data['contratto'] = (isset($_POST['contratto'])) ? $_POST['contratto'] : 0;
            $data['categoria'] = $_POST['categoria'];
            $data['tipologia'] = $_POST['tipologia'];
            $data['att_comm'] = $_POST['attCommerciale'];
            $data['stato'] = $_POST['stato'];
            $data['vani_min'] = ($_POST['minVani'] == NULL) ? 0 : $_POST['minVani'];
            $data['vani_max'] = ($_POST['maxVani'] == NULL) ? 0 : $_POST['maxVani'];
            $data['sup_min'] = ($_POST['minMQ'] == NULL) ? 0 : $_POST['minMQ'];
            $data['sup_max'] = ($_POST['maxMQ'] == NULL) ? 0 : $_POST['maxMQ'];
            $data['prezzo_min'] = ($_POST['minPrezzo'] == NULL) ? 0 : $_POST['minPrezzo'];
            $data['prezzo_max'] = ($_POST['maxPrezzo'] == NULL) ? 0 : $_POST['maxPrezzo'];

            $this->view->lista = $this->model->getRicercaImmobili($data);
        }
        $this->view->h3 = "Risultati Ricerca (". count($this->view->lista) .")";
        
        $this->view->render('lista');
    }
    
    public function vani($vani)
    {
        $this->view->categ = $this->model->getListCateg();
        $this->view->cond = $this->model->getListCond();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->lista = $this->model->getListaVani(array(":vani" => $vani));
        
        $this->view->h3 = "Immobili Residenziali in Affitto - $vani vani (". count($this->view->lista) .")";
        
        $this->view->render('lista');
    }
    
    public function commerciale()
    {
        $this->view->categ = $this->model->getListCateg();
        $this->view->cond = $this->model->getListCond();
        $this->view->comune = $this->model->getListComune();
        
        $this->view->aside = $this->view->renderAside();
        
        $this->view->lista = $this->model->getCommerciale();
        
        $this->view->h3 = "Immobili Commerciali in Affitto - Tutti (". count($this->view->lista) .")";
        
        $this->view->render('lista');
    }
    
}
?>

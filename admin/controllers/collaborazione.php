<?php

/*
 * Controller Page Collaborazione
 */

class Collaborazione extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Immobiliare Le Piramidi - Collaborazione";
    }
    
    public function index() 
    {
        $this->view->render('collaborazione/index');
    }
    
}
?>
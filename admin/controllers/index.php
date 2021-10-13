<?php

/*
 * Controller Page Index
 */

class Index extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Immobiliare Le Piramidi - Home Admin";
        
        $this->view->aside = true;
    }
    
    public function index() 
    {
        $this->view->render('index/index');
    }
    
}
?>
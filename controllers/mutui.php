<?php
/*
 * Controller Page Mutui
 */

class Mutui extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Le Piramidi - Mutui";
        
        $this->view->aside = TRUE;
    }
    
    public function index() 
    {
        $this->view->render('mutui/index');
    }
    
}
?>

<?php

/*
 * Classe Bootstrap()
 * 
 * Carica il controller e il relativi moduli per la visualizzazione della pagina WEB
 */

class Bootstrap 
{

    private $_url = null;
    private $_controller = null;
    
    function __construct() {
        
        //trasformare url in array
        $this->_getUrl();
        // print_r($this->_url);
        
        //controllo dell'url, se il controller è vuoto richiama la pagina index
        if (empty($this->_url[0])) {
            $this->_loadDefaultController();
            return FALSE;
        }
        
        // Carica il controller esistente
        $this->_loadExistingController();
        
        // Carica il metodo del controller
        $this->_callControllerMethod();
       
        
        
    }
    
    private function _getUrl()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode('/', $url);
    }
    
    private function _loadDefaultController()
    {
        require_once 'controllers/index.php';
        $this->_controller = new Index();
        $this->_controller->loadModel('index');
        $this->_controller->index();
       
    }
    
    private function _loadExistingController()
    {
        $file = 'controllers/' . $this->_url[0] . '.php';
        
        if (file_exists($file)) {
            require_once $file;
            $this->_controller = new $this->_url[0];
            $this->_controller->loadModel($this->_url[0]);
        }
        else {
            $this->_error();
            return FALSE;
        }
    }
    
    private function _callControllerMethod()
    {
        
        $length = count($this->_url);
        
        if ($length > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                $this->_error();
            }
        }
        
        // Determine what to load
        switch ($length) {
            case 5:
                //Controller->Method(Param1, Param2, Param3)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                break;
            
            case 4:
                //Controller->Method(Param1, Param2)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;
            
            case 3:
                //Controller->Method(Param1, Param2)
                $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;
            
            case 2:
                //Controller->Method(Param1, Param2)
                $this->_controller->{$this->_url[1]}();
                break;
            
            default:
                $this->_controller->index();
                break;
        }
    }
    
    private function _error() {
        require_once 'controllers/error.php';
        $this->_controller = new Error();
        $this->_controller->index();
        return FALSE;
    }
}

?>

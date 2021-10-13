<?php
/*
 * Class Controller
 * 
 * Class to handle the load of the view and the model. To extend.
 */

class Controller 
{
    /**
     * Inizialize the class view 
     */
    
    function __construct() 
    {
        $this->view = new View();
    }

//---------------------------------------------------------------------------------------
    
    /**
     * Method to load the model if the file exist
     * 
     * @param string $name Name of the model
     * 
     * @access public
     */

    public function loadModel($name) 
    {
        $path = 'models/' . $name . '_model.php';

        if (file_exists($path)) {
            require_once 'models/' . $name . '_model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
        else { echo 'non trovo il file ' . $path;}
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * 
     */
    
    public function getListTipo()
    {
        $result = $this->model->getListTipo(array(":cod_categ" => $_POST['categ']));
        
        foreach ($result as $k => $v)
        {
            $result[$k]['nm_tipo'] = html_entity_decode($result[$k]['nm_tipo']);
        }
        
        echo json_encode($result);
    }
    
    public function getListAtt()
    {
        $result = $this->model->getListAtt();
        
        foreach ($result as $k => $v)
        {
            $result[$k]['nm_att_comm'] = html_entity_decode($result[$k]['nm_att_comm']);
        }
        
        echo json_encode($result);
    }
    
    public function getListZona()
    {
        $result = $this->model->getListZona(array(":cod_comune" => $_POST['comune']));
        
        foreach ($result as $k => $v)
        {
            $result[$k]['nm_zona'] = html_entity_decode($result[$k]['nm_zona']);
        }
        
        echo json_encode($result);
    }
}

?>

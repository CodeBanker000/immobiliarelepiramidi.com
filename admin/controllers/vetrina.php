<?php

/*
 * Controller Page Index
 */

class Vetrina extends Controller 
{

    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Immobiliare Le Piramidi - Vetrina";
        
        $this->view->vetrina = true;
    }
    
    public function index() 
    {
        $this->view->lista = $this->model->getImmobili();
        
        $this->view->render('vetrina');
    }
    
    public function setVetrina() 
    {
        
        $immoID = $_POST['immoID'];
        
        $this->model->setVetrina(array(
            'slideshow' => $_POST['vetrina'],
            'id_immo' => $immoID
        ));
        
        $result = $this->model->getVetrina(array("id_immo" => $immoID));
        
        $image = $this->model->getImageVetrina(array("cod_immo" => $immoID));
        
        if ($result[0]['slideshow'] == 1)
        {
            if ($image[0]['vetrina'] == '-')
            {
                $file = explode("/", $image[0]['gallery']);

                copy('../' . PATH_IMAGE . $immoID . '/' . $image[0]['gallery'], 
                     '../' . PATH_IMAGE . $immoID . '/' . PATH_IMG_SLD . $file[1]);

                $img = new Image('../' . PATH_IMAGE . $immoID . '/' . PATH_IMG_SLD . $file[1]);

                $img->resizeFixImg(1100, 480);

                $this->model->setImageVetrina(array(
                    'id_img' => $image[0]['id_img'],
                    'vetrina' => PATH_IMG_SLD . $file[1]
                ));
            }
            
            echo $result[0]['slideshow'];
        }
        else
        {
            if ($image[0]['vetrina'] != '-')
            {
                if (File::checkExist('../' . PATH_IMAGE . $immoID . '/' . $image[0]['vetrina']))
                    File::delete ('../' . PATH_IMAGE . $immoID . '/' . $image[0]['vetrina']);
                
                $this->model->setImageVetrina(array(
                    'id_img' => $image[0]['id_img'],
                    'vetrina' => '-'
                ));
                
            }
            
            echo $result[0]['slideshow'];
        }
    }
}
?>
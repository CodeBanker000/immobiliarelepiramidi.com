<?php
/*
 * Controller to handle the view foto
 */

class Foto extends Controller 
{
    /**
     * Inizialize the view
     */
    
    function __construct() 
    {
        parent::__construct();
        
        $this->view->title = "Immobiliare Le Piramidi - Gestione Foto";
        
        $this->view->fotoUpl = TRUE;
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Call the view foto
     * 
     * @param int $immoID Id of the immobile
     * 
     * @access public
     */
    
    public function immobile($immoID)
    {
        $this->view->immoID = $immoID;
        
        $this->view->image = $this->model->getImages(array(":cod_immo" => $immoID));
        
        $this->view->render('foto');
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to upload the images
     * 
     * @access public
     */
    
    public function upload()
    {
        $immoID = $_POST['immoID'];
        $file = $_FILES['file'];
        
        # check if the array is set and not empty 
        if (isset($file) && ($file['name'][0] != null))
        {
            foreach ($file['name'] as $k => $v) 
            {
                # set the directory if them not exist
                $this->_setDir($immoID);
                
                # upload the image in the gallery directory
                if (move_uploaded_file($file['tmp_name'][$k], '../' . PATH_IMAGE . $immoID . '/' . PATH_IMG_GAL . $v))
                {
                    # copy the image in the thumb directory
                    copy('../' . PATH_IMAGE . $immoID . '/' . PATH_IMG_GAL . $v, 
                         '../' . PATH_IMAGE . $immoID . '/' . PATH_IMG_TMB . $v);
                    
                    # inizialize the class Image
                    $img = new Image('../' . PATH_IMAGE . $immoID . '/' . PATH_IMG_TMB . $v);
                    
                    # resize the image
                    $img->resizeRatioImg(250);
                    
                    # insert the image
                    $this->model->insImage(array(
                        'cod_immo' => $immoID,
                        'thumb' => PATH_IMG_TMB . $v,
                        'gallery' => PATH_IMG_GAL . $v,
                        'vetrina' => '-',
                        'alt' => '-',
                        'pos' => $k,
                    ));
                   
                    header("location: " . URL . "admin/foto/immobile/" . $immoID);
                }
            }
                        
        }
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to update the column 'alt' from 'tb_image'
     * 
     * @return string 
     * 
     * @access public
     */
    
    public function updAltText()
    {
        $this->model->updAltText(array(
            'alt' => $_POST['alt'],
            'id_img' => $_POST['imgID']
        ));
        
        echo 'true';
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to delete the image
     * 
     * @access public
     */
    
    public function delImage()
    {
        $image = $this->model->getImage(array(":id_img" => $_POST['imgID']));
        
        $this->model->delImage($_POST['imgID']);
        
        File::delete('../'.PATH_IMAGE.$image[0]['cod_immo'].'/'.$image[0]['thumb']);
        File::delete('../'.PATH_IMAGE.$image[0]['cod_immo'].'/'.$image[0]['gallery']);
        
        echo 'true'; 
    }
    
    private function _setDir($cod_immo)
    {
        if (!File::checkExist('../' . PATH_IMAGE . $cod_immo))
            File::createDir('../' . PATH_IMAGE . $cod_immo . '/');
        
        if (!File::checkExist('../' . PATH_IMAGE . $cod_immo . '/' . PATH_IMG_GAL))
        {
            File::createDir('../' . PATH_IMAGE . $cod_immo . '/' . PATH_IMG_GAL);
            File::createDir('../' . PATH_IMAGE . $cod_immo . '/' . PATH_IMG_TMB);
            File::createDir('../' . PATH_IMAGE . $cod_immo . '/' . PATH_IMG_SLD);
        }
    }
}
?>
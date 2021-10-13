<?php
/**
 * Model to handle the foto page, and insert, update, delete the image
 */

class Foto_Model extends Model
{
    /**
     * Inizialize the model
     */
    
    function __construct() 
    {
        parent::__construct();
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_image' by the id of image
     * 
     * @param array $data Id of the image
     * @return array
     * 
     * @access public
     */
    
    public function getImage($data)
    {
        return $this->db->select("SELECT * FROM tb_image WHERE id_img = :id_img", $data);
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_image' group by id of immobile
     * 
     * @param array $data Id of the immobile
     * @return array
     * 
     * @access public
     */
    
    public function getImages($data)
    {
        return $this->db->select("SELECT * FROM tb_image WHERE cod_immo = :cod_immo ORDER BY pos ASC", $data);
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to insert data of the image into 'tb_image'
     * 
     * @param array $data Array of the data
     * 
     * @access public
     */
    
    public function insImage($data)
    {
        $this->db->insert("tb_image", array(
            'cod_immo' => $data['cod_immo'],
            'thumb' => $data['thumb'],
            'gallery' => $data['gallery'],
            'vetrina' => $data['vetrina'],
            'alt' => $data['alt'],
            'pos' => $data['pos'],
        ));
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to update the column 'alt' from 'tb_image'
     * 
     * @param array $data Data of column
     * 
     * @access public
     */
    
    public function updAltText($data)
    {        
        $this->db->update("tb_image", 
            array('alt' => $data['alt']), 
            "id_img = $data[id_img]");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to delete an image from 'tb_image'
     * 
     * @param int $imgID Id of the image
     * 
     * @access public
     */
    
    public function delImage($imgID)
    {
        $this->db->delete("tb_image", "id_img = $imgID");
    }
    
}
?>

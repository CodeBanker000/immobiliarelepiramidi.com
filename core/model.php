<?php
/*
 * Class Model
 * 
 * Class to handle the connection to the database. Has methods common
 * with the extended controller
 */

class Model 
{
    
    /**
     * Inizialize the class Database.
     */
    
    function __construct() 
    {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_contratto'
     * 
     * @return array
     * 
     * @access public
     */
    
    public function getListContratto()
    {
        return $this->db->select("SELECT * FROM tb_contratto");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_categ'
     * 
     * @return array
     * 
     * @access public
     */
    
    public function getListCategoria()
    {
        return $this->db->select("SELECT * FROM tb_categ");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_tipo' by the type of category
     * 
     * @param array $data Id of the category
     * @return array
     * 
     * @access public
     */
    
    public function getListTipologia($data)
    {
        return $this->db->select("SELECT id_tipo, nm_tipo FROM tb_tipo WHERE cod_categ = :cod_categ", $data);
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_att_comm'
     * 
     * @return array
     * 
     * @access public
     */
    
    public function getListAttCommerciale()
    {
        return $this->db->select("SELECT * FROM tb_att_comm ORDER BY nm_att_comm ASC");
    }
 
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_cond' 
     * 
     * @return array
     * 
     * @access public
     */
    
    public function getListCondizione()
    {
        return $this->db->select("SELECT * FROM tb_cond");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_comune'
     * 
     * @return array
     * 
     * @access public
     */
    
    public function getListComune()
    {
        return $this->db->select("SELECT * FROM tb_comune");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_zona' by the type of comune
     * 
     * @param array $data Id of the comune
     * @return array
     * 
     * @access public
     */
    
    public function getListZona($data)
    {
        return $this->db->select("SELECT id_zona, nm_zona FROM tb_zona WHERE cod_comune = :cod_comune", $data);
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to check if the code of the house exist or not
     * 
     * @param array $data code of the house
     * @return integer
     * 
     * @access public
     */
    
    public function checkExistCode($data)
    {
        return $this->db->countItem("SELECT count(*) FROM tb_immobile WHERE cod_rif = :cod_rif", $data);
    }
}
?>

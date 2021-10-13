<?php

class Zone_Model extends Model
{

    function __construct() 
    {
        parent::__construct();
    }
    
    public function getComune($data)
    {
        return $this->db->select("SELECT * FROM tb_comune WHERE id_comune = :id_comune", $data);
    }
    
    public function createComune($data) 
    {
        $this->db->insert("tb_comune", array(
            "nm_comune" => $data['nm_comune']
        ));
    }
    
    public function modificaComune($data)
    {
        $this->db->update("tb_comune", array(
            "nm_comune" => $data['nm_comune']
        ), "id_comune = $data[id_comune]");
    }
    
    public function deleteComune($comuneID)
    {
        $this->db->delete("tb_comune", "id_comune = $comuneID");
    }
    
    public function getLastID()
    {
        return $this->db->getMaxData("tb_comune", "id_comune");
    }
}
?>

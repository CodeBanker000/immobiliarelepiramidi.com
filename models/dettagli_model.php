<?php

class Dettagli_Model extends Model
{

    function __construct() 
    {
        parent::__construct();
    }
    
    public function getImmobile($data)
    {
        return $this->db->select("
            SELECT * 
            FROM tb_immobile, tb_contratto, tb_categ, tb_tipo, tb_comune, tb_zona, tb_att_comm, tb_desc, tb_cond
            WHERE tb_contratto.id_contr = tb_immobile.contratto
            AND tb_categ.id_categ = tb_immobile.categ
            AND tb_tipo.id_tipo = tb_immobile.tipo
            AND tb_comune.id_comune = tb_immobile.comune
            AND tb_zona.id_zona = tb_immobile.zona
            AND tb_att_comm.id_att_comm = tb_immobile.att_comm
            AND tb_desc.cod_immo = tb_immobile.id_immo
            AND tb_cond.id_cond = tb_immobile.cond
            AND id_immo = :id_immo", $data);
    }
    
    public function getAccessori($data)
    {
        return $this->db->select("SELECT * FROM tb_accessori WHERE cod_immo = :cod_immo", $data);
    }
    
    public function getImages($data)
    {
        return $this->db->select("SELECT * FROM tb_image WHERE cod_immo = :cod_immo ORDER BY pos ASC", $data);
    }
    
    public function getImmobileCodice($data)
    {
        return $this->db->select("
            SELECT * 
            FROM tb_immobile, tb_contratto, tb_categ, tb_tipo, tb_comune, tb_zona, tb_att_comm, tb_desc, tb_cond
            WHERE tb_contratto.id_contr = tb_immobile.contratto
            AND tb_categ.id_categ = tb_immobile.categ
            AND tb_tipo.id_tipo = tb_immobile.tipo
            AND tb_comune.id_comune = tb_immobile.comune
            AND tb_zona.id_zona = tb_immobile.zona
            AND tb_att_comm.id_att_comm = tb_immobile.att_comm
            AND tb_desc.cod_immo = tb_immobile.id_immo
            AND tb_cond.id_cond = tb_immobile.cond
            AND cod_rif = :cod_rif", $data);
    }
    
}
?>

<?php

class Ricerca_Model extends Model
{

    function __construct() 
    {
        parent::__construct();
    }
    
    public function getRicercaImmobili($data) 
    {

        ($data['comune'] == 0) ? $comune = "" : $comune = " AND comune = $data[comune]";
        ($data['zona'] == 0) ? $zona = "" : $zona = " AND zona = $data[zona]";
        ($data['contratto'] == 0) ? $contratto = "" : $contratto = " AND contratto = $data[contratto]";
        ($data['categoria'] == 0) ? $categoria = "" : $categoria = " AND categ = $data[categoria]";
        ($data['tipologia'] == 0) ? $tipologia = "" : $tipologia = " AND tipo = $data[tipologia]";
        ($data['att_comm'] == 1) ? $attivita = "" : $attivita = " AND att_comm = $data[att_comm]";
        ($data['stato'] == 0) ? $cond = "" : $cond = " AND cond = $data[stato]";
        
        if (($data['vani_min'] == 0) && ($data['vani_max'] == 0))
            $vani = "";
        elseif (($data['vani_min'] != 0) && ($data['vani_max'] == 0)) {
            $vani_max = $this->db->getMaxData("tb_immobile", "vani");
            
            $vani = " AND vani BETWEEN $data[vani_min] AND $vani_max";
        }
        elseif (($data['vani_min'] == 0) && ($data['vani_max'] != 0)) {
            $vani_min = $this->db->getMinData("tb_immobile", "vani");
            
            $vani = " AND vani BETWEEN $vani_min AND $data[vani_max]";
        }
        else 
            $vani = " AND vani BETWEEN $data[vani_min] AND $data[vani_max]";
        
        if (($data['sup_min'] == 0) && ($data['sup_max'] == 0))
            $sup = "";
        elseif (($data['sup_min'] != 0) && ($data['sup_max'] == 0)) {
            $sup_max = $this->db->getMaxData("tb_immobile", "sup");
            
            $sup = " AND sup BETWEEN $data[sup_min] AND $sup_max";
        }
        elseif (($data['sup_min'] == 0) && ($data['sup_max'] != 0)) {
            $sup_min = $this->db->getMinData("tb_immobile", "sup");
            
            $sup = " AND sup BETWEEN $sup_min AND $data[sup_max]";
        }
        else 
            $sup = " AND sup BETWEEN $data[sup_min] AND $data[sup_max]";
        
        if (($data['prezzo_min'] == 0) && ($data['prezzo_max'] == 0))
            $prezzo = "";
        elseif (($data['prezzo_min'] != 0) && ($data['prezzo_max'] == 0)) {
            $prezzo_max = $this->db->getMaxData("tb_immobile", "prezzo");
            
            $prezzo = " AND prezzo BETWEEN $data[prezzo_min] AND $prezzo_max";
        }
        elseif (($data['prezzo_min'] == 0) && ($data['prezzo_max'] != 0)) {
            $prezzo_min = $this->db->getMinData("tb_immobile", "prezzo");
            
            $prezzo = " AND prezzo BETWEEN $prezzo_min AND $data[prezzo_max]";
        }
        else 
            $prezzo = " AND prezzo BETWEEN $data[prezzo_min] AND $data[prezzo_max]";
        
        
        return $this->db->select("
            SELECT *
            FROM tb_immobile 
            LEFT JOIN	(
                (SELECT cod_immo, min(id_img) AS id_immagine
		FROM tb_image
		GROUP BY cod_immo) image LEFT JOIN tb_image 
		ON image.id_immagine = tb_image.id_img) 
            ON tb_immobile.id_immo = image.cod_immo, tb_zona, tb_tipo, tb_contratto, tb_comune, tb_categ, tb_att_comm, tb_cond 
            WHERE tb_zona.id_zona = tb_immobile.zona 
            AND tb_comune.id_comune = tb_immobile.comune
            AND tb_tipo.id_tipo = tb_immobile.tipo
            AND tb_att_comm.id_att_comm = tb_immobile.att_comm
            AND tb_categ.id_categ = tb_immobile.categ
            AND tb_contratto.id_contr = tb_immobile.contratto
            AND tb_cond.id_cond = tb_immobile.cond
            $comune$zona$contratto$categoria$tipologia$attivita$cond$vani$sup$prezzo
            AND stato = 1");
    }
    
    public function getRicercaImmobiliHome($data)
    {
        ($data['comune'] == 0) ? $comune = "" : $comune = " AND comune = $data[comune]";
        ($data['zona'] == 0) ? $zona = "" : $zona = " AND zona = $data[zona]";
        ($data['contratto'] == 0) ? $contratto = "" : $contratto = " AND contratto = $data[contratto]";
        ($data['categoria'] == 0) ? $categoria = "" : $categoria = " AND categ = $data[categoria]";
        ($data['tipologia'] == 0) ? $tipologia = "" : $tipologia = " AND tipo = $data[tipologia]";
        ($data['att_comm'] == 1) ? $attivita = "" : $attivita = " AND att_comm = $data[att_comm]";
        ($data['vani'] == 0) ? $vani = "" : $vani = " AND cond = $data[vani]";
        ($data['sup'] == 0) ? $sup = "" : $sup = " AND cond = $data[sup]";
        ($data['prezzo'] == 0) ? $prezzo = "" : $prezzo = " AND cond = $data[prezzo]";
        
        return $this->db->select("
            SELECT *
            FROM tb_immobile 
            LEFT JOIN	(
                (SELECT cod_immo, min(id_img) AS id_immagine
		FROM tb_image
		GROUP BY cod_immo) image LEFT JOIN tb_image 
		ON image.id_immagine = tb_image.id_img) 
            ON tb_immobile.id_immo = image.cod_immo, tb_zona, tb_tipo, tb_contratto, tb_comune, tb_categ, tb_att_comm, tb_cond 
            WHERE tb_zona.id_zona = tb_immobile.zona 
            AND tb_comune.id_comune = tb_immobile.comune
            AND tb_tipo.id_tipo = tb_immobile.tipo
            AND tb_att_comm.id_att_comm = tb_immobile.att_comm
            AND tb_categ.id_categ = tb_immobile.categ
            AND tb_contratto.id_contr = tb_immobile.contratto
            AND tb_cond.id_cond = tb_immobile.cond
            $comune$zona$contratto$categoria$tipologia$attivita$vani$sup$prezzo
            AND stato = 1");
    }
}
?>

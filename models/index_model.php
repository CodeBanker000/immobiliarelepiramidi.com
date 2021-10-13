<?php

class Index_Model extends Model
{

    function __construct() 
    {
        parent::__construct();
    }
    
    public function getVetrina() 
    {
        return $this->db->select("
            SELECT *
            FROM tb_immobile 
            LEFT JOIN	(
                (SELECT cod_immo, min(id_img) AS id_immagine
		FROM tb_image
		GROUP BY cod_immo) image LEFT JOIN tb_image 
		ON image.id_immagine = tb_image.id_img) 
            ON tb_immobile.id_immo = image.cod_immo, tb_zona, tb_tipo, tb_contratto, tb_comune, tb_categ 
            WHERE tb_zona.id_zona = tb_immobile.zona 
            AND tb_comune.id_comune = tb_immobile.comune
            AND tb_tipo.id_tipo = tb_immobile.tipo
            AND tb_categ.id_categ = tb_immobile.categ
            AND tb_contratto.id_contr = tb_immobile.contratto
            AND slideshow = 1");
    }
    
    public function getLastImmobili() 
    {
        return $this->db->select("
            SELECT *
            FROM tb_immobile 
            LEFT JOIN	(
                (SELECT cod_immo, min(id_img) AS id_immagine
		FROM tb_image
		GROUP BY cod_immo) image LEFT JOIN tb_image 
		ON image.id_immagine = tb_image.id_img) 
            ON tb_immobile.id_immo = image.cod_immo, tb_zona, tb_tipo, tb_contratto, tb_comune, tb_categ 
            WHERE tb_zona.id_zona = tb_immobile.zona 
            AND tb_comune.id_comune = tb_immobile.comune
            AND tb_tipo.id_tipo = tb_immobile.tipo
            AND tb_categ.id_categ = tb_immobile.categ
            AND tb_contratto.id_contr = tb_immobile.contratto
            ORDER BY data DESC LIMIT 8");
    }
    
}
?>

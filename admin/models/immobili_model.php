<?php
/**
 *  Model for handle the insert, update, delete and extract data of 'IMMOBILI'
 *  also handle the view nuovo, modifica, dettagli, lista,  
 */

class Immobili_Model extends Model
{
    /**
     * Inizialize the Model 
     */
    
    function __construct() 
    {
        parent::__construct();
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_immobile' by the id of 'immobile'
     * 
     * @param array $data Id of the 'immobile'
     * @return array
     * 
     * @access public
     */
    
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
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_immobile' by the type of state
     * 
     * @param array $data Id of the state
     * @return array
     * 
     * @access public
     */
    
    public function getImmobili($data) 
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
            AND stato = :stato", $data);
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract tha data from 'tb_accessori' by the id of the 'immobile'
     * 
     * @param array $data Id of the 'immobile'
     * @return array
     * 
     * @access public
     */
    
    public function getAccessori($data)
    {
        return $this->db->select("SELECT * FROM tb_accessori WHERE cod_immo = :cod_immo", $data);
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to extract the data from 'tb_images' by the id of the 'immobile'
     * 
     * @param array $data Id of the 'immobile'
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
     * Method to insert the data into 'tb_immobili'
     * 
     * @param array $data Array of all data 
     * 
     * @access public
     */
    
    public function insDatiPrincipali($data)
    {
        $this->db->insert("tb_immobile", array(
            'data' => $data['data'],
            'cod_rif' => $data['cod_rif'],
            'stato' => $data['stato'],
            'contratto' => $data['contratto'],
            'categ' => $data['categ'],
            'tipo' => $data['tipo'],
            'att_comm' => $data['att_comm'],
            'cond' => $data['cond'],
            'vani' => $data['vani'],
            'sup' => $data['sup'],
            'comune' => $data['comune'],
            'zona' => $data['zona'],
            'prezzo' => $data['prezzo'],
            'ape' => $data['ape'],
            'epi' => $data['epi'],
            'slideshow' => $data['slideshow']
        ));
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to insert the data of the geo position into 'tb_geo'
     * 
     * @param array $data Array of the data
     * 
     * @access public
     */
    
    public function insGeoData($data)
    {
        $this->db->insert("tb_geo", array(
            'cod_immo' => $data['cod_immo'],
            'lat' => $data['lat'],
            'lng' => $data['lng'],            
        ));
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to insert the data of the description into 'tb_desc'
     * 
     * @param array $data Array of the data
     * 
     * @access public
     */
    
    public function insDescrizione($data)
    {
        $this->db->insert("tb_desc", array(
            'cod_immo' => $data['cod_immo'],
            'desc' => $data['desc']
        ));
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to insert the data accessori into 'tb_accessori'
     * 
     * @param array $data Array of the data
     * 
     * @access public
     */
    
    public function insDatiAccessori($data) 
    {
        $this->db->insert("tb_accessori", array(
            'cod_immo' => $data['cod_immo'],
            'tipo_prop' => $data['tipo_prop'],
            'piano' => $data['piano'],
            'livelli' => $data['livelli'],
            'ascensore' => $data['ascensore'],
            'soggiorno' => $data['soggiorno'],
            'cucina' => $data['cucina'],
            'camera' => $data['camera'],
            'sup_prod' => $data['sup_prod'],
            'sup_uff' => $data['sup_uff'],
            'sup_comm' => $data['sup_comm'],
            'sup_est' => $data['sup_est'],
            'coltura' => $data['coltura'],
            'panorama' => $data['panorama'],
            'ettari' => $data['ettari'],
            'giacitura' => $data['giacitura'],
            'dotazione' => $data['dotazione'],
            'bagno' => $data['bagno'],
            'balcone' => $data['balcone'],
            'terrazza' => $data['terrazza'],
            'giardino' => $data['giardino'],
            'garage' => $data['garage'],
            'soffitta' => $data['soffitta'],
            'mansarda' => $data['mansarda'],
            'cantina' => $data['cantina'],
            'taverna' => $data['taverna'],
            'piscina' => $data['piscina'],
            'montacarichi' => $data['montacarichi'],
            'ribalte' => $data['ribalte'],
            'carroponte' => $data['carroponte'],
            'arredato' => $data['arredato'],
            'allarme' => $data['allarme'],
            'climatizzatore' => $data['climatizzatore'],
            'riscaldamento' => $data['riscaldamento']       
        ));
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to update the data of the immobile from 'tb_immobile'
     * 
     * @param array $data Array of the data
     * 
     * @access public
     */
    
    public function uptDatiPrincipali($data)
    {
        $this->db->update("tb_immobile", array(
            'cod_rif' => $data['cod_rif'],
            'stato' => $data['stato'],
            'contratto' => $data['contratto'],
            'categ' => $data['categ'],
            'tipo' => $data['tipo'],
            'att_comm' => $data['att_comm'],
            'cond' => $data['cond'],
            'vani' => $data['vani'],
            'sup' => $data['sup'],
            'comune' => $data['comune'],
            'zona' => $data['zona'],
            'prezzo' => $data['prezzo'],
            'ape' => $data['ape'],
            'epi' => $data['epi']
        ), "id_immo = $data[id_immo]");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to update the geo data from 'tb_geo'
     * 
     * @param array $data Array of the data
     * 
     * @access public
     */
    
    public function updGeoData($data)
    {
        $this->db->update("tb_geo", array(
           'lat' => $data['lat'], 
           'lng' => $data['lng'] 
        ), "cod_immo = $data[cod_immo]");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to update the data of description from 'tb_desc'
     * 
     * @param array $data Array of the data
     *d
     * @access public
     */
    
    public function updDescrizione($data)
    {
        $this->db->update("tb_desc", array(
           'desc' => $data['desc'] 
        ), "cod_immo = $data[cod_immo]");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to update the data of accessori from 'tb_accessori'
     * 
     * @param array $data Array of the data
     * 
     * @access public
     */
    
    public function updDatiAccessori($data)
    {
        $this->db->update("tb_accessori", array(
            'tipo_prop' => $data['tipo_prop'],
            'piano' => $data['piano'],
            'livelli' => $data['livelli'],
            'ascensore' => $data['ascensore'],
            'soggiorno' => $data['soggiorno'],
            'cucina' => $data['cucina'],
            'camera' => $data['camera'],
            'sup_prod' => $data['sup_prod'],
            'sup_uff' => $data['sup_uff'],
            'sup_comm' => $data['sup_comm'],
            'sup_est' => $data['sup_est'],
            'coltura' => $data['coltura'],
            'panorama' => $data['panorama'],
            'ettari' => $data['ettari'],
            'giacitura' => $data['giacitura'],
            'dotazione' => $data['dotazione'],
            'bagno' => $data['bagno'],
            'balcone' => $data['balcone'],
            'terrazza' => $data['terrazza'],
            'giardino' => $data['giardino'],
            'garage' => $data['garage'],
            'soffitta' => $data['soffitta'],
            'mansarda' => $data['mansarda'],
            'cantina' => $data['cantina'],
            'taverna' => $data['taverna'],
            'piscina' => $data['piscina'],
            'montacarichi' => $data['montacarichi'],
            'ribalte' => $data['ribalte'],
            'carroponte' => $data['carroponte'],
            'arredato' => $data['arredato'],
            'allarme' => $data['allarme'],
            'climatizzatore' => $data['climatizzatore'],
            'riscaldamento' => $data['riscaldamento']
        ), "cod_immo = $data[cod_immo]");
    }

//---------------------------------------------------------------------------------------
    
    /**
     * Method to delete the data of immobile from 'tb_immobile' by the id
     * 
     * @param int $immoID Id of the immobile
     */
    
    public function delImmobile($immoID)
    {
        $this->db->delete("tb_immobile", "id_immo = $immoID");
    }

//---------------------------------------------------------------------------------------
    
    /**
     * Method to delete the data description from 'tb_desc' by the id of
     * the immobile
     * 
     * @param int $immoID
     * 
     * @access public
     */
    
    public function delDescrizione($immoID)
    {
        $this->db->delete("tb_desc", "cod_immo = $immoID");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to delete the data of the geo data from 'tb_geo' by the id of
     * the immobile
     * 
     * @param int $immoID
     * 
     * @access public
     */
    
    public function delGeoData($immoID)
    {
        $this->db->delete("tb_geo", "cod_immo = $immoID");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to delete the data of accessori from 'tb_accessori' by the id of
     * the immobile
     * 
     * @param int $immoID
     * 
     * @access public
     */
    
    public function delAccessori($immoID)
    {
        $this->db->delete("tb_accessori", "cod_immo = $immoID");
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to have the last insert id 
     * 
     * @return int
     * 
     * @access public
     */
    
    public function getLastID()
    {
        return $this->db->getMaxData("tb_immobile", "id_immo");
    }
}
?>
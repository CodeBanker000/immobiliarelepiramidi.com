<?php
/*
 * Controller to handle the view nuovo, modifica, dettagli, lista
 */

class Immobili extends Controller 
{
    /**
     * Inizialize the controller
     */
    
    function __construct() 
    {
        parent::__construct();     
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Call the lista page
     * 
     * @param int $stato Id of the state
     * 
     * @access public
     */
    
    public function lista($stato) 
    {
        $this->view->lista = $this->model->getImmobili(array(":stato" => $stato));
        
        $this->view->title = "Immobiliare Le Piramidi - Lista Immobili";
        
        $this->view->render('immobili');
    }
    
//---------------------------------------------------------------------------------------    
    
    /**
     * Call the dettagli page
     * 
     * @param int $immoID Id of the immobile
     * 
     * @access public
     */
    
    public function dettagli($immoID)
    {
        $this->view->immobile = $this->model->getImmobile(array(":id_immo" => $immoID));
        
        $this->view->accessori = $this->model->getAccessori(array(":cod_immo" => $immoID));
        
        $this->view->immagini = $this->model->getImages(array(":cod_immo" => $immoID));
        
        $this->view->title = "Immobiliare Le Piramidi - Dettagli Immobile ";
        
        $this->view->render('dettagli');
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Call the nuovo page
     * 
     * @access public
     */
    
    public function nuovo() 
    {
        $this->view->title = "Immobiliare Le Piramidi - Nuovo Immobile";
        
        $this->view->contract = $this->model->getListContratto();
        $this->view->categ = $this->model->getListCategoria();
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();   
        
        $this->view->new = true;
        
        $this->view->render('nuovo');
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Call the modifica page
     * 
     * @param int $immoID Id of the immobile
     * 
     * @access public
     */
    
    public function modifica($immoID)
    {
        $this->view->immobile = $this->model->getImmobile(array(":id_immo" => $immoID));
        
        $this->view->accessori = $this->model->getAccessori(array(":cod_immo" => $immoID));
        
        $this->view->contract = $this->model->getListContratto();
        $this->view->categ = $this->model->getListCategoria();
        $this->view->tipo = $this->model->getListTipologia(array(":cod_categ" => $this->view->immobile[0]['id_categ']));
        
        if ($this->view->immobile[0]['att_comm'] != 1) 
            $this->view->attComm = $this->model->getListAttCommerciale();
        
        $this->view->cond = $this->model->getListCondizione();
        $this->view->comune = $this->model->getListComune();   
        $this->view->zona = $this->model->getListZona(array(":cod_comune" => $this->view->immobile[0]['id_comune']));   
        
        $this->view->title = "Immobiliare Le Piramidi - Modifica Immobile";
        
        $this->view->mod = true;
        
        $this->view->render('modifica');
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to insert all the data about an immobile
     */
    
    public function create()
    {        
        # insert data into 'tb_immobili'
        # **********************************************************************
        
        $data = array();
        $data['data'] = date("Y-m-d");
        $data['cod_rif'] = $_POST['codRif'];
        $data['stato'] = $_POST['stato'];
        $data['contratto'] = $_POST['contratto'];
        $data['categ'] = $_POST['categoria'];
        $data['tipo'] = $_POST['tipologia'];
        $data['att_comm'] = $_POST['attivita'];
        $data['cond'] = $_POST['condizione'];
        $data['vani'] = $_POST['vani'];
        $data['sup'] = $_POST['superficie'];
        $data['comune'] = $_POST['localita'];
        $data['zona'] = $_POST['zona'];
        $data['prezzo'] = $_POST['prezzo'];
        $data['ape'] = $_POST['classe'];
        $data['epi'] = $_POST['indice'] . " " . htmlentities($_POST['misIndice']);
        $data['slideshow'] = 0;
        
        $this->model->insDatiPrincipali($data);        
        
        $immoID = $this->model->getLastID(); # get the last ID
        
        # Insert data into tb_geo
        #***********************************************************************
        
//        $dataGeo = array();
//        $dataGeo['cod_immo'] = $immoID;
//        $dataGeo['lat'] = $_POST['latitude'];
//        $dataGeo['lng'] = $_POST['longitude'];
//        
//        $this->model->createGeo($dataGeo);
        
        # Insert data into tb_desc
        #***********************************************************************
        
        $dataDesc = array();
        $dataDesc['cod_immo'] = $immoID;
        $dataDesc['desc'] = htmlentities($_POST['descrizione']);

        $this->model->insDescrizione($dataDesc);
        
        # Insert data into tb_accessori
        #***********************************************************************
        
        $dataAccessori = array(
            'cod_immo' => $immoID,
            'piano' => htmlentities($_POST['piano']),
            'livelli' => $_POST['livelli'],
            'ascensore' => ((isset($_POST['ascensore'])) ? 1 : 0),
            'soggiorno' => $_POST['soggiorno'],
            'cucina' => $_POST['cucina'],
            'camera' => $_POST['camera'],
            'sup_prod' => $_POST['supProduttivi'],
            'sup_uff' => $_POST['supUffici'],
            'sup_comm' => $_POST['supCommerciali'],
            'sup_est' => $_POST['supEsterni'],
            'coltura' => $_POST['coltura'],
            'panorama' => $_POST['panorama'],
            'ettari' => $_POST['ettari'],
            'giacitura' => $_POST['giacitura'],
            'dotazione' => $_POST['dotazione'],
            'bagno' => $_POST['bagno'],
            'balcone' => ((isset($_POST['balcone'])) ? 1 : 0),
            'terrazza' => ((isset($_POST['terrazza'])) ? 1 : 0),
            'giardino' => ((isset($_POST['giardino'])) ? $_POST['tipoGiardino'] : 0),
            'garage' => ((isset($_POST['garage'])) ? $_POST['tipoGarage'] : 0),
            'soffitta' => ((isset($_POST['soffitta'])) ? 1 : 0),
            'mansarda' => ((isset($_POST['mansarda'])) ? 1 : 0),
            'cantina' => ((isset($_POST['cantina'])) ? 1 : 0),
            'taverna' => ((isset($_POST['taverna'])) ? 1 : 0),
            'piscina' => ((isset($_POST['piscina'])) ? 1 : 0),
            'montacarichi' => ((isset($_POST['montacarichi'])) ? 1 : 0),
            'ribalte' => ((isset($_POST['ribalte'])) ? 1 : 0),
            'carroponte' => ((isset($_POST['carroponte'])) ? 1 : 0),
            'arredato' => ((isset($_POST['arredato'])) ? $_POST['tipoArredo'] : 0),
            'allarme' => ((isset($_POST['allarme'])) ? $_POST['tipoAllarme'] : 0),
            'climatizzatore' => ((isset($_POST['climatizzatore'])) ? $_POST['tipoClima'] : 0),
            'riscaldamento' => $_POST['riscaldamento'],
            'tipo_prop' => $_POST['tipoProprieta']
        );

        $this->model->createDatiAccessori($dataAccessori);

        //deve essere reindirizzata alla gestione foto
        header("location: ". URL ."admin/foto/immobile/" . $immoID);
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to update data of the immobile
     */
    
    public function update()
    {
        # Update data from tb_immobile
        #***********************************************************************
        
        $this->model->updDatiPrincipali(array(
            'id_immo' => $_POST['immoID'],
            'cod_rif' => $_POST['codRif'],
            'stato' => $_POST['stato'],
            'contratto' => $_POST['contratto'],
            'categ' => $_POST['categoria'],
            'tipo' => $_POST['tipologia'],
            'att_comm' => $_POST['attivita'],
            'cond' => $_POST['condizione'],
            'vani' => $_POST['vani'],
            'sup' => $_POST['superficie'],
            'comune' => $_POST['localita'],
            'zona' => $_POST['zona'],
            'prezzo' => $_POST['prezzo'],
            'ape' => $_POST['classe'],
            'epi' => $_POST['indice'] . " " . htmlentities($_POST['misIndice'])
        ));
        
        # Update data from tb_geo
        #***********************************************************************
        
//        $this->model->updGeoData(array(
//            'cod_immo' => $_POST['immoID'],
//            'lat' => $_POST['latitude'],
//            'lng' => $_POST['longitude']
//        ));
        
        # Update data from tb_desc
        #***********************************************************************
        
        $this->model->updDescrizione(array(
            'desc' => htmlentities($_POST['descrizione']),
            'cod_immo' => $_POST['immoID']
        ));
        
        # Update data from tb_accessori
        #***********************************************************************
        
        $this->model->updDatiAccessori(array(
            'cod_immo' => $_POST['immoID'],
            'tipo_prop' => $_POST['tipoProprieta'],
            'piano' => htmlentities($_POST['piano']),
            'livelli' => $_POST['livelli'],
            'ascensore' => ((isset($_POST['ascensore'])) ? 1 : 0),
            'soggiorno' => $_POST['soggiorno'],
            'cucina' => $_POST['cucina'],
            'camera' => $_POST['camera'],
            'sup_prod' => $_POST['supProduttivi'],
            'sup_uff' => $_POST['supUffici'],
            'sup_comm' => $_POST['supCommerciali'],
            'sup_est' => $_POST['supEsterni'],
            'coltura' => $_POST['coltura'],
            'panorama' => $_POST['panorama'],
            'ettari' => $_POST['ettari'],
            'giacitura' => $_POST['giacitura'],
            'dotazione' => $_POST['dotazione'],
            'bagno' => $_POST['bagno'],
            'balcone' => ((isset($_POST['balcone'])) ? 1 : 0),
            'terrazza' => ((isset($_POST['terrazza'])) ? 1 : 0),
            'giardino' => ((isset($_POST['giardino'])) ? $_POST['tipoGiardino'] : 0),
            'garage' => ((isset($_POST['garage'])) ? $_POST['tipoGarage'] : 0),
            'soffitta' => ((isset($_POST['soffitta'])) ? 1 : 0),
            'mansarda' => ((isset($_POST['mansarda'])) ? 1 : 0),
            'cantina' => ((isset($_POST['cantina'])) ? 1 : 0),
            'taverna' => ((isset($_POST['taverna'])) ? 1 : 0),
            'piscina' => ((isset($_POST['piscina'])) ? 1 : 0),
            'montacarichi' => ((isset($_POST['montacarichi'])) ? 1 : 0),
            'ribalte' => ((isset($_POST['ribalte'])) ? 1 : 0),
            'carroponte' => ((isset($_POST['carroponte'])) ? 1 : 0),
            'arredato' => ((isset($_POST['arredato'])) ? $_POST['tipoArredo'] : 0),
            'allarme' => ((isset($_POST['allarme'])) ? $_POST['tipoAllarme'] : 0),
            'climatizzatore' => ((isset($_POST['climatizzatore'])) ? $_POST['tipoClima'] : 0),
            'riscaldamento' => $_POST['riscaldamento']            
        ));
    }

//---------------------------------------------------------------------------------------
    
    /**
     * Method to check the referrer code
     * 
     * @access public
     */
    
    public function checkCode() 
    {
        $result = $this->model->checkCode(array(":cod_rif" => $_POST['cod_rif']));
        
        echo $result;
    }
}
?>
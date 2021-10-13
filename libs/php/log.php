<?php
/**
 * 
 * Classe Log()
 * 
 * Classe per la creazione e scrittura di un file di testo
 * dove vengono inserite le informazioni di tutte le operazioni
 * eseguite nella parte admin
 * 
 * @author CodeBanker
 * @copyright CodeBanker
 * @version 1.0.0
 * 
 */


class Log
{

    /**
     * Metodo write()
     * 
     * scrive il file di testo dei dati
     * 
     * @param string $strFileName 	percorso e nome del file
     * @param string $strData 	dati da scrivere nel file
     */
	
    public function write($strFileName, $strData)
    {
        $handle = fopen($strFileName, 'a+');

        fwrite($handle, "\r" . self::_getDateTime() . $strData);
        fclose($handle);
    }
	
//------------------------------------------------------------

    /**
     * Metodo read()
     * 
     * legge il contenuto del file
     * 
     * @param string $strFileName	percorso e nome del file
     * @return string 	contenuto del file
     */
	
    public function read($strFileName)
    {		
        $handle = fopen($strFileName, 'r');

        return file_get_contents($strFileName);		
    }
	
//------------------------------------------------------------

    /**
     * Metodo _getDateTime()
     * 
     * estrae il giorno e l'orario della scrittura del file
     */
	
    private function _getDateTime()
    {
        return date("d-m-Y H:i:s");
    }
	
}
?>
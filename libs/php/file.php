<?php
/**
 * Classe File
 * 
 * Classe che gestisce le funzioni basi sui file, check l'esistenza del file
 * o directory, crea una nuova directory, cancella un file o directory, estrae la 
 * lista dei file e directory della parent selezionata.
 * 
 * @author CodeBanker <codebanker000@gmail.com>
 * @version 1.0.0
 * @copyright Opensource 
 * @license MIT
 * @package MyClass File
 * @subpackage Classe 
 * @filesource
 * 		
 */


class File
{
	/**
	 * Contenitore della directory aperta
	 * 
	 * @access private
	 * @var string
	 */
	
	private $_dir;

	/**
	 * Percorso della directory
	 * 
	 * @access private
	 * @var string
	 */
	
	private $_patch;
	
//-----------------------------------------------------------------------------
	
	/**
	 * Costruttore della classe
	 * 
	 * Setta le variabili della classe, apre la directory per 
	 * effettuare le operazioni
	 * 
	 * @access	public
	 * @param 	string 	$link	percorso della cartella di root
	 */
	
	public function __construct($link)
	{
		$this->_patch = $link;
		$this->_dir = self::_open($this->patch); 
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Distruttore della classe
	 * 
	 * Distrugge la classe chiudendo la directory aperta
	 * dalla funzione __construct()
	 * 
	 * @access public
	 */
	
	public function __destruct()
	{
		self::_close($this->_dir);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo getList()
	 * 
	 * Metodo per estrarre la lista della directory
	 * 
	 * @access public
	 * @static
	 * @param string $link	path della directory
	 * 
	 * @return array
	 */
	 
	public static function getList($link)
	{
		return scandir($link);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo createDir()
	 *
	 * Metodo per creare la directory 
	 * 
	 * @access public
	 * @static
	 * @param string $directory		nome della directory da creare
	 * 
	 * @return	boolean
	 *
	 */
	 
	public static function createDir($directory)
	{
		return mkdir($directory, 0777);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo uploadFile()
	 *
	 * Metodo per fare l'upload del file
	 * 
	 * @access public
	 * @static
	 * @param string $file	Nome del File per l'upload
	 * @param string $destination	Path di destinazione	
	 *
	 * @return Boolean
	 */
	
	public static function uploadFile($file, $destination)
	{
            return move_uploaded_file($file['tmp_name'], $destination.$file['name']);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo copyFile()
	 * 
	 * Metodo per copiare i files
	 *
	 * @access public
	 * @static
	 * @param string $file	Nome del File 
	 * @param string $destination	Path di destinazione del file
	 * @param string $source 	Path del file sorgente	
	 *
	 * @return boolean
	 */
	
	public static function copyFile($file, $source, $destination)
	{
		return copy($source.$file['name'], $destination.$file['name']);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo checkExist()
	 * 
	 * Metodo per controllare se esiste il file o la directory
	 *
	 * @access public
	 * @static
	 * @param string $link	Directory o file da controllare
	 * 
	 * @return	Boolean
	 */
	
	public static function checkExist($link)
	{
		return file_exists($link);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo delete()
	 * 
	 * Metodo per cancellare il file o la directory
	 * 
	 * @access public
	 * @static
	 * @param string $link	Path e nome del file o della directory
	 * 
	 * @return boolean
	 */
	
	public static function delete($link)
	{
		if(is_dir($link))
			return rmdir($link);
		if(is_file($link))
			return unlink($link);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo open()
	 * 
	 * Metodo per aprire la directory
	 * 
	 * @access	private
	 * @static
	 * @param string $directory		cartella del progetto
	 * 
	 * @return	resource
	 */
	 
	private static function _open($directory)
	{
		if(is_dir($directory))
			return $resource = opendir($directory);
		else
			echo 'Il percorso non &egrave; una directory';
	}

//-----------------------------------------------------------------------------
	
	/**
	 * Metodo close()
	 * 
	 * Metodo per chiudere la directory
	 *
	 * @access private
	 * @param string $directory		cartella del progetto
	 */
	 
	private static function _close($directory)
	{
		return closedir($directory);
	}
	
}
?>
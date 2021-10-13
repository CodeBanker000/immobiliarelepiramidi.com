<?php
/**
 * Classe Image
 * 
 * Classe per la gestione delle immagini, creazione, estrazione
 * delle informazioni, ridimensionamento delle immagini con i lati fissi
 * e/o proporzionali.
 * 
 * @author CodeBanker <codebanker000@gmail.com>
 * @version 1.0.0
 * @copyright Opensource 
 * @license MIT
 * @package MyClass Image
 * @subpackage Classe
 * @filesource
 * 
 */

class Image
{
	/**
	 * Larghezza dell'immagini
	 * 
	 * @access public
	 * @var int
	 */
	
	public $width;
	
	/**
	 * Altezza dell'immagine
	 * 
	 * @access public
	 * @var int
	 */
	
	public $height;
	
	/**
	 * Path valida dell'immagine
	 * 
	 * @access private
	 * @var string
	 */
	
	private $_source;
	
	/**
	 * Informazioni dell'immagine
	 * 
	 * @access private
	 * @var string
	 */
	
	private $_info;
	
	/**
	 * Costante
	 * 
	 * Valore per la qualità dell'immagine
	 * 
	 * @var int
	 */
	
	const QUALITY_IMAGE = 75;
	
//-----------------------------------------------------------------------------
	
	/**
	 * Costruttore della classe
	 * 
	 * Setta le variabili della classe
	 * 
	 * @access public
	 * @param string $image Path e nome dell'immagini
	 */
	
	public function __construct($image)
	{
		$this->_source = $image;
		$this->_info = self::getInfo($this->_source);
		$this->width = $this->_info[0];
		$this->height = $this->_info[1];
	}
	
//-----------------------------------------------------------------------------

	/**
	 * Metodo resizeFixImg()
	 * 
	 * Metodo per ridimensionare l'immagine con un lato Fisso
	 *
	 * @access public
	 * @param int $newWidth		Base dell'immagine
	 * @param int $newHeight	Altezza dell'immagine
	 * 
	 * @return boolean	
	 */
	
	public function resizeFixImg($newWidth, $newHeight)
	{
		$type = $this->getType();
		
		switch($type)
		{
			case 'JPG':
				return $this->createImgJPG($this->_source, $this->width, $this->height, $newWidth, $newHeight, self::QUALITY_IMAGE);
			break;
			
			case 'PNG':
				return $this->createImgPNG($this->_source, $this->width, $this->height, $newWidth, $newHeight, self::QUALITY_IMAGE);
			break;
			
			case 'GIF':
				return $this->createImgGIF($this->_source, $this->width, $this->height, $newWidth, $newHeight, self::QUALITY_IMAGE);
			break;
		}
	}

//-----------------------------------------------------------------------------
	
	/**
	 * Metodo resizeRatioImg()
	 * 
	 * Metodo per ridimensionare l'immagine proporzionalmente
	 * al lato fisso.
	 *
	 * @access public
	 * @param int $sideFix	Lato fisso dell'immagine
	 * 
	 * @return boolean	
	 */
	
	public function resizeRatioImg($sideFix)
	{
		$type = $this->getType();
		
		$newLati = $this->getNewSize($sideFix);
		
		switch($type)
		{
			case 'JPG':
				return $this->createImgJPG($this->_source, $this->width, $this->height, $newLati['width'], $newLati['height'], self::QUALITY_IMAGE);
			break;
			
			case 'PNG':
				return $this->createImgPNG($this->_source, $this->width, $this->height, $newLati['width'], $newLati['height'], self::QUALITY_IMAGE);
			break;
			
			case 'GIF':
				return $this->createImgGIF($this->_source, $this->width, $this->height, $newLati['width'], $newLati['height'], self::QUALITY_IMAGE);
			break;
		}
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo createImgPNG()
	 * 
	 * Metodo per creare l'immagine .png 
	 * 
	 * @access private
	 * @param string $image		File immagine
	 * @param int $width	Base dell'immagine
	 * @param int $height	Altezza dell'immagine
	 * @param int $newWidth Nuova base dell'immagine
	 * @param int $newHeight Nuova altezza dell'immagine
	 * @param int $quality	Numero da 0 a 100 (100 risoluzione MAX dell'immagine)
	 * 
	 * @return boolean
	 */
	
	private function createImgPNG($image, $width, $height, $newWidth, $newHeight, $quality)
	{	
		$newImage = imagecreatetruecolor($newWidth, $newHeight);
		$imgSource = imagecreatefrompng($image);
		imagecopyresampled($newImage, $imgSource, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
		
		return imagepng($newImage, $image);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo createImgGIF()
	 * 
	 * Metodo per creare l'immagine .gif
	 * 
	 * @access private
	 * @param string $image File immagine
	 * @param int $width	Base dell'immagine
	 * @param int $height	Altezza dell'immagine
	 * @param int $newWidth		Nuova base dell'immagine
	 * @param int $newHeight	Nuova altezza dell'immagine
	 * @param int $quality		Numero da 0 a 100 (100 risoluzione MAX dell'immagine)
	 * 
	 * @return boolean
	 */
	
	private function createImgGIF($image, $width, $height, $newWidth, $newHeight, $quality)
	{	
		$newImage = imagecreatetruecolor($newWidth, $newHeight);
		$imgSource = imagecreatefromgif($image);
		imagecopyresampled($newImage, $imgSource, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
		
		return imagegif($newImage, $image);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo createImgJPG()
	 * 
	 * Metodo per creare l'immagine .jpg
	 * 
	 * @param string $image	File immagine
	 * @param int $width	Base dell'immagine
	 * @param int $height	Altezza dell'immagine
	 * @param int $newWidth		Nuova base dell'immagine
	 * @param int $newHeight	Nuova altezza dell'immagine
	 * @param int $quality		Numero da 0 a 100 (100 risoluzione MAX dell'immagine)
	 * 
	 * @return boolean
	 */
	
	private function createImgJPG($image, $width, $height, $newWidth, $newHeight, $resolution)
	{	
		$newImage = imagecreatetruecolor($newWidth, $newHeight);
		$imgSource = imagecreatefromjpeg($image);
		imagecopyresampled($newImage, $imgSource, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
		
		return imagejpeg($newImage, $image, $resolution);
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo getNewSize()
	 * 
	 * Metodo per estrarre le nuove dimensioni dell'immagine
	 * proporzionalmente.
	 * 
	 * @access private
	 * @param int $sideFix	Lato fisso
	 * 
	 * @return array 
	 */
	
	private function getNewSize($sideFix)
	{
		$ratio = $this->ratioImg();
		
		#se la base è maggiore dell'altezza
		if($this->width > $this->height)
		{
			$newHeight = round($sideFix/$ratio);
			
			$newSize = array('width' => $sideFix, 'height' => $newHeight);
			
			return $newSize;
		}
		
		#se la base è minore dell'altezza
		if($this->width < $this->height)
		{
			$newWidth = round($sideFix/$ratio);
			
			$newSize = array('width' => $newWidth, 'height' => $sideFix);
			
			return $newSize;
		}
		
		#se la base è uguale all'altezza
		if($this->width == $this->height)
		{
			$newSize = array('width' => $sideFix, 'height' => $sideFix);
			
			return $newSize;
		}
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo ratioImg()
	 * 
	 * Metodo per estrarre il rapporto tra la base e l'altezza dell'immagine
	 * 
	 * @access private
	 * 
	 * @return int
	 */
	
	private function ratioImg()
	{		
		#se la base è maggiore dell'altezza
		if ($this->width > $this->height) 
			return $ratio = $this->width/$this->height;
		
		#se la base è minore dell'altezza
		if ($this->width < $this->height)
			return $ratio = $this->height/$this->width;
		
		#se la base è uguale all'altezza
		if ($this->width == $this->height)
			return 1;
		
	}
	
//-----------------------------------------------------------------------------
	
	/**
	 * Metodo getType()
	 * 
	 * Metodo per estrarre il tipo di immagine, che ne decide l'estensione
	 *
	 * @access	private
	 * 
	 * @return	string
	 */
	
	private function getType()
	{
		$typeImage = array(1 => 'GIF', 2 => 'JPG', 3 => 'PNG', 4 => 'SWF', 
				  	   	   5 => 'PSD', 6 => 'BMP', 7 => 'TIFF(intel)', 8 => 'TIFF(motorola)', 
				           9 => 'JPC', 10 => 'JP2', 11 => 'JPX', 12 => 'JB2', 
				           13 => 'SWC', 14 => 'IFF', 15 => 'WBMP', 16 => 'XBM');			       
		
		return $typeImage[$this->_info[2]];
	}
	
//-----------------------------------------------------------------------------

	/**
	 * Metodo getInfo()
	 * 
	 * Metodo per estrarre le informazioni dell'immagine
	 * 
	 * @access	private
	 * 
	 * @return 	array
	 */
	
	private static function getInfo($image)
	{
                $data = getimagesize($image);

                return $data;
	}
}
?>
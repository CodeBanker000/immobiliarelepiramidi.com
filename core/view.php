<?php
/*
 * Class View
 * 
 * Class to load the web page 
 */

class View 
{

    function __construct() 
    {
//        echo 'This is the view!<br />';
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to load the web page with the possibility to choose if to include the
     * layout or just the single page. The layout require header, footer and body.
     *  
     * @param string $name Name of file to load or name of body
     * @param boolean $noInclude Set true to include layout.    
     */
    
    public function render($name, $noInclude = FALSE) 
    {
        if ($noInclude == true)
            require_once 'views/' . $name . '.php';
        else 
        {
            require_once PATH_VIEWS . PATH_LAYOUT . 'header.php';
            require_once PATH_VIEWS .  $name . '.php';
            require_once PATH_VIEWS . PATH_LAYOUT . 'footer.php';
        }
    }
    
//---------------------------------------------------------------------------------------
    
    /**
     * Method to load the aside.
     * 
     * @return string
     */
    
    public function renderAside()
    {
        return PATH_VIEWS . PATH_LAYOUT . 'aside.php';
    }
    
}
?>

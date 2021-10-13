<?php

/*
 * Autoloader necessary files for start the application
 */

require_once '../core/config/setup.php';
require_once '../config/config.php'; 
require_once '../config/database.php';
//require_once '../config/query.php';

// load the core of application

require_once '../'. PATH_CORE .'bootstrap.php';
require_once '../'. PATH_CORE .'controller.php';
require_once '../'. PATH_CORE .'model.php';
require_once '../'. PATH_CORE .'view.php';

require_once '../libs/php/database.php';
require_once '../libs/php/file.php';
require_once '../libs/php/image.php';
//require_once 'libs/session.php';




?>
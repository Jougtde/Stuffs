<?php
define('PUBLICROOT', dirname(__FILE__)); // Chemin vers le dossier contenant index.php (public)
define('ROOT', dirname(PUBLICROOT)); // Chemin vers le dossier parent du dossier contenant index.php
define('DS', DIRECTORY_SEPARATOR); // Raccourci vers le séparateur de dossier
define('APP', ROOT); // Chemin vers le dossier App (app)
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME']))); // URL du site

require_once('../config/databases.php');
require APP.DS.'config/core.php';

new Dispatcher();
?>

<?php
/**
 * This is where the settings  of the whole app will go
 */
// load all class

session_start();
spl_autoload_register(function ($class) {
    require_once "class/".$class.".php";
});

// Company information
define('COMPANY_NAME', 'ELearning System', true);
define('COMPANY_DESC', 'This is an E-Learning System', true);

//Database Configuration
define('DATABASE_NAME', 'elearning', true);
define('DATABASE_USERNAME', 'root', true);
define('DATABASE_PASSWORD', '', true);

//Build Mode
define('PRODUCTION_MODE', false);


//Database setup
Dbcon::$dbname = DATABASE_NAME;
Dbcon::$username = DATABASE_USERNAME;
Dbcon::$password = DATABASE_PASSWORD;

//initialize classes
$css = [
    'assets/lib/bootstrap-4.0.0/dist/css/bootstrap.min.css',
    'assets/lib/fontawesome-free-5.10.1-web/css/font-awesome.min.css'
];

// js library to be included
$js = [
    'assets/js/jquery-3.2.1.slim.js',
    'assets/lib/bootstrap-4.0.0/dist/js/bootstrap.min.js'
];

$Outline = new Layout(COMPANY_NAME, COMPANY_DESC);
$Outline->addCSS($css);
$Outline->addJS($js);
$Outline->setFavIcon('assets/images/logo.png');

if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
} else {
    $user = false;
}

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

// Load configuration
$config = require_once '../config/config.php';

// Ensure the configuration is loaded correctly
if (!$config || !isset($config['db'])) {
    die('Configuration error.');
}

use Src\Controllers\PatientController;

// Create controller with database configuration
$controller = new PatientController($config['db']);

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'create':
            $controller->create();
            break;
        case 'store':
            $controller->store($_POST);
            break;
        case 'edit':
            $controller->edit($_GET['id']);
            break;
        case 'update':
            $controller->update($_POST);
            break;
        case 'delete':
            $controller->delete($_GET['id']);
            break;
        default:
            $controller->index();
            break;
    }
} else {
    $controller->index();
}

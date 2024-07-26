<?php
require_once '../vendor/autoload.php';
require_once '../config/config.php';

use Src\Controllers\PatientController;

$config = require_once '../config/config.php';
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

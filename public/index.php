<?php
require_once '../vendor/autoload.php';
require_once '../config/config.php';

use App\Controller\TaskController;

$taskController = new TaskController();
$taskController->index();
?>

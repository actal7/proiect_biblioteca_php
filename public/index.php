<?php
require_once 'config/config.php'; // Adjust the path as needed
require_once 'src/core/Router.php';
require_once 'src/core/Controller.php';
require_once 'src/core/Database.php';
require_once 'src/core/Model.php';

// Initialize Database Connection
$db = (new Database())->getConnection();

// Simple Routing (Expand as per requirement)
$router = new Router();
$router->routeRequest();

echo "Hello, this is the index.php file!";

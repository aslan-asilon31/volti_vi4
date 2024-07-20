<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Include other route files
require APPPATH . 'Config/Routes/AccountingRoutes.php';
require APPPATH . 'Config/Routes/HumanresourceRoutes.php';
require APPPATH . 'Config/Routes/ManufacturingRoutes.php';
require APPPATH . 'Config/Routes/MarketingRoutes.php';
require APPPATH . 'Config/Routes/SalesRoutes.php';
require APPPATH . 'Config/Routes/ServicesRoutes.php';
require APPPATH . 'Config/Routes/InventoryRoutes.php';

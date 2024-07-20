<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('humanresource', function ($routes) {
    $routes->get('product-list', 'Product::index');
});

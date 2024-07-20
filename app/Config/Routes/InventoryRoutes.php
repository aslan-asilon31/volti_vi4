<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('inventory', function ($routes) {
    $routes->get('product-list', 'Product_inventory::index');
    $routes->get('product-combo-list', 'Product_inventory::index');
    $routes->get('product-price-list', 'Product_inventory::index');
    $routes->get('supplier-list', 'Product_inventory::index');
    $routes->get('purchase-list', 'Purchase_inventory::index');
    $routes->get('ingredient-recipe-list', 'Ingredient_inventory::index');
    $routes->get('menu-book-list','Ingredient_inventory::index');
    $routes->get('category-list','Online_vehicle_inventory::index');
    $routes->get('service-product-list','Online_vehicle_inventory::index');
    $routes->get('extra-product-list','Online_vehicle_inventory::index');
    $routes->get('product-bundling-list','Online_vehicle_inventory::index');
    $routes->get('deposit-list','Online_vehicle_inventory::index');
    $routes->get('online-vehicle-list','Online_vehicle_inventory::index');
    $routes->get('print-barcode-list','Print_barcode_inventory::index');
});

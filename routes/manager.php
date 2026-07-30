<?php 

$routes->group('manager', ['namespace' => 'App\Controllers\Manager'], function ($routes) {

    $routes->get('/', 'ManagerController::index', ['as' => 'manager']);

    $routes->group('categories', function ($routes) {

        $routes->get('/', 'CategoriesController::index', ['as' => 'categories']);
        
    });
    
});
<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News;
use App\Controllers\Authuser;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', [Authuser::class, 'index']);
$routes->post('login', [Authuser::class, 'authenticate']);

// $routes->get('register', [Authuser::class, 'vregister']);
// $routes->post('register', [Authuser::class, 'register']);

$routes->get('register', 'FormController::index');
$routes->match(['get', 'post'], 'FormController/store', 'FormController::store');

$routes->get('news', [News::class, 'index']);           // Add this line
$routes->post('news/article', [News::class, 'article']);
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line

$routes->get('pages', [Pages::class, 'index']); 
$routes->get('(:segment)', [Pages::class, 'view']);
<?php
namespace App\Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('TaskController');
$routes->setDefaultMethod('welcome');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'TaskController::welcome');
$routes->get('tasks', 'TaskController::index');
$routes->get('profile', 'TaskController::profile');
$routes->get('about', 'TaskController::about');
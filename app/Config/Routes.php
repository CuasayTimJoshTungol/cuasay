<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/home', 'Home::homepage');
$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);


$routes->get('/viewtable', 'Home::table');
$routes->get('/viewchair', 'Home::chair');
$routes->get('/viewsofa', 'Home::sofa');
$routes->get('/viewbed', 'Home::bed');
$routes->get('/viewwardrobe', 'Home::wardrobe');
$routes->get('/viewcabinet', 'Home::cabinet');
$routes->get('/viewstool', 'Home::stool');
$routes->get('/viewofficechair', 'Home::officechair');

$routes->get('/adminindex', 'Home::adminindex');

$routes->match(['get','post'], 'saveProduct', 'Home::saveProduct');
$routes->post('editProduct', 'Home::editProduct');
$routes->post('deletethistoo', 'Home::deletethistoo');
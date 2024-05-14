<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/post', 'Post::index');
$routes->get('/post/create', 'Post::create');
$routes->post('/post/store', 'Post::store');
$routes->get('/post/edit/(:num)', 'post::edit/$1');
$routes->post('/post/update/(:num)', 'Post::update/$1');
$routes->get('/post/delete/(:num)', 'Post::delete/$1');

// $routes->delete('post/{id}', 'Post::destroy');

// Authentication routes
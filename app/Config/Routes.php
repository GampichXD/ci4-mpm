<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Post::index');
$routes->get('post/create', 'Post::create');
$routes->post('post/store', 'Post::store');

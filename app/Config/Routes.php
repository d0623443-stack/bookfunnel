<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// IT Services Single Landing Page
$routes->get('/', 'Home::index');
$routes->post('submit', 'Home::submit');

// IT Consultation Inquiries Management
$routes->get('inquiries', 'Inquiries::index');

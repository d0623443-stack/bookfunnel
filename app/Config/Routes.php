<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// IT Services Single Landing Page & Submission
$routes->get('/', 'Home::index');
$routes->post('submit', 'Home::submit');
$routes->get('thankyou', 'Home::thankyou');

// IT Consultation Inquiries Management
$routes->get('inquiries', 'Inquiries::index');

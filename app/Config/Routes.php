<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 1. Home Page
$routes->get('/', 'Home::index');

// 2. Destinations Page & Destination Details
$routes->get('destinations', 'Destinations::index');
$routes->get('destinations/(:segment)', 'Destinations::detail/$1');

// 3. Tour Packages Page & Package Details
$routes->get('packages', 'Packages::index');
$routes->get('packages/(:segment)', 'Packages::detail/$1');

// 4. About Us Page
$routes->get('about', 'About::index');

// 5. Contact & Booking Page + Form Submission Handling
$routes->get('contact', 'Contact::index');
$routes->post('contact/submit', 'Contact::submit');
$routes->get('contact/confirmation', 'Contact::confirmation');

// Inquiries / Bookings Management List
$routes->get('inquiries', 'Inquiries::index');

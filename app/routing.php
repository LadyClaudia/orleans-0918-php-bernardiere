<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Home' => [ // Controller
        ['showHome', '/', 'GET'], // action, url, method
    ],
    'Admin' => [ // Controller
        ['adminIndex', '/Admin', 'GET'], // action, url, method
        ['add', '/Admin/add', ['GET', 'POST']], // action, url, method

    ],
    'Contact' => [ // Controller
        ['showContact', '/contact', 'GET'],  // action, url, method
    ],
    'Product' => [
        ['show', '/ourproducts','GET'],
    ],
    'Concept' => [ // Controller
        ['showConcept', '/concept', 'GET'], // action, url, method
    ],
];

<?php
$routes = [
    'tg-admin' => 'trongate_administrators/login',
    'tg-admin/submit_login' => 'trongate_administrators/submit_login',

    //'laptops' => 'products/browse',
    //'laptops/(:num)' => 'products/browse/$1'
    'laptops/(:any)' => 'products/browse/$1',

    // FRUITS MODULE
    'fruits/manage' => 'fruits/manage',
    'fruits' => 'fruits/index',
    'fruits/(:any)' => 'fruits/fruit/$1',

	// ENTRIES MODULE
	'entry/(:any)' => 'entries/entry/$1',
    'clean' => 'documentation-clean/index',

	// WEATHER MODULE
	'weather' => 'weather/city',

	// BASESTATS MODULE
	'basestats' => 'basestats/index',

	// GALLERY MODULE
    'gallery' => 'gallery/gallery',
];
define('CUSTOM_ROUTES', $routes);

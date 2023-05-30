<?php 

namespace Modules\Todos\Config;

if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

// namespace
$routes->setDefaultNamespace('Modules\Todos\Controllers');

// dashboard
$routes->get('/', 'HomeController::index');

$routes->group('todos', function($routes)
{
	$routes->get('/', 'TodosController::index');
});
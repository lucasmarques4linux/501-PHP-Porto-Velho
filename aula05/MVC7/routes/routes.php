<?php 


$routes = [];

$routes['home'] = 'App\Controller\HomeController@index';
$routes['home/index'] = 'App\Controller\HomeController@index';

$routes['users'] = 'App\Controller\UsersController@index';
$routes['users/index'] = 'App\Controller\UsersController@index';
$routes['users/new'] = 'App\Controller\UsersController@new';
$routes['users/create'] = 'App\Controller\UsersController@create';
$routes['users/edit/{id}'] = 'App\Controller\UsersController@edit';
$routes['users/update/{id}'] = 'App\Controller\UsersController@update';
$routes['users/delete/{id}'] = 'App\Controller\UsersController@delete';


return $routes;
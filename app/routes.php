<?php

$router->get('', 'HomeController@index');
$router->get('about', 'AboutController@index');
$router->get('contact', 'ContactController@index');
$router->get('user', 'UsersController@index');

$router->post('user', 'UsersController@store');

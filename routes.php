<?php

$router->get('', 'IndexController@index');

$router->get('users', 'UsersController@index');

$router->get('users/add', 'UsersController@add');

$router->post('users/addhandler', 'UsersController@addhandler');





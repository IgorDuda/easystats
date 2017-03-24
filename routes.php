<?php

$router->get('', 'IndexController@index');

$router->get('users/list', 'IndexController@home');

$router->get('about', 'controllers/about.php');

$router->get('contact', 'controllers/contact.php');

$router->get('about/culture', 'controllers/about-culture.php');




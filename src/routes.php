<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/Login', 'LoginController@signin');
$router->post('/Login', 'LoginController@signinAction');
$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');
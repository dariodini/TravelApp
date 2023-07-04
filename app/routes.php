<?php

$router->get('', 'PagesController@homepage');
$router->get('country', 'CountryController@homepage');
$router->post('country', 'CountryController@handleRequest');
$router->get('trip', 'TripController@homepage');
$router->post('trip', 'TripController@handleRequest');

<?php

$router->get('', 'PagesController@homepage');
$router->get('country', 'CountryController@homepage');
$router->post('country', 'CountryController@create');
$router->get('trip', 'TripController@homepage');
$router->post('trip', 'TripController@create');

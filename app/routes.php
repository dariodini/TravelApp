<?php

$router->get('', 'PagesController@homepage');

$router->get('country', 'CountryController@homepage');
$router->post('country', 'CountryController@handleRequest');

$router->get('trip', 'TripController@homepage');
$router->post('trip', 'TripController@handleRequest');

$router->get('api/countries', 'ApiCountryController@getAllCountries');
$router->post('api/countries', 'ApiCountryController@addNewCountry');
$router->put('api/countries', 'ApiCountryController@updateCountry');
$router->delete("api/countries", 'ApiCountryController@deleteCountry');

<?php

//url path starting from localhost
$request = $_SERVER['REQUEST_URI'];

//base url path of the application
$BASE_URL = '/FiiPractic_3/extra-simple-routing'; 

/**
 * We have to remove the base url path to make sure
 * that we have a path relative to the current application
 * 
 * We do this because our application ("extra simple routing") 
 * is notlocated in the root of our folder/url in our Apache server
 */
$path = str_replace($BASE_URL,'', $request);

/**
 * We can share variables across the loaded views
 * $share is just an example, you can share
 * any tyep of variable
 */
$share = 'Shared code';

var_dump($path);

/**
 * This is where the routing happens.
 * We check if the path provided by our URL
 * matches any defined routes and we load
 * any view that is associated with the route
 */
switch ($path) {
    case '/' :
        require __DIR__ . '/views/main.php';
        break;
    case '' :
        require __DIR__ . '/views/main.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
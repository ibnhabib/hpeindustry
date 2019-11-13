<?php
$routes = [
    '/'                 =>      '/views/home.view.php',
    '/products/{product}'   =>  '/views/product.view.php',
];

//intialize
$project_root_folder = $_SERVER['DOCUMENT_ROOT'];

// Get URL from server
$url = $_SERVER['REQUEST_URI'];

// Trim Trailing slash
$url = '/' . trim($url, '/');

// Handle basic case where url is exactly the same as in routes
// (and make sure the url itself doesn't contain brackets {} so it doesn't match with wildcard keys)

if (array_key_exists($url, $routes) && !strpos($url,'{')) {
    require($project_root_folder . '/' . $routes[$url]);
    return;
}

// Handle match with wildcard items;
// '/products/{products}' should match with 'products/festo'

foreach ($routes as $route => $destination) {
    if (strpos($route,'{') && strpos($route,'}')) {
        if (match_route_with_url($route, $url)) {
            echo "you'll be directed to page $destination";
            die;
        }
    }
}


echo "sorry, page doesn't exist";

// This function will match a wildcard route like '/products/{product}' 
// with urls like '/products/festo' and return festo or false if no match

function match_route_with_url($route, $url) {
	
	// first, turn route '/products/{product}' into a pattern: '\/products/(\w+)';
	$pattern = preg_replace("/\/(\w+)\/{(\w+)}/", '\\/$1\\/(\w+)', $route);
	
	// Then, see if it matches $url;
	preg_match("/$pattern/", $url, $matches);
	
	if (count($matches) > 0){
		return end($matches);
	}
	return false;
	
}
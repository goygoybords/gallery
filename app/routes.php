<?php 
	

	$router->get('', 'PagesController@index');
	$router->post('store', 'GalleryController@store');
	$router->post('more', 'GalleryController@more');
	$router->get('about', 'PagesController@about');
	//$router->get('contact' , 'PagesController@contact');

	
	// $router->post('names' , 'controllers/add-name.php');
?>	
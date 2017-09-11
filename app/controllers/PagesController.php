<?php 

namespace App\Controllers;
use App\Core\App;

	class PagesController
	{
		public function index()
		{
			$title = "Gallery";
			$images = App::get('database')->selectAll('images');
			return view('home', ['images' => $images ,'title' => $title]);

		}
		public function about()
		{
			$title = "About Us";
			$company = "laracast";
			return view('about' , ['title' => $title ,'company' => $company]);
		}
		public function contact()
		{
			$title = "Contact Us";
			return view('contact', ['title' => $title] );
			
		}
	}

?>
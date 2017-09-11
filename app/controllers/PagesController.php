<?php 

namespace App\Controllers;

	class PagesController
	{
		public function index()
		{
			$title = "Gallery";
			return view('home', ['title' => $title]);
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
<?php 

namespace App\Controllers;

use App\Core\App;
	
	class GalleryController
	{
		public function store()
		{
		    if(isset($_FILES['fileToUpload']))
		    {
		    	$errors= array();
		      	$file_name = $_FILES['fileToUpload']['name'];
		      	$file_size =$_FILES['fileToUpload']['size'];
		      	$file_tmp  =$_FILES['fileToUpload']['tmp_name'];
		      	$file_type =$_FILES['fileToUpload']['type'];
		      	$file_ext = strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
		     
			    $image_info = getimagesize($file_tmp);
				$image_width = $image_info[0];
				$image_height = $image_info[1];


		      	$expensions= array("jpeg","jpg","png");
		      
		      if(in_array($file_ext,$expensions)=== false)
		      {
		         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		      }
		      
		      if($file_size > 2097152)
		      {
		         $errors[]='File size must be excately 2 MB';
		      }
		      
		      if(empty($errors)==true)
		      {
		         if(move_uploaded_file($file_tmp,"public/uploads/".$file_name))
		         {
		         	$data = 
		         	['filename'  => $file_name , 
		         	 'filetype'  => $file_type , 
		         	 'filesize'  => $file_size , 
		         	 'width'     => $image_width,
		         	 'height'    => $image_height,
		         	 ];
		         	
		         	App::get('database')->insert('images', $data );
		         	redirect('?upload=1');
		         }
		      }
		      else
		      {
		         print_r($errors);
		      }
		   }
		}
		public function more()
		{
			return $images = App::get('database')->selectAll('images');
		}
	} 

?>
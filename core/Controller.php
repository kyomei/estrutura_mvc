<?php
class Controller 
{
	public function view($viewName)
	{
		if (file_exists('views/'.$viewName.'.php')) {
			require 'views/'.$viewName.'.php';
		} else {
			require 'views/errors/error_404.php';
		}
	}
}

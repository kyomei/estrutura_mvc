<?php
class HomeController extends Controller
{
	public function index()
	{
		$this->view('home2');
	}

	public function teste($id)
	{
		echo "Este é um teste ".$id;
	}
}
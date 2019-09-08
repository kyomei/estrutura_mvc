<?php
class HomeController extends Controller
{
	public function index()
	{
		$data['nome'] = 'Rafael';
		$this->view('home', $data);
	}

	public function teste($id)
	{
		echo "Este é um teste ".$id;
	}
}
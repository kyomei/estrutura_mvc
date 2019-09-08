<?php
class HomeController extends Controller
{
	public function index()
	{
		$data['nome'] = 'Rafael';
		$this->template('home', $data);
	}

	public function teste($id)
	{
		echo "Este é um teste ".$id;
	}
}
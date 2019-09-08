<?php
class HomeController extends Controller
{
	public function index()
	{

		$usuarios = new Usuarios();

		$data['quantidade'] = $usuarios->getQuantidade();
		$data['usuarios'] = $usuarios->getUsuarios();
		$this->template('home', $data);
	}

	public function teste($id)
	{
		echo "Este é um teste ".$id;
	}
}
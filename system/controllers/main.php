<?php
class main extends Controller {
	public function index() {
        $this->loadView('masterPage', array());
	}

	public function salvarNovoUsuario() {
		//Salvando novo usuário
		$usuario = new Usuarios();
		$usuario->nome = $_POST['nome'];
		$usuario->sobrenome = $_POST['sobrenome'];
		$usuario->login = $_POST['login'];
		$usuario->password = md5($_POST['password']);
		$usuario->nascimento = $_POST['nascimento'];
		$usuario->genero = $_POST['genero'];

		//Executando a automágica ;)
		$usuario->save();
	}
}
?>
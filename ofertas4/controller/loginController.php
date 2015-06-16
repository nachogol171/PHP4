<?php

Class loginController Extends baseController 
{
	public function index() 
	{
		$this->registry->template->show('login_index');
	}

	public function login()
	{
		if(!isset($_POST['email'],$_POST['pass']))
		{
			$this->registry->template->show('login_index');
		}
		else
		{
			$consulta = "SELECT * FROM usuario WHERE nick=?;";
			$parametros = array($_POST['email']);
			$usu = $this->registry->db->rawQuery($consulta,$parametros);
			//$this->registry->template->logincount = $usu[0]['password'];
			if(count($usu) == 0) // si el usuario no existe
			{
				$this->registry->template->login_ok = false;
				$this->registry->template->show('views/login_index');
			}
			
			else if($usu[0]['password'] != $_POST['pass']) // si la contraseña no coincide
			{
				$this->registry->template->login_ok = false;
				$this->registry->template->show('views/login_index');
			}
			else // login correcto, vamos a ver que tipo de usuario es!
			{
				$consulta = "SELECT * FROM usuario WHERE email='admin@admin';";
				$parametros = array($_POST['email']);
				$per = $this->registry->db->rawQuery($consulta,$parametros);

				if(count($per) == 1) // si es administrador
				{
					$_SESSION['login'] = 'admin';
					$_SESSION['persona'] = $usu[0];
					$this->registry->template->show('views/backend');
				}
				else // si es usuario comun
				{
					$_SESSION['persona'] = $per[0];
					$_SESSION['login'] = 'usuario';
				}
				$this->registry->template->pagina = "ofertas4/views/backend";
				$this->registry->template->show('redireccion');
			}
		}
	}

	public function logout()
	{
		session_destroy();
		$this->registry->template->pagina = "/tecnicoya/index";
		$this->registry->template->show('redireccion');
	}
}

?>
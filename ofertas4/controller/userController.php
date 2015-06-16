<?php

Class userController Extends baseController {

	public function index() {
		/*** set a template variable ***/
	        $this->registry->template->welcome = 'User controller index';
		/*** load the index template ***/
	        $this->registry->template->show('user/index');
	}

	public function all(){
		$model = new UserModel($this->registry);
                
		$usuarios = $model->getUsuarios();
		
		$this->registry->template->usuarios = $usuarios;
		$this->registry->template->show('user/all');

	}

	public function save(){
		$model = new UserModel($this->registry);
        
        unset($_POST['enviar']);
        unset($_POST['id']);

		$insertOk = $model->save($_POST);

		if ($insertOk){

			$usuarios = $model->getUsuarios();
			
			$this->registry->template->usuarios = $usuarios;
			$this->registry->template->show('user/all');

		}else{
			$this->registry->error = 'No se pudo guardar';
			$this->registry->template->show('error404');
		}

	}

	public function update($id){
		$user = new UserModel($this->registry, $id);
		
		$this->registry->template->user = $user;
		$this->registry->template->show('user/update');

	}

	public function delete(){
		$model = new UserModel($this->registry);
                
		$usuarios = $model->getUsuarios();
		
		$this->registry->template->usuarios = $usuarios;
		$this->registry->template->show('user/all');

	}


}

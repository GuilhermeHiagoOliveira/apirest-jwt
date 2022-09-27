<?php
	namespace Gui\Http\Controllers;

	class UsersController {
		public function getall()
		{
			if (AuthController::checkAuth()) {
				return array(1 => 'Guilherme', 2 => 'Bruna', 3 => 'Marcelo');
			}
			
			throw new \Exception('Não autenticado');
		}
	}
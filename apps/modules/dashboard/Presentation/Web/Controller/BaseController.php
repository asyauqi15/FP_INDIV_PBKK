<?php

namespace Uqi\Dashboard\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;

class BaseController extends Controller
{
	public function authorized()
	{
		if(!$this->isLoggedIn()) {
			return $this->response->redirect('login');
		}
	}

	public function hasLoggedIn()
	{
 		if($this->isLoggedIn()) {
			return $this->response->redirect('dashboard');
		}
	}

	public function isAdmin()
	{
		
	}

	private function isLoggedIn()
	{
		if($this->session->has('akun')) {
			return true;
		}

		return false;
	}
}
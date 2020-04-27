<?php

namespace Uqi\Dashboard\Presentation\Web\Controller;

use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunRequest;
use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunService;
use Uqi\Dashboard\Core\Application\Service\LoginAkun\LoginAkunRequest;
use Uqi\Dashboard\Core\Application\Service\LoginAkun\LoginAkunService;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;
use Phalcon\Security;

/**
 * @property Request $request
 * @property Security $security
 */
class AkunController extends BaseController
{
	/**
	 * @var LoginAkunService
	 */
	protected $loginAkunService;

	/**
	 * @var AddUserService
	 */
	protected $addAkunService;

	public function initialize()
	{
		$this->loginAkunService = $this->getDI()->get('loginAkunService');
		$this->addAkunService = $this->getDI()->get('addAkunService');
	}

	public function indexAction()
	{
		var_dump($this->session);

	}

	public function registerAction()
	{
		// $this->response->redirect('login');
		$this->view->pick('akun/register');
	}

	public function registerSubmitAction()
	{
		// Check request
		if(!$this->request->isPost()) {
			return $this->response->redirect('register');
		}

		// https://docs.phalcon.io/4.0/en/security
		// Validate CSRF Token
		// if(!$this->security->checkToken()) {
		// 	$this->flashSession->error("Invalid Token");
		// 	return $this->response->redirect('register');
		// }

		// Handle request
		$username = $this->request->getPost('username');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$jenis_akun = $this->request->getPost('jenis_akun');

		if($username == '' || $email == '' || $password == '') {
			$this->flashSession->error("Please fulfill with a valid form");
			return $this->response->redirect('register');
		}

		// Add new User
		$request = new AddAkunRequest($username, $email, $password, $jenis_akun);
		try {
			$this->addAkunService->execute($request);
			$this->flashSession->success('Thanks for registering!');
			return $this->response->redirect('login');
		} catch (\Exception $e) {
			$this->flashSession->error('Username / Email telah digunakan');
			return $this->response->redirect('register');
		}
	}

	public function loginAction()
	{
		$this->hasLoggedIn();

		$this->view->pick('akun/login');
	}

	public function loginSubmitAction()
	{
		// Check request
		if(!$this->request->isPost()) {
			return $this->response->redirect('login');
		}

		// https://docs.phalcon.io/4.0/en/security
		// Validate CSRF Token
		// if(!$this->security->checkToken()) {
		// 	$this->flashSession->error("Invalid Token");
		// 	return $this->response->redirect('login');
		// }

		// Handle request
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$request = new LoginAkunRequest($username, $password);
		try {
			$response = $this->loginAkunService->execute($request);
			$akun = $response->getData();

			$this->session->set('akun', array(
				'id_akun' => $akun->getIdAkun(),
				'username' => $akun->getUsername(),
				'email' => $akun->getEmail()
			));

			$this->response->redirect('dashboard');
			// $this->dispatcher->forward([
			// 	'controller' => 'user',
			// 	'action'     => 'index',
			// ]);
			$this->view->disable();
		} catch (\Exception $e) {
			// $this->flashSession->error("Invalid Username / Password");
			$this->flashSession->error($e);
			return $this->response->redirect('login');
		}
	}

	public function logoutAction()
	{
		// https://docs.phalcon.io/4.0/en/security
		// Validate CSRF Token
		if(true || $this->security->checkToken()) {
			$this->session->destroy();
		} else {
			$this->flashSession->error("Logout Gagal");
		}

		$this->response->redirect('/');
	}
}
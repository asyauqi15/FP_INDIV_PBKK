<?php

namespace Uqi\Dashboard\Presentation\Web\Controller;

use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunRequest;
use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunService;
use Uqi\Dashboard\Core\Application\Service\LoginAkun\LoginAkunRequest;
use Uqi\Dashboard\Core\Application\Service\LoginAkun\LoginAkunService;
use Uqi\Dashboard\Core\Application\Service\FindAkun\FindAkunRequest;
use Uqi\Dashboard\Core\Application\Service\FindAkun\FindAkunService;
use Uqi\Dashboard\Core\Application\Service\EditAkun\EditAkunService;
use Uqi\Dashboard\Core\Domain\Model\Akun;
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

	/**
	 * @var FindAkunService
	 */
	protected $findAkunService;

	public function initialize()
	{
		$this->loginAkunService = $this->getDI()->get('loginAkunService');
		$this->addAkunService = $this->getDI()->get('addAkunService');
		$this->findAkunService = $this->getDI()->get('findAkunService');
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
				'email' => $akun->getEmail(),
				'jenis_akun' => $akun->getJenisAkun(),
				'id_rumah_sakit' => $akun->getIdRumahSakitAkun()
			));

			$this->response->redirect('/');
			$this->view->disable();
		} catch (\Exception $e) {
			$this->flashSession->error("Invalid Username / Password");
			// $this->flashSession->error($e);
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

	public function editProfilAction(){

		if($this->session->akun!=NULL){
			// find akun
			$request = new FindAkunRequest($this->session->akun['id_akun']);
			try {
				$akun = $this->findAkunService->execute($request);
			} catch (\Exception $e) {
				var_dump($e);
			}
			$this->view->setVar('akun', $akun);

			// load view
            if($this->session->akun['jenis_akun']==2){
                $this->view->pick('admin/editprofil');
            }
            elseif($this->session->akun['jenis_akun']==1){
                $this->view->pick('adminrumahsakit/editprofil');
            }
            else{
                $this->view->pick('user/editprofil');
            }
        }
        else{
            $this->view->pick('dashboard');
        }
	}

	public function editProfilSubmitAction(){
		// Check request
		if(!$this->request->isPost()) {
			return $this->response->redirect('/editprofil');
		}

		// Handle Request
		$username = $this->request->getPost('username');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$jenis_akun = $this->request->getPost('jenis_akun');
		$id_rumah_sakit = $this->request->getPost('id_rumah_sakit');
		$id_akun = $this->request->getPost('id_akun');
		$id_villages = $this->request->getPost('id_villages');
		$id_pasien = $this->request->getPost('id_pasien');
		$jenis_identitas = $this->request->getPost('jenis_identitas');
		$nomor_identitas = $this->request->getPost('nomor_identitas');
		$nama_lengkap = $this->request->getPost('nama_lengkap');
		$alamat_lengkap = $this->request->getPost('alamat_lengkap');
		$jenis_kelamin = $this->request->getPost('jenis_kelamin');

		$akun = new Akun(
			$username,
			$email,
			$password,
			$jenis_akun,
			$id_rumah_sakit,
			$id_akun,
			$id_villages,
			$id_pasien,
			$jenis_identitas,
			$nomor_identitas,
			$nama_lengkap,
			$alamat_lengkap,
			$jenis_kelamin
		);

		try {
			$response = $this->editAkunService->execute($akun);
			$this->flashSession->success("Data Berhasil di Ubah");
			$this->response->redirect('/editprofil');
		} catch (\Exception $e) {
			$this->flashSession->error("Data Gagal di Ubah");
			return $this->response->redirect('editprofil');
			// var_dump($e);
		}

		if($this->session->akun!=NULL){
            if($this->session->akun['jenis_akun']==2){
                $this->view->pick('admin/editprofil');
            }
            elseif($this->session->akun['jenis_akun']==1){
                $this->view->pick('adminrumahsakit/editprofil');
            }
            else{
                $this->view->pick('user/editprofil');
            }
        }
        else{
            $this->view->pick('dashboard');
        }
	}
}
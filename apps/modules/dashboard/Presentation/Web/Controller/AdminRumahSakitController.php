<?php

namespace Uqi\Dashboard\Presentation\Web\Controller;

use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunRequest;
use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunService;
use Uqi\Dashboard\Core\Application\Service\GetAllAkun\GetAllAkunService;
use Uqi\Dashboard\Core\Application\Service\FindAkun\FindAkunService;
use Uqi\Dashboard\Core\Application\Service\FindRumahSakit\FindRumahSakitService;
use Uqi\Dashboard\Core\Application\Service\BukaTutupAntreanRumahSakit\BukaTutupAntreanRumahSakitService;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;
use Phalcon\Security;

class AdminRumahSakitController extends BaseController
{
    /**
	 * @var AddUserService
	 */
    protected $addAkunService;

	/**
	 * @var AddRumahSakitService
	 */
    protected $getAllAkunService;
    
    /**
	 * @var FindAkunService
	 */
    protected $findAkunService;
    
    /**
	 * @var FindRumahSakitService
	 */
    protected $findRumahSakitService;
    
    /**
	 * @var BukaTutupAntreanRumahSakitService
	 */
	protected $bukaTutupAntreanRumahSakitService;

	public function initialize()
	{
        $this->addAkunService = $this->getDI()->get('addAkunService');
        $this->getAllAkunService = $this->getDI()->get('getAllAkunService'); 
        $this->findAkunService = $this->getDI()->get('findAkunService'); 
        $this->findRumahSakitService = $this->getDI()->get('findRumahSakitService');
        $this->bukaTutupAntreanRumahSakitService = $this->getDI()->get('bukaTutupAntreanRumahSakitService');
    }
    
    public function bukaTutupAntreanSubmitAction()
    {
        // Check request
		if(!$this->request->isPost()) {
			return $this->response->redirect('/');
        }

        $status_baru = $this->request->getPost('status_baru');
        $id_rumah_sakit = $this->session->akun['id_rumah_sakit'];

		try {
			$this->bukaTutupAntreanRumahSakitService->execute($id_rumah_sakit, $status_baru);
			$this->flashSession->success('Status Antrean Berhasil Diubah');
			return $this->response->redirect('/');
		} catch (\Exception $e) {
			return $this->response->redirect('/');
		}
    }

    public function adminRumahSakitListAction()
    {
        try {
			$akun = $this->getAllAkunService->execute();
		} catch(\Exception $e) {
			throw $e->getMessage();
		}
        $this->view->setVar('akun', $akun);
        
        $this->view->pick('adminrumahsakit/adminrumahsakitlist');
    }

    public function registerAdminRumahSakitAction()
    {
        $this->view->pick('adminrumahsakit/addadminrumahsakit');
	}
	
	public function registerAdminRumahSakitSubmitAction()
	{
		// Check request
		if(!$this->request->isPost()) {
			return $this->response->redirect('adminrumahsakitadd');
        }
        
		// Handle request
		$username = $this->request->getPost('username');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$id_rumah_sakit = $this->request->getPost('rumah_sakit');
		$jenis_akun = $this->request->getPost('jenis_akun');

		if($username == '' || $email == '' || $password == '' || $id_rumah_sakit=='') {
			$this->flashSession->error("Please fulfill with a valid form");
			return $this->response->redirect('adminrumahsakitadd');
		}

		// Add new Akun
		$request = new AddAkunRequest($username, $email, $password, $jenis_akun, $id_rumah_sakit);
		try {
			$this->addAkunService->execute($request);
			$this->flashSession->success('Admin baru telah ditambahkan!');
			return $this->response->redirect('listadminrumahsakit');
		} catch (\Exception $e) {
			$this->flashSession->error('Username / Email telah digunakan');
			return $this->response->redirect('adminrumahsakitadd');
		}
	}
    
    public function pasienListAction()
    {
        $this->view->pick('adminrumahsakit/pasienlist');
    }

    public function antreanListAction()
    {
        $this->view->pick('adminrumahsakit/antreanlist');
    }

    public function profilRumahSakitAction()
    {
        $this->view->pick('adminrumahsakit/profilrumahsakit');
    }
}
<?php

namespace Uqi\Dashboard\Presentation\Web\Controller;

use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunRequest;
use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunService;
use Uqi\Dashboard\Core\Application\Service\AddRumahSakit\AddRumahSakitRequest;
use Uqi\Dashboard\Core\Application\Service\AddRumahSakit\AddRumahSakitService;
use Uqi\Dashboard\Core\Application\Service\GetAllRumahSakit\GetAllRumahSakitService;
use Uqi\Dashboard\Core\Application\Service\GetAllAkun\GetAllAkunService;
use Uqi\Dashboard\Core\Application\Service\FindAkun\FindAkunService;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;
use Phalcon\Security;

/**
 * @property Request $request
 * @property Security $security
 */
class AdminController extends BaseController
{
	/**
	 * @var AddUserService
	 */
    protected $addAkunService;
    
    /**
	 * @var AddRumahSakitService
	 */
	protected $addRumahSakitService;

	/**
	 * @var AddRumahSakitService
	 */
	protected $getAllRumahSakitService;

	/**
	 * @var AddRumahSakitService
	 */
	protected $getAllAkunService;

	public function initialize()
	{
        $this->addAkunService = $this->getDI()->get('addAkunService');
        $this->addRumahSakitService = $this->getDI()->get('addRumahSakitService'); 
        $this->getAllRumahSakitService = $this->getDI()->get('getAllRumahSakitService'); 
        $this->getAllAkunService = $this->getDI()->get('getAllAkunService'); 
	}

	public function indexAction()
	{
		var_dump($this->session);
	}

	public function adminListAction()
	{
		try {
			$akun = $this->getAllAkunService->execute();
		} catch(\Exception $e) {
			throw $e->getMessage();
		}
		$this->view->setVar('akun', $akun);

		$this->view->pick('admin/adminlist');
	}

	public function registerAdminAction()
	{
		$this->view->pick('admin/addadmin');
	}

	public function registerAdminSubmitAction()
	{
		// Check request
		if(!$this->request->isPost()) {
			return $this->response->redirect('addadmin');
        }
        
		// Handle request
		$username = $this->request->getPost('username');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$jenis_akun = $this->request->getPost('jenis_akun');

		if($username == '' || $email == '' || $password == '') {
			$this->flashSession->error("Please fulfill with a valid form");
			return $this->response->redirect('addadmin');
		}

		// Add new Akun
		$request = new AddAkunRequest($username, $email, $password, $jenis_akun);
		try {
			$this->addAkunService->execute($request);
			$this->flashSession->success('Admin baru telah ditambahkan!');
			return $this->response->redirect('adminlist');
		} catch (\Exception $e) {
			$this->flashSession->error('Username / Email telah digunakan');
			return $this->response->redirect('addadmin');
		}
	}
	
	public function rumahSakitListAction(){
		try {
			$rumah_sakit = $this->getAllRumahSakitService->execute();
		} catch(\Exception $e) {
			throw $e->getMessage();
		}
		$this->view->setVar('rumah_sakit', $rumah_sakit);
		$this->view->pick('admin/rumahsakitlist');
	}

	public function tesAction(){
		try {
			$rumah_sakit = $this->getAllRumahSakitService->execute();
		} catch(\Exception $e) {
			throw $e->getMessage();
		}
		var_dump($rumah_sakit);
	}
    
    public function registerRumahSakitAction()
    {
        $this->view->pick('admin/addrumahsakit');    
    }

    public function registerRumahSakitSubmitAction()
    {
        // Check request
		if(!$this->request->isPost()) {
			return $this->response->redirect('addrumahsakit');
        }
        
		// Handle request
		$nama_rumah_sakit = $this->request->getPost('nama_rumah_sakit');
		$alamat_rumah_sakit = $this->request->getPost('alamat_rumah_sakit');

		if($nama_rumah_sakit == '' || $alamat_rumah_sakit == '') {
			$this->flashSession->error("Please fulfill with a valid form");
			return $this->response->redirect('addrumahsakit');
		}

		// Add new Rumah Sakit
        $request = new AddRumahSakitRequest($nama_rumah_sakit, $alamat_rumah_sakit);
        
		try {
			$this->addRumahSakitService->execute($request);
			$this->flashSession->success('Rumah sakit baru telah ditambahkan!');
			return $this->response->redirect('rumahsakitlist');
		} catch (\Exception $e) {
			$this->flashSession->error('Nama rumah sakit telah digunakan');
			return $this->response->redirect('addrumahsakit');
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

		$this->view->pick('admin/adminrumahsakitlist');
	}

	public function registerAdminRumahSakitAction()
    {
		try {
			$rumah_sakit = $this->getAllRumahSakitService->execute();
		} catch(\Exception $e) {
			throw $e->getMessage();
		}
		$this->view->setVar('rumah_sakit', $rumah_sakit);

        $this->view->pick('admin/addadminrumahsakit');
	}
	
	public function registerAdminRumahSakitSubmitAction()
	{
		// Check request
		if(!$this->request->isPost()) {
			return $this->response->redirect('addadminrumahsakit');
        }
        
		// Handle request
		$username = $this->request->getPost('username');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$id_rumah_sakit = $this->request->getPost('rumah_sakit');
		$jenis_akun = $this->request->getPost('jenis_akun');

		if($username == '' || $email == '' || $password == '' || $id_rumah_sakit=='') {
			$this->flashSession->error("Please fulfill with a valid form");
			return $this->response->redirect('addadminrumahsakit');
		}

		// Add new Akun
		$request = new AddAkunRequest($username, $email, $password, $jenis_akun, $id_rumah_sakit);
		try {
			$this->addAkunService->execute($request);
			$this->flashSession->success('Admin baru telah ditambahkan!');
			return $this->response->redirect('adminrumahsakitlist');
		} catch (\Exception $e) {
			$this->flashSession->error('Username / Email telah digunakan');
			return $this->response->redirect('addadminrumahsakit');
		}
	}

	public function userListAction(){
		try {
			$akun = $this->getAllAkunService->execute();
		} catch(\Exception $e) {
			throw $e->getMessage();
		}
		$this->view->setVar('akun', $akun);
		
		$this->view->pick('admin/userlist');
	}
}
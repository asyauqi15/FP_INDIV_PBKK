<?php

namespace Uqi\Dashboard\Presentation\Web\Controller;

use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunRequest;
use Uqi\Dashboard\Core\Application\Service\AddAkun\AddAkunService;
use Uqi\Dashboard\Core\Application\Service\AddRumahSakit\AddRumahSakitRequest;
use Uqi\Dashboard\Core\Application\Service\AddRumahSakit\AddRumahSakitService;
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

	public function initialize()
	{
        $this->addAkunService = $this->getDI()->get('addAkunService');
        $this->addRumahSakitService = $this->getDI()->get('addRumahSakitService'); 
	}

	public function indexAction()
	{
		var_dump($this->session);
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

		// Add new User
		$request = new AddAkunRequest($username, $email, $password, $jenis_akun);
		try {
			$this->addAkunService->execute($request);
			$this->flashSession->success('Admin baru telah ditambahkan!');
			return $this->response->redirect('addadmin');
		} catch (\Exception $e) {
			$this->flashSession->error('Username / Email telah digunakan');
			return $this->response->redirect('addadmin');
		}
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

		// Add new User
        $request = new AddRumahSakitRequest($nama_rumah_sakit, $alamat_rumah_sakit);
        
		try {
			$this->addRumahSakitService->execute($request);
			$this->flashSession->success('Rumah sakit baru telah ditambahkan!');
			return $this->response->redirect('addrumahsakit');
		} catch (\Exception $e) {
			$this->flashSession->error('Nama rumah sakit telah digunakan');
			return $this->response->redirect('addrumahsakit');
		}  
    }
}
<?php

namespace Uqi\Dashboard\Presentation\Web\Controller;

use Uqi\Dashboard\Core\Application\Service\FindRumahSakit\FindRumahSakitService;
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    protected $findRumahSakitService;

    public function initialize()
	{
        $this->findRumahSakitService = $this->getDI()->get('findRumahSakitService');
	}

    public function indexAction()
    {
        if($this->session->akun!=NULL){
            if($this->session->akun['jenis_akun']==2){
                $this->view->pick('admin/dashboard');
            }
            elseif($this->session->akun['jenis_akun']==1){

                try {
                    $rumah_sakit = $this->findRumahSakitService->execute($this->session->akun['id_rumah_sakit']);
                } catch(\Exception $e) {
                    throw $e->getMessage();
                }
                $this->view->setVar('rumah_sakit', $rumah_sakit);
                $this->view->pick('adminrumahsakit/dashboard');

            }
            else{
                $this->view->pick('user/dashboard');
            }
        }
        else{
            $this->view->pick('dashboard');
        }
    }
}
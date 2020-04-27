<?php

namespace Uqi\Dashboard\Presentation\Web\Controller;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        if($this->session->akun!=NULL){
            if($this->session->akun['jenis_akun']==2){
                $this->view->pick('admin/dashboard');
            }
            elseif($this->session->akun['jenis_akun']==1){
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
<?php
/**
 *
 */

namespace Controller;

use \Core\Controller;
use \Model\Model;

class UserController extends Controller

{
    public function registerAction(){
        $this->render('register');
        if (!empty($_POST)) {
            $register = new \Core\Entity();
            $register->createEntity();
        }
    }

    public function indexAction(){
        $this->render('index');
    }
    public function loginAction() {
        $this->render('login');
            if (!empty($_POST)) {
                $login = new \Core\Entity();
                $login->logEntity();
            }
    }
    public function filmAction() {
        $this->render('film');
        $login = new \Core\Entity();
        $login->filmEntity();

    }

    public function errorAction()
    {
        $this->render('404');
    }
    public function showAction()
    {
        $this->render('show');


    }
}

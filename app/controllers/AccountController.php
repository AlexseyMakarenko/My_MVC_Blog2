<?php

namespace app\controllers;
use app\core\Controller;

class AccountController extends Controller
{

    public function loginAction() {
        // $this->view->redirect('/');
        $this->view->render('Входа');
    }

    public function registerAction() {
        $this->view->render('Регистрация');
    }
} 
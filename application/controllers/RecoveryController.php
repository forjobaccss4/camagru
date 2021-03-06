<?php


namespace application\controllers;

use application\models\Recovery;


class RecoveryController extends AppController {

    public function __construct($route) {
        parent::__construct($route);
        session_start();
        if (isset($_SESSION['login'])) {
            $this->user = $_SESSION['login'];
            $this->button = "<li><a href=\"/camagru/logout\">Выйти</a></li>";
        }else {
            $this->user = "Гость";
        }
    }

    public function indexAction() {
        if (!empty($_POST['login'])) {
            $tryToRecover = new Recovery;
            $tryToRecover->sendEmailToRecoverPass($_POST['login']);
        }else {
            ErrorController::errorPage();
        }
    }

    public function restoreAction() {
        $url = rtrim($_SERVER['QUERY_STRING'], '/');
        $model = new Recovery();
        if ($trueFalse = $model->restoreChecker($url)) {
        }else {
            ErrorController::errorPage();
        }
    }

    public function changeAction() {
        if (isset($_POST['pass']) && isset($_POST['repass'])) {
            $model = new Recovery();
            $model->changePass($_POST['hash'], $_POST['pass'], $_POST['repass']);
        }else {
            ErrorController::errorPage();
        }
    }
}

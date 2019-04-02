<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function _construct()
    {
        parent::_construct();

        $this->load->model('LoginModel', 'Login_Model');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function validation()
    {
        $data['user'] = $_POST['user'];
        $data['password'] = $_POST['password'];

        $user = $this->LoginModel->login($data);

        if (empty($user)) {
            header("location: /login/error");
        }

        else {
            header("location: /list");
        }
    }
}
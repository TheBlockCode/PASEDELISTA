<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function _construct()
    {
        parent::_construct();
    }

    public function index()
    {
        $this->load->view('login');

        $data['user'] = $_POST['user'];
        $data['password'] = $_POST['password'];
    }
}
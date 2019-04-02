<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListC extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function index()
    {
        //$this->load->view('list');
    }

    public function selectAll()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('Alumnos');
        $output->crud->render();
    }
}
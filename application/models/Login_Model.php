<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model
{
    private $db = null;
    
    public function _construct()
    {
        parent::_construct();

        $this->db = $this->load->database('default', true);
    }

    function ExecuteArrayResults($sql)
    {
        $query = $this->db->query($sql);
        $rows = $query->result_array();
        $query->free_result();

        return ($rows);
    }

    public function login($userData)
    {
        $sql = "select from login where Usuario = '".$userData['user']."' and Contraseña = '".$userData['password']."'";

        return ($this->ExecuteArrayResults($sql));
    }
}
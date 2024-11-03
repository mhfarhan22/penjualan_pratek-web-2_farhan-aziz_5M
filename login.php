<?php
defined('BASEPATH') QR exit('no direct script access allowed');
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('from_validation');
    }

    public function index()
    {
        $this->from_validation->set_rules('email','emai','required|trim');
        $this->from_validation->set_rules('password','password','required|trim');

        $this->load->view('login/index');
}
    
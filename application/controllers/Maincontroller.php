<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontroller extends CI_Controller {

    public function __construct()
    {
        parent :: __construct();
        $this->load->model('Mainmodel');
    }

	public function index()
	{
		$this->load->view('common/header');
        $this->load->view('home');
        $this->load->view('common/footer');
	}

    public function about()
    {
        $this->load->view('about');
    }

    public function dash()
    {
        $this->load->view('dash');
    }
}
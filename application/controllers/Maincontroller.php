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
		$this->load->view('home');
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
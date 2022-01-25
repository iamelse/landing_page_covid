<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('M_covid');
    }

	public function index()
	{
		$data['title'] = 'Covid Tracker Web';
		$data['arrayOfData'] = $this->M_covid->getWorldData();

		$this->load->view('Templates/header.php', $data);
		$this->load->view('Templates/navbar.php');
		$this->load->view('Home/index.php', $data);
		$this->load->view('Templates/footer.php');
	}
}

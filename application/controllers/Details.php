<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('M_covid');
    }

	public function index()
	{
		$data['title'] = 'Details';

		$data['arrayOfData'] = $this->M_covid->getWorldData();
		$data['country'] = $this->M_covid->getAllCountries(10, 20);
		$data['historicalC'] = $this->M_covid->getHistoricalCases();
		$data['historicalD'] = $this->M_covid->getHistoricalDeath();
		$data['historicalR'] = $this->M_covid->getHistoricalRecovered();

		$this->load->view('Templates/header.php', $data);
        $this->load->view('Templates/navbar');
		$this->load->view('Details/index.php', $data);
		$this->load->view('Templates/footer.php');
	}
}

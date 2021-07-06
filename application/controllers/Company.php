<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
    public function register()
	{
		$this->load->view('reg_company');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate extends CI_Controller {
    public function register()
	{
		$this->load->view('reg_candidate');
	}
}
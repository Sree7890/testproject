<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Pro1 extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('Pro_Mod');
	}
	
	public function index() {
		$data['salesinfo'] = $this->Pro_Mod->get_salesinfo();
		$this->load->view('salesinfo', $data);
	}
	
}
?>

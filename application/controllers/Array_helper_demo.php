<?php
	class Array_helper_demo extends CI_Controller{
		public function index()
		{
			$this->load->helper("array");
			$data['seo']=array(
				"meta_data"=>"this is the description",
				"meta_key"=>"This is key",
				
			);
			$this->load->view('array_helper_view',$data);
		}
	}
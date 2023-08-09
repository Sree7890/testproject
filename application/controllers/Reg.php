<?php
    defined('BASEPATH') OR exit('No direct script access allowed' );
    class Reg extends CI_Controller
    {
        function __construct()
	    {
		    parent::__construct();
            //$this->load->model("Regmodel");
        }

        public function index()
        {
            $this->load->view("regview1");

        }

    }
?>


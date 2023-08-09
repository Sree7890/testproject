<?php
defined('BASEPATH') OR exit('No direct script access allowed' );

class Signup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('project/Signup_model.php');
    }

    public function index()
    {   
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','<b>Name</b>','trim|required|max_length[30]|alpha');
        $this->form_validation->set_rules('email','<b>Email</b>','trim|required|valid_email');
        $this->form_validation->set_rules('password','<b>Password</b>','trim|required|max_length[30]');
        if($this->form_validation->run()==False)
        {
            $this->load->view('project/signup_view.php');
        }
        else
        {
            $signup_basic=array(
                "name"=>$this->input->post("name"),
                "email"=>$this->input->post("email"),
                "password"=>md5($this->input->post("salutation")),
                
            );
            $this->Signup_model->insert($signup_basic);
            redirect(base_url('project/Signup.php'));
            //echo "<pre>";
            //print_r($signup_basic);
            //echo "</pre>";
            //$this->load->view('project/signup_view.php');
        }
        
    }
}
?>

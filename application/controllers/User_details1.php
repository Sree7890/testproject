<?php
    class User_detail1 extends CI_Controller{
        public function index()
        {   
            $this->load->helper('common_helper');
            echo hello();
            $data['userarray']=$this->User_model->return_users();
            $this->load->view('User_view',$data);
        }
    }
?>
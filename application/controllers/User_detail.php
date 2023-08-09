<?php
    class User_detail extends CI_Controller{
        public function index()
        {   
            $this->load->model('User_model');
            $data['userarray']=$this->User_model->return_users();
            $this->load->view('User_view',$data);
        }
    }
?>
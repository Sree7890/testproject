<?php
    class My_controller extends CI_Controller{
        public function index()
        {
            //echo "saying hello to everyone";
            $this->load->view('myview');
        }
        public function test()
        {
            $this->load->model('my_model1');
            $name=$this->my_model1->Firstname();
            echo "Name=> ".$name;
            
        }
    }
?>
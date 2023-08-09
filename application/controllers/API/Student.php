<?php

require APPPATH."/libraries/REST_Controller.php";

class Student extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('API/Student_Model');
        $this->load->library("form_validation");
    }
    public function index_post()
    {   
        $id= $this->input->post('id');
		$name= $this->input->post('name');
		$email= $this->input->post('email');
        $dept= $this->input->post('dept');

        $this->form_validation->set_rules('id', 'ID', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required|alpha');
		$this->form_validation->set_rules('email', 'Email ID', 'required|valid_email');
        $this->form_validation->set_rules('dept', 'Department','required');
        
        if($this->form_validation->run()=== FALSE)
        {
            $this->response(array(
                "status"=>0,
                "message"=>"Give proper Fields",
                ),REST_Controller::HTTP_NOT_FOUND);
        }
        else
        {
            if(!empty($id) && !empty($name) && !empty($email) && !empty($dept))
            {
                $data=[
                    "id"=>$id,
                    "name"=>$name,
                    "email"=>$email,
                    "dept"=>$dept
                ];
                if($this->Student_Model->insertStudent($data))
                {
                    $this->response(array(
                        "status"=>1,
                        "message"=>"Student Created",
                        "data"=>$data),200);
                }
                else
                {
                    $this->response(array(
                        "status"=>0,
                        "message"=>"Failed",
                        ),500);
                }
            }
        }
        }
        //insert data using POST method
        /*$data=json_decode(file_get_contents("php://input"));
        $id=isset($data->id) ? $data->id: "";
        $name=isset($data->name) ? $data->name: "";
        $email=isset($data->email) ? $data->email: "";
        $dept=isset($data->dept) ? $data->dept: "";*/
        /*if(!empty($id) && !empty($name) && !empty($email) && !empty($dept))
        {
            $data=[
                "id"=>$id,
                "name"=>$name,
                "email"=>$email,
                "dept"=>$dept
            ];
            if($this->Student_Model->insertStudent($data))
            {
                $this->response(array(
                    "status"=>1,
                    "message"=>"Student Created",
                    "data"=>$data),200);
            }
            else
            {
                $this->response(array(
                    "status"=>0,
                    "message"=>"Failed",
                    ),500);
            }
        }
    }*/
    public function index_get()
    {   
        $data['student']=$this->Student_Model->getStudent();
        //echo "this is post method";
        if(count($data)>0)
        {
            $this->response(array(
                "status"=>1,
                "message"=>"Student Found",
                "data"=>$data),200);
        }
    }
    public function index_delete()
    {
        $data=json_decode(file_get_contents("php://input"));
        $student_id=$data->id;
        //print_r($student_id);
        if($this->Student_Model->deleteStudent($student_id))
        {
            $this->response(array(
                "status"=>1,
                "message"=>"Student deleted",
                ),200);

        }
        else
        {
            $this->response(array(
                "status"=>0,
                "message"=>"Failed",
                ),500);

        }
    }
    public function index_put()
    {
        $data=json_decode(file_get_contents("php://input"));
        if(isset($data->id) && isset($data->name) && isset($data->email) && isset($data->dept))
        {
            $student_id=$data->id;
            $student_info=array
                            (   "name"=>$data->name,
                                "email"=>$data->email,
                                "dept"=>$data->dept
                            );
            if($this->Student_Model->updateStudent($student_id,$student_info))
            {
                $this->response(array(
                    "status"=>1,
                    "message"=>"Data updated successfully",
                    ),200);
            }
            else
            {
                $this->response(array(
                    "status"=>0,
                    "message"=>"Failed to update",
                    ),500);
            }
        
            
        } 

        else
        {
            $this->response(array(
                "status"=>0,
                "message"=>"All field are needed",
                ),500);

        }
    }
    
}
?>
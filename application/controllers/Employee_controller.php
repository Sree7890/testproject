<?php
class Employee_controller extends CI_Controller{
	public function index()
	{	
		$this->load->model('Employeemodel');
		$data['employee']=$this->Employeemodel->getEmployee();
		$this->load->view('employee.php',$data);
	}
	public function create()
	{
		$this->load->view('create.php');
	}
	public function store()
	{
		$this->form_validation->set_rules('id', 'ID', 'required');
		$this->form_validation->set_rules('first_name', 'Firstname', 'required|alpha');
		$this->form_validation->set_rules('last_name', 'Lastname', 'required|alpha');
		$this->form_validation->set_rules('phone', 'Phone No','required');
		$this->form_validation->set_rules('email', 'Email ID', 'required|valid_email');
		if($this->form_validation->run())
			{	$data=[
				'id'=> $this->input->post('id'),
				'first_name'=> $this->input->post('first_name'),
				'last_name'=> $this->input->post('last_name'),
				'phone'=> $this->input->post('phone'),
				'email'=> $this->input->post('email')];
				
				$this->load->model('Employeemodel');
				$this->Employeemodel->insertEmployee($data);
				redirect(base_url('employee'));
			}
			else
			{
				$this->create();
			}
	}
	public function edit($id)
	{
		$this->load->model('Employeemodel');
		$data['detail']=$this->Employeemodel->editEmployee($id);
		//$query=$this->Employeemodel->editEmployee($first_name);
		//foreach($query->result() as $row)
		//{
			//echo $row->first_name;
		//}
		//echo "<pre>";
		//print_r($data);
		//echo "</pre>";
		//die("8888");
		$this->load->view('edit.php',$data);
		
	}
	public function update($id)
	{
		
		$this->form_validation->set_rules('id', 'ID', 'required');
		$this->form_validation->set_rules('first_name', 'Firstname', 'required|alpha');
		$this->form_validation->set_rules('last_name', 'Lastname', 'required|alpha');
		$this->form_validation->set_rules('phone','Phone No','required');
		$this->form_validation->set_rules('email', 'Email ID', 'required|valid_email');
		if($this->form_validation->run())
			{	$data=[
				'id'=> $this->input->post('id'),
				'first_name'=> $this->input->post('first_name'),
				'last_name'=> $this->input->post('last_name'),
				'phone'=> $this->input->post('phone'),
				'email'=> $this->input->post('email')];
				
				$this->load->model('Employeemodel');
				$this->Employeemodel->updateEmployee($data,$id);
				redirect(base_url('employee'));
			}
			else
			{	
				$this->edit($id);
			}
	
	}
	public function delete($id)
	{
		$this->load->model('Employeemodel');
		$this->Employeemodel->deleteEmployee($id);
		redirect(base_url('employee'));
	}

}
?>
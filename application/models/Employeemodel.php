<?php
	class Employeemodel extends CI_Model{

		public function getEmployee()
		{
			$query=$this->db->get('emp');
			return $query->result();

		}


		public function insertEmployee($data)
		{
			return $this->db->insert('emp',$data);
		}
		public function editEmployee($id)
		{
			$query=$this->db->get_where('emp',['id'=>$id]);
			return $query->row_array();
			
		
		}
		public function updateEmployee($data,$id)
		{
			return $this->db->update('emp',$data,['id'=>$id]);
		}
		public function deleteEmployee($id)
		{
			return $this->db->delete('emp',['id'=>$id]);
		}
	}
?>
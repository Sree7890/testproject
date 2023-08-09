<?php
	class User_model1 extends CI_Model
	{
		public function return_users()
		{	
			$this->load->database();
			//$query=$this->db->get("stud_detail11");
			$this->db->select('id');
			$query=$this->db->get('stud_detail11');
			$query->result_array();
			//echo "<pre>";
			//print_r($query->result_array());
			//echo "</pre>";
			return $query->result();

		}
	}
?>
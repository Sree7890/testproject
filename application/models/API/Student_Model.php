<?php

class Student_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getStudent()
    {
        $this->db->select("*");
        $this->db->from("student");
        $query=$this->db->get();
        return $query->result();
    }
    public function insertStudent($data)
	{
		return $this->db->insert('student',$data);
	}
    public function deleteStudent($student_id)
    {
        $this->db->where("id",$student_id);
        return $this->db->delete("student");
    }
    public function updateStudent($student_id,$student_info)
    {
        $this->db->where("id",$student_id);
        return $this->db->update("student",$student_info);
    }
}

?>
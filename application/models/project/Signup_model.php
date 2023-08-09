<?php
defined('BASEPATH') OR exit('No direct script access allowed' );
class Signup_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insert($signup_basic)
    {
            return $this->db->insert('project',$signup_basic);
    }
}
?>
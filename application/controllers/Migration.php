<?php
defined('BASEPATH') OR exit('No direct script access allowed' );

class Migration extends CI_Controller {
    function __construct()
	{
		
		parent::__construct();
		//redirect("https://www.pbssd.gov.in/council/admin/maintenance");
		//$this->lang->load('council_header_footer_lang', $this->language);
		//$this->lang->load('council_lang', $this->language);
        //$this->title = 'Councils ' . $this->title;
        //$this->load->model("migration/Migration_req_model");
        //$this->css_head = array(
            //1 => $this->config->item('theme_uri').'councils/css/datepicker.css',
        //);
        /*$this->js_foot = array(
            //1  => $this->config->item('theme_uri').'councils/js/datepicker.js',
            //2  => $this->config->item('theme_uri').'councils/js/custom/assessor_reg.js',
            3  => $this->config->item('theme_uri').'councils/js/select2.full.min.js',
        );
        $this->css_head = array(
            1 => $this->config->item('theme_uri').'councils/css/datepicker.css',
            2  => $this->config->item('theme_uri').'councils/css/select2.min.css',
            3  => $this->config->item('theme_uri').'plugins/select2/css/select2-bootstrap.css',
        );*/
        //$this->load->helper('email');
        //$this->load->library('sms');
        
    }
	public function index()
	{
        
        
		        /*$data['institutes'] =  $this->migration_req_model->get_institute();
				$data['codes'] =  $this->migration_req_model->get_institute_code();
				$data['durations'] =  $this->migration_req_model->get_duration();*/
				
				$this->load->library('form_validation');
				$this->form_validation->set_rules('fname', '<b>fname</b>', 'trim|required|max_length[20]|alpha');
				$this->form_validation->set_rules('mname', '<b>mname</b>', 'trim|max_length[20]|alpha');
				$this->form_validation->set_rules('lname', '<b>lname</b>', 'trim|required|max_length[20]|alpha');
				$this->form_validation->set_rules('gender', '<b>gender</b>', 'trim|required|integer',
										array('integer' => 'The %s field is invalid'));
                $this->form_validation->set_rules('mobile_no', '<b>mobile_no</b>', 'trim|required|max_length[10]|integer');
                $this->load->view('migration_req_view');
                echo $this->input->post("fname");

				/*$this->form_validation->set_rules('gfname', '<b>gfname</b>', 'trim|required|max_length[20]|alpha');
				$this->form_validation->set_rules('gmname', '<b>gmname</b>', 'trim|max_length[20]|alpha');
				$this->form_validation->set_rules('glname', '<b>glname</b>', 'trim|required|max_length[20]|alpha');
				//$this->form_validation->set_rules('gender', '<b>gender</b>', 'trim|required|integer',
				

        //$this->form_validation->set_rules('id_no_alt', '<b>ID No.</b>', 'trim|required|regex_match[/^[A-Z]{3}[ABCFGHLJPT][A-Z][0-9]{4}[A-Z]$/]');
        //$this->form_validation->set_rules('id_no_alt', '<b>ID No.</b>', 'trim|required|max_length[15]|min_length[10]');
		$this->form_validation->set_rules('ins_name', '<b>Institute Name.</b>', 'trim|required',
            array('integer' => "The %s field must contain only numbers.")
        );
        $this->form_validation->set_rules('mobile_no', '<b>Mobile No.</b>', 'trim|required|exact_length[10]|integer|is_unique[council_assessor_registration_details.mobile_no]',
            array('integer' => "The %s field must contain only numbers.")
        );
        
        //$this->form_validation->set_rules('email_id', '<b>email ID</b>', 'trim|required|max_length[50]|valid_email|is_unique[council_assessor_registration_details.email_id]');
        //$this->form_validation->set_rules('captcha_code', '<b>captcha code</b>', 'trim|required|callback_captcha_check['.$this->input->post('token').']');


        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run() == FALSE) {

            //$data["captcha"] = $this->load_captcha();

            //print_r( $data["captcha"]);
            $this->load->view($this->config->item('theme').'migration/migration_req_view',$data);
        } else {

            $student_basic = array(
                
                "fname" => $this->input->post("fname"),
                "mname" => $this->input->post("mname"),
                "lname" => $this->input->post("lname"),
                "gender_id_fk" => $this->input->post("gender");
				"gfname" => $this->input->post("gfname"),
                "gmname" => $this->input->post("gmname"),
                "glname" => $this->input->post("glname"),
                
                "mobile_no" => $this->input->post("mobile_no"),
            );
			}
			$this->load->view('migration_req_view');*/
	}
}

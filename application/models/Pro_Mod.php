<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
	class Pro_Mod extends CI_Model 
	{		
	
		private $products = 'products';

		function get_salesinfo() 
		{
			$query = $this->db->get($this->products);

			if ($query->num_rows() > 0) 
			{
				return $query->result();
			}
		
			return NULL;
		}
	
	}
?>
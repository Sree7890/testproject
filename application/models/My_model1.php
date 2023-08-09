<?php
class My_model1 extends CI_Model{
	public function Firstname()
	{
		
		$Lastname=$this->Lastname();
		return "Sree".$Lastname;
	}
	public function Lastname()
	{
		return "Brahma";
	}
}
?>
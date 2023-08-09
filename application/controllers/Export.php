<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Export extends CI_Controller {
    // construct
    public function __construct() {
        parent::__construct();
        // load model
        $this->load->model('Export_model','export');
    }    
 
    public function index() {
        $data['export_list'] = $this->export->exportList();
        $this->load->view('export', $data);
    }
    // create xlsx
    public function createxls() {
        // create file name
        $fileName = 'data-'.time().'.xlsx';  
        // load excel library
        $this->load->library('Excel');
        $listInfo = $this->export->exportList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        //$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Name');
        //$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Price');
        //$objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Sales Price');
        //$objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Sales Count');
        //$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Sales Date');   
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'ID');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'First Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Last Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Phone');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Email');     
        // set Row
        $rowCount = 2;
        foreach ($listInfo as $list) {
            //$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->name);
            //$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->price);
            //$objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->sale_price);
            //$objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->sale_count);
            //$objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->sale_date);
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->id);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->first_name);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->last_name);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->phone);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->email);
            $rowCount++;
        }
        $filename = "Employee_details". date("Y-m-d-H-i-s").".csv";
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
        $objWriter->save('php://output'); 
 
    }
     
}
?>
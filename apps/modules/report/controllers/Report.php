<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// End load library phpspreadsheet
class Report extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

  }

  function index()
  {

  }
  function tes(){
$excel = new Spreadsheet();
    //Set document properties
$excel->getProperties()->setCreator('Casudin - Rajin Ngoding');

$excel->setActiveSheetIndex(0);
$excel->setCellValue('A1', 'Nomor');
$excel->setCellValue('B1', 'NAMA Posisi');

$cek=$this->db->get('tbl_position')->result();

// Miscellaneous glyphs, UTF-8
$i=2; foreach($cek as $key) {

$excel->setActiveSheetIndex(0);
$excel->setCellValue('A'.$i, $key->id);
$excel->setCellValue('B'.$i, $key->position_name);
$i++;
}
// Rename worksheet
$excel->getActiveSheet()->setTitle('Report Excel '.date('d-m-Y H'));

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$excel->setActiveSheetIndex(0);
$filename = 'name-of-the-generated-file';
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"');
header('Cache-Control: max-age=0');


$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;

  }

}

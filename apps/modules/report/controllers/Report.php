<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function index(){
    echo "hai";
  }

  function employee()
  {
    $namaFile = "view_employee.xls";
    $judul = "view_employee";
    $tablehead = 0;
    $tablebody = 1;
    $nourut = 1;
    //penulisan header
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");
    header("Content-Disposition: attachment;filename=" . $namaFile . "");
    header("Content-Transfer-Encoding: binary ");

    xlsBOF();

    $kolomhead = 1;
    xlsWriteLabel($tablehead, $kolomhead++, "No");
    xlsWriteLabel($tablehead, $kolomhead++, "Emp Id");
    xlsWriteLabel($tablehead, $kolomhead++, "Fid");
    xlsWriteLabel($tablehead, $kolomhead++, "Emp Nip");
    xlsWriteLabel($tablehead, $kolomhead++, "New Nip");
    xlsWriteLabel($tablehead, $kolomhead++, "Emp Name");
    xlsWriteLabel($tablehead, $kolomhead++, "Company Id");
    xlsWriteLabel($tablehead, $kolomhead++, "Company Name");
    xlsWriteLabel($tablehead, $kolomhead++, "Dept Name");
    xlsWriteLabel($tablehead, $kolomhead++, "Join Date");
    xlsWriteLabel($tablehead, $kolomhead++, "Position Name");
    xlsWriteLabel($tablehead, $kolomhead++, "Type Name");


    xlsEOF();
    exit();
  }

}

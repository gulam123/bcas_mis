<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class C_excel extends CI_Controller {
  public function __construct(){
    parent::__construct();
    check_permission();
    error_reporting(~E_NOTICE);
    $this->load->model(['M_excel','M_cabang']);
    $this->load->helper(['form']);
  }

  public function Lap_anomali_ibu(){
    error_reporting(~E_NOTICE);
    $post 		         = $this->input->post();
    $cabang            = $post['cabang'];
    $tgl_input         = $post['tgl_input'];
    $tgl_inputakhir    = $post['tgl_inputakhir'];
    $periode           = date("Ymd", strtotime($post['periode']));           
    $cabdesc           = $this->M_cabang->CabangDesc($cabang);
    $AnomaliIbu        = $this->M_excel->Anomaliibu($cabang,$tgl_input,$tgl_inputakhir,$periode);
    // print("<pre>".print_r($AnomaliIbu,true)."</pre>");die();

    // Create new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $spreadsheet->getProperties()->setCreator('SKAI BCA SYARIAH')
                ->setLastModifiedBy('SKAI')
                ->setTitle('Laporan Anomali')
                ->setSubject('Laporan')
                ->setDescription('Laporan')
                ->setKeywords('Laporan')
                ->setCategory('SKAI AUDITOR');

    // Add some data
    $sheet1      = $spreadsheet->setActiveSheetIndex(0);
    $activeSheet = $spreadsheet->getActiveSheet();
    $activeSheet->getColumnDimension('A')->setWidth(5);
    $activeSheet->getColumnDimension('B')->setAutoSize(true);
    $activeSheet->getColumnDimension('C')->setAutoSize(true);
    $activeSheet->getColumnDimension('D')->setAutoSize(true);
    $activeSheet->getColumnDimension('E')->setAutoSize(true);
    $activeSheet->getColumnDimension('F')->setAutoSize(true);
    $activeSheet->getColumnDimension('G')->setAutoSize(true);
    $activeSheet->getColumnDimension('H')->setAutoSize(true);
    $activeSheet->getColumnDimension('I')->setAutoSize(true);
    $activeSheet->getColumnDimension('J')->setAutoSize(true);
    $activeSheet->getColumnDimension('K')->setAutoSize(true);
    $activeSheet->getColumnDimension('L')->setAutoSize(true);
    $activeSheet->getColumnDimension('M')->setAutoSize(true);
    $activeSheet->getColumnDimension('N')->setAutoSize(true);
    $activeSheet->getColumnDimension('O')->setAutoSize(true);
    $activeSheet->getColumnDimension('P')->setAutoSize(true);
    $activeSheet->getColumnDimension('Q')->setAutoSize(true);

    $sheet1->setCellValue('A1', 'Laporan Anomali Ibu Kandung');
    $sheet1->setCellValue('A2', "Cabang        : $cabdesc->NAMA_CABANG");
    $sheet1->setCellValue('A3', "Periode       : $periode");
    $sheet1->mergeCells('A1:C1');
    $sheet1->mergeCells('A2:C2');
    $sheet1->mergeCells('A2:C2');

    $sheet1->getStyle('A5:W5')->getAlignment()->setHorizontal('center');
    $sheet1->setCellValue('A5', 'No.');
    $sheet1->setCellValue('B5', 'CABANG INDUK');
    $sheet1->setCellValue('C5', 'NAMA CABANG');
    $sheet1->setCellValue('D5', 'KODE CABANG');
    $sheet1->setCellValue('E5', 'NOMOR CIF');
    $sheet1->setCellValue('F5', 'TGL BUKA');
    $sheet1->setCellValue('G5', 'NAMA SESUAI ID');
    $sheet1->setCellValue('H5', 'NAMA TANPA SINGKATAN');
    $sheet1->setCellValue('I5', 'NAMA IBU KANDUNG');
    $sheet1->setCellValue('J5', 'USER INPUT');
    $sheet1->setCellValue('K5', 'USER OTOR');
    $sheet1->setCellValue('L5', 'TGL OTOR');
    $sheet1->setCellValue('M5', 'TGL UBAH');
    $sheet1->setCellValue('N5', 'JAM UBAH');
    $sheet1->setCellValue('O5', 'JENIS NASABAH');
    $sheet1->setCellValue('P5', 'STATUS');
    $sheet1->setCellValue('Q5', 'PERIODE');

    $sheet1->getStyle('A5:Q5')->applyFromArray([
        'font' => [
            'bold' => true,
            'color'=>[
                'argb' => '000000',
            ]
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => [
                'argb' => '4eb6e6',
            ]
        ],
        // 'borders' => [
        //     'outline' => [
        //         'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
        //         'color' => ['argb' => '2d3436'],
        //     ],
        // ],
    ]);
    // $sheet1->getStyle('L4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FFFF00',]]]);
    // $sheet1->getStyle('R4:T4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FFFF00',]]]);
    // $sheet1->getStyle('U4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FF0000',]]]);
    // $sheet1->getStyle('V4:W4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => '32CD32',]]]);

    $row = 6; 
    foreach($AnomaliIbu as $val) {
        $sheet1->setCellValue('A'.$row, $val->NO);
        $sheet1->setCellValue('B'.$row, $val->CABANG_INDUK);
        $sheet1->setCellValue('C'.$row, $val->NAMA_CABANG);
        $sheet1->setCellValue('D'.$row, $val->KODE_CABANG);
        $sheet1->setCellValue('E'.$row, $val->NOMOR_CIF);
        $sheet1->setCellValue('F'.$row, $val->TANGGAL_BUKA);
        $sheet1->setCellValue('G'.$row, $val->NAMA_SESUAI_IDENTITAS);
        $sheet1->setCellValue('H'.$row, $val->NAMA_TANPA_SINGKATAN);
        $sheet1->setCellValue('I'.$row, $val->NAMA_IBU_KANDUNG);
        $sheet1->setCellValue('J'.$row, $val->USER_INPUT);
        $sheet1->setCellValue('K'.$row, $val->USER_OTOR);
        $sheet1->setCellValue('L'.$row, $val->TGL_OTOR);
        $sheet1->setCellValue('M'.$row, $val->TGL_PERUBAHAN);
        $sheet1->setCellValue('N'.$row, $val->JAM_PERUBAHAN);
        $sheet1->setCellValue('O'.$row, $val->JENIS_NASABAH);
        $sheet1->setCellValue('P'.$row, $val->STATUS);
        $sheet1->setCellValue('Q'.$row, $val->PERIODE);
        $row++;
    }

    $spreadsheet->getActiveSheet()->setTitle('Anomali Ibu Kandung');
    $spreadsheet->setActiveSheetIndex(0);
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Laporan Anomali Ibu Kandung '.$periode.'.xlsx"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
  }

  public function Lap_anomali_nik(){
    error_reporting(~E_NOTICE);
    $post 		         = $this->input->post();
    $cabang            = $post['cabang'];
    $tgl_input         = $post['tgl_input'];
    $tgl_inputakhir    = $post['tgl_inputakhir'];
    $periode           = date("Ymd", strtotime($post['periode']));           
    $cabdesc           = $this->M_cabang->CabangDesc($cabang);
    $Anomalinik        = $this->M_excel->Anomalinik($cabang,$tgl_input,$tgl_inputakhir,$periode);
    // print("<pre>".print_r([$cabang,$tgl_input,$tgl_inputakhir,$periode,$Anomalinik],true)."</pre>");die();

    // Create new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $spreadsheet->getProperties()->setCreator('SKAI BCA SYARIAH')
                ->setLastModifiedBy('SKAI')
                ->setTitle('Laporan Anomali')
                ->setSubject('Laporan')
                ->setDescription('Laporan')
                ->setKeywords('Laporan')
                ->setCategory('SKAI AUDITOR');

    // Add some data
    $sheet1      = $spreadsheet->setActiveSheetIndex(0);
    $activeSheet = $spreadsheet->getActiveSheet();
    $activeSheet->getColumnDimension('A')->setWidth(5);
    $activeSheet->getColumnDimension('B')->setAutoSize(true);
    $activeSheet->getColumnDimension('C')->setAutoSize(true);
    $activeSheet->getColumnDimension('D')->setAutoSize(true);
    $activeSheet->getColumnDimension('E')->setAutoSize(true);
    $activeSheet->getColumnDimension('F')->setAutoSize(true);
    $activeSheet->getColumnDimension('G')->setAutoSize(true);
    $activeSheet->getColumnDimension('H')->setAutoSize(true);
    $activeSheet->getColumnDimension('I')->setAutoSize(true);
    $activeSheet->getColumnDimension('J')->setAutoSize(true);
    $activeSheet->getColumnDimension('K')->setAutoSize(true);
    $activeSheet->getColumnDimension('L')->setAutoSize(true);
    $activeSheet->getColumnDimension('M')->setAutoSize(true);
    $activeSheet->getColumnDimension('N')->setAutoSize(true);
    $activeSheet->getColumnDimension('O')->setAutoSize(true);
    $activeSheet->getColumnDimension('P')->setAutoSize(true);
    $activeSheet->getColumnDimension('Q')->setAutoSize(true);
    $activeSheet->getColumnDimension('R')->setAutoSize(true);
    $activeSheet->getColumnDimension('S')->setAutoSize(true);

    $sheet1->setCellValue('A1', 'Laporan Anomali NIK');
    $sheet1->setCellValue('A2', "Cabang        : $cabdesc->NAMA_CABANG");
    $sheet1->setCellValue('A3', "Periode       : $periode");
    $sheet1->mergeCells('A1:C1');
    $sheet1->mergeCells('A2:C2');
    $sheet1->mergeCells('A2:C2');

    $sheet1->getStyle('A5:S5')->getAlignment()->setHorizontal('center');
    $sheet1->setCellValue('A5', 'No.');
    $sheet1->setCellValue('B5', 'CABANG INDUK');
    $sheet1->setCellValue('C5', 'NAMA CABANG');
    $sheet1->setCellValue('D5', 'KODE CABANG');
    $sheet1->setCellValue('E5', 'NOMOR CIF');
    $sheet1->setCellValue('F5', 'TGL BUKA');
    $sheet1->setCellValue('G5', 'NAMA SESUAI ID');
    $sheet1->setCellValue('H5', 'NAMA TANPA SINGKATAN');
    $sheet1->setCellValue('I5', 'JENIS IDENTITAS');
    $sheet1->setCellValue('J5', 'NOMOR IDENTITAS');
    $sheet1->setCellValue('K5', 'DIGIT ID');
    $sheet1->setCellValue('L5', 'USER INPUT');
    $sheet1->setCellValue('M5', 'USER OTOR');
    $sheet1->setCellValue('N5', 'TGL OTOR');
    $sheet1->setCellValue('O5', 'TGL UBAH');
    $sheet1->setCellValue('P5', 'JAM UBAH');
    $sheet1->setCellValue('Q5', 'JENIS NASABAH');
    $sheet1->setCellValue('R5', 'STATUS');
    $sheet1->setCellValue('S5', 'PERIODE');

    $sheet1->getStyle('A5:S5')->applyFromArray([
        'font' => [
            'bold' => true,
            'color'=>[
                'argb' => '000000',
            ]
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => [
                'argb' => '4eb6e6',
            ]
        ],
        // 'borders' => [
        //     'outline' => [
        //         'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
        //         'color' => ['argb' => '2d3436'],
        //     ],
        // ],
    ]);
    // $sheet1->getStyle('L4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FFFF00',]]]);
    // $sheet1->getStyle('R4:T4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FFFF00',]]]);
    // $sheet1->getStyle('U4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FF0000',]]]);
    // $sheet1->getStyle('V4:W4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => '32CD32',]]]);

    $row = 6; 
    foreach($Anomalinik as $val) {
        $sheet1->setCellValue('A'.$row, $val->NO);
        $sheet1->setCellValue('B'.$row, $val->CABANG_INDUK);
        $sheet1->setCellValue('C'.$row, $val->NAMA_CABANG);
        $sheet1->setCellValue('D'.$row, $val->KODE_CABANG);
        $sheet1->setCellValue('E'.$row, $val->NOMOR_CIF);
        $sheet1->setCellValue('F'.$row, $val->TANGGAL_BUKA);
        $sheet1->setCellValue('G'.$row, $val->NAMA_SESUAI_IDENTITAS);
        $sheet1->setCellValue('H'.$row, $val->NAMA_TANPA_SINGKATAN);
        $sheet1->setCellValue('I'.$row, $val->JENIS_IDENTITAS);
        $sheet1->setCellValue('J'.$row, $val->NOMOR_IDENTITAS);
        $sheet1->setCellValue('K'.$row, $val->DIGIT_ID);
        $sheet1->setCellValue('L'.$row, $val->USER_INPUT);
        $sheet1->setCellValue('M'.$row, $val->USER_OTOR);
        $sheet1->setCellValue('N'.$row, $val->TGL_OTOR);
        $sheet1->setCellValue('O'.$row, $val->TGL_PERUBAHAN);
        $sheet1->setCellValue('P'.$row, $val->JAM_PERUBAHAN);
        $sheet1->setCellValue('Q'.$row, $val->JENIS_NASABAH);
        $sheet1->setCellValue('R'.$row, $val->STATUS);
        $sheet1->setCellValue('S'.$row, $val->PERIODE);
        $row++;
    }

    $spreadsheet->getActiveSheet()->setTitle('Anomali NIK');
    $spreadsheet->setActiveSheetIndex(0);
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Laporan Anomali NIK '.$periode.'.xlsx"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
  }

  public function Lap_anomali_npwp(){
    error_reporting(~E_NOTICE);
    $post 		       = $this->input->post();
    $cabang            = $post['cabang'];
    $tgl_input         = $post['tgl_input'];
    $tgl_inputakhir    = $post['tgl_inputakhir'];
    $periode           = date("Ymd", strtotime($post['periode']));           
    $cabdesc           = $this->M_cabang->CabangDesc($cabang);
    $Anomalinpwp       = $this->M_excel->Anomalinpwp($cabang,$tgl_input,$tgl_inputakhir,$periode);
    // print("<pre>".print_r([$cabang,$tgl_input,$tgl_inputakhir,$periode,$Anomalinpwp],true)."</pre>");die();

    // Create new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $spreadsheet->getProperties()->setCreator('SKAI BCA SYARIAH')
                ->setLastModifiedBy('SKAI')
                ->setTitle('Laporan Anomali')
                ->setSubject('Laporan')
                ->setDescription('Laporan')
                ->setKeywords('Laporan')
                ->setCategory('SKAI AUDITOR');

    // Add some data
    $sheet1      = $spreadsheet->setActiveSheetIndex(0);
    $activeSheet = $spreadsheet->getActiveSheet();
    $activeSheet->getColumnDimension('A')->setWidth(5);
    $activeSheet->getColumnDimension('B')->setAutoSize(true);
    $activeSheet->getColumnDimension('C')->setAutoSize(true);
    $activeSheet->getColumnDimension('D')->setAutoSize(true);
    $activeSheet->getColumnDimension('E')->setAutoSize(true);
    $activeSheet->getColumnDimension('F')->setAutoSize(true);
    $activeSheet->getColumnDimension('G')->setAutoSize(true);
    $activeSheet->getColumnDimension('H')->setAutoSize(true);
    $activeSheet->getColumnDimension('I')->setAutoSize(true);
    $activeSheet->getColumnDimension('J')->setAutoSize(true);
    $activeSheet->getColumnDimension('K')->setAutoSize(true);
    $activeSheet->getColumnDimension('L')->setAutoSize(true);
    $activeSheet->getColumnDimension('M')->setAutoSize(true);
    $activeSheet->getColumnDimension('N')->setAutoSize(true);
    $activeSheet->getColumnDimension('O')->setAutoSize(true);
    $activeSheet->getColumnDimension('P')->setAutoSize(true);
    $activeSheet->getColumnDimension('Q')->setAutoSize(true);
    $activeSheet->getColumnDimension('R')->setAutoSize(true);

    $sheet1->setCellValue('A1', 'Laporan Anomali NPWP');
    $sheet1->setCellValue('A2', "Cabang        : $cabdesc->NAMA_CABANG");
    $sheet1->setCellValue('A3', "Periode       : $periode");
    $sheet1->mergeCells('A1:C1');
    $sheet1->mergeCells('A2:C2');
    $sheet1->mergeCells('A2:C2');

    $sheet1->getStyle('A5:R5')->getAlignment()->setHorizontal('center');
    $sheet1->setCellValue('A5', 'No.');
    $sheet1->setCellValue('B5', 'CABANG INDUK');
    $sheet1->setCellValue('C5', 'NAMA CABANG');
    $sheet1->setCellValue('D5', 'KODE CABANG');
    $sheet1->setCellValue('E5', 'NOMOR CIF');
    $sheet1->setCellValue('F5', 'TGL BUKA');
    $sheet1->setCellValue('G5', 'NAMA SESUAI ID');
    $sheet1->setCellValue('H5', 'NAMA TANPA SINGKATAN');
    $sheet1->setCellValue('I5', 'NOMOR NPWP');
    $sheet1->setCellValue('J5', 'DIGIT NPWP');
    $sheet1->setCellValue('K5', 'USER INPUT');
    $sheet1->setCellValue('L5', 'USER OTOR');
    $sheet1->setCellValue('M5', 'TGL OTOR');
    $sheet1->setCellValue('N5', 'TGL UBAH');
    $sheet1->setCellValue('O5', 'JAM UBAH');
    $sheet1->setCellValue('P5', 'JENIS NASABAH');
    $sheet1->setCellValue('Q5', 'STATUS');
    $sheet1->setCellValue('R5', 'PERIODE');

    $sheet1->getStyle('A5:R5')->applyFromArray([
        'font' => [
            'bold' => true,
            'color'=>[
                'argb' => '000000',
            ]
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => [
                'argb' => '4eb6e6',
            ]
        ],
        // 'borders' => [
        //     'outline' => [
        //         'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
        //         'color' => ['argb' => '2d3436'],
        //     ],
        // ],
    ]);
    // $sheet1->getStyle('L4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FFFF00',]]]);
    // $sheet1->getStyle('R4:T4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FFFF00',]]]);
    // $sheet1->getStyle('U4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FF0000',]]]);
    // $sheet1->getStyle('V4:W4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => '32CD32',]]]);

    $row = 6; 
    foreach($Anomalinpwp as $val) {
        $sheet1->setCellValue('A'.$row, $val->NO);
        $sheet1->setCellValue('B'.$row, $val->CABANG_INDUK);
        $sheet1->setCellValue('C'.$row, $val->NAMA_CABANG);
        $sheet1->setCellValue('D'.$row, $val->KODE_CABANG);
        $sheet1->setCellValue('E'.$row, $val->NOMOR_CIF);
        $sheet1->setCellValue('F'.$row, $val->TANGGAL_BUKA);
        $sheet1->setCellValue('G'.$row, $val->NAMA_SESUAI_IDENTITAS);
        $sheet1->setCellValue('H'.$row, $val->NAMA_TANPA_SINGKATAN);
        $sheet1->setCellValue('I'.$row, $val->NOMOR_NPWP);
        $sheet1->setCellValue('J'.$row, $val->DIGIT_NPWP);
        $sheet1->setCellValue('K'.$row, $val->USER_INPUT);
        $sheet1->setCellValue('L'.$row, $val->USER_OTOR);
        $sheet1->setCellValue('M'.$row, $val->TGL_OTOR);
        $sheet1->setCellValue('N'.$row, $val->TGL_PERUBAHAN);
        $sheet1->setCellValue('O'.$row, $val->JAM_PERUBAHAN);
        $sheet1->setCellValue('P'.$row, $val->JENIS_NASABAH);
        $sheet1->setCellValue('Q'.$row, $val->STATUS);
        $sheet1->setCellValue('R'.$row, $val->PERIODE);
        $row++;
    }

    $spreadsheet->getActiveSheet()->setTitle('Anomali NPWP');
    $spreadsheet->setActiveSheetIndex(0);
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Laporan Anomali NPWP '.$periode.'.xlsx"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
  }

  public function Lap_anomali_umum(){
    error_reporting(~E_NOTICE);
    $post 		       = $this->input->post();
    $cabang            = $post['cabang'];
    $tgl_input         = $post['tgl_input'];
    $tgl_inputakhir    = $post['tgl_inputakhir'];
    $periode           = date("Ymd", strtotime($post['periode']));           
    $cabdesc           = $this->M_cabang->CabangDesc($cabang);
    $Anomaliumum       = $this->M_excel->Anomaliumum($cabang,$tgl_input,$tgl_inputakhir,$periode);
    // print("<pre>".print_r([$cabang,$tgl_input,$tgl_inputakhir,$periode,$Anomaliumum],true)."</pre>");die();

    // Create new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $spreadsheet->getProperties()->setCreator('SKAI BCA SYARIAH')
                ->setLastModifiedBy('SKAI')
                ->setTitle('Laporan Anomali')
                ->setSubject('Laporan')
                ->setDescription('Laporan')
                ->setKeywords('Laporan')
                ->setCategory('SKAI AUDITOR');

    // Add some data
    $sheet1      = $spreadsheet->setActiveSheetIndex(0);
    $activeSheet = $spreadsheet->getActiveSheet();
    $activeSheet->getColumnDimension('A')->setWidth(5);
    $activeSheet->getColumnDimension('B')->setAutoSize(true);
    $activeSheet->getColumnDimension('C')->setAutoSize(true);
    $activeSheet->getColumnDimension('D')->setAutoSize(true);
    $activeSheet->getColumnDimension('E')->setAutoSize(true);
    $activeSheet->getColumnDimension('F')->setAutoSize(true);
    $activeSheet->getColumnDimension('G')->setAutoSize(true);
    $activeSheet->getColumnDimension('H')->setAutoSize(true);
    $activeSheet->getColumnDimension('I')->setAutoSize(true);
    $activeSheet->getColumnDimension('J')->setAutoSize(true);
    $activeSheet->getColumnDimension('K')->setAutoSize(true);
    $activeSheet->getColumnDimension('L')->setAutoSize(true);
    $activeSheet->getColumnDimension('M')->setAutoSize(true);
    $activeSheet->getColumnDimension('N')->setAutoSize(true);
    $activeSheet->getColumnDimension('O')->setAutoSize(true);
    $activeSheet->getColumnDimension('P')->setAutoSize(true);
    $activeSheet->getColumnDimension('Q')->setAutoSize(true);
    $activeSheet->getColumnDimension('R')->setAutoSize(true);
    $activeSheet->getColumnDimension('S')->setAutoSize(true);
    $activeSheet->getColumnDimension('T')->setAutoSize(true);
    $activeSheet->getColumnDimension('U')->setAutoSize(true);
    $activeSheet->getColumnDimension('V')->setAutoSize(true);
    $activeSheet->getColumnDimension('W')->setAutoSize(true);
    $activeSheet->getColumnDimension('X')->setAutoSize(true);

    $sheet1->setCellValue('A1', 'Laporan Anomali Data Umum');
    $sheet1->setCellValue('A2', "Cabang        : $cabdesc->NAMA_CABANG");
    $sheet1->setCellValue('A3', "Periode       : $periode");
    $sheet1->mergeCells('A1:C1');
    $sheet1->mergeCells('A2:C2');
    $sheet1->mergeCells('A2:C2');

    $sheet1->getStyle('A5:X5')->getAlignment()->setHorizontal('center');
    $sheet1->setCellValue('A5', 'No.');
    $sheet1->setCellValue('B5', 'CABANG INDUK');
    $sheet1->setCellValue('C5', 'NAMA CABANG');
    $sheet1->setCellValue('D5', 'KODE CABANG');
    $sheet1->setCellValue('E5', 'NOMOR CIF');
    $sheet1->setCellValue('F5', 'TGL BUKA');
    $sheet1->setCellValue('G5', 'NAMA SESUAI ID');
    $sheet1->setCellValue('H5', 'NAMA TANPA SINGKATAN');
    $sheet1->setCellValue('I5', 'TEMPAT LAHIR');
    $sheet1->setCellValue('J5', 'TANGGAL LAHIR');
    $sheet1->setCellValue('K5', 'JENIS KELAMIN');
    $sheet1->setCellValue('L5', 'AGAMA');
    $sheet1->setCellValue('M5', 'STATUS PERKAWINAN');
    $sheet1->setCellValue('N5', 'TANGGAL IDENTITAS');
    $sheet1->setCellValue('O5', 'TANGGAL JT IDENTITAS');
    $sheet1->setCellValue('P5', 'NEGARA ASAL');
    $sheet1->setCellValue('Q5', 'USER INPUT');
    $sheet1->setCellValue('R5', 'USER OTOR');
    $sheet1->setCellValue('S5', 'TGL OTOR');
    $sheet1->setCellValue('T5', 'TGL UBAH');
    $sheet1->setCellValue('U5', 'JAM UBAH');
    $sheet1->setCellValue('V5', 'JENIS NASABAH');
    $sheet1->setCellValue('W5', 'STATUS');
    $sheet1->setCellValue('X5', 'PERIODE');

    $sheet1->getStyle('A5:X5')->applyFromArray([
        'font' => [
            'bold' => true,
            'color'=>[
                'argb' => '000000',
            ]
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => [
                'argb' => '4eb6e6',
            ]
        ],
        // 'borders' => [
        //     'outline' => [
        //         'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
        //         'color' => ['argb' => '2d3436'],
        //     ],
        // ],
    ]);
    // $sheet1->getStyle('L4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FFFF00',]]]);
    // $sheet1->getStyle('R4:T4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FFFF00',]]]);
    // $sheet1->getStyle('U4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => 'FF0000',]]]);
    // $sheet1->getStyle('V4:W4')->applyFromArray(['fill'=>['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,'startColor' => ['argb' => '32CD32',]]]);

    $row = 6; 
    foreach($Anomaliumum as $val) {
        $sheet1->setCellValue('A'.$row, $val->NO);
        $sheet1->setCellValue('B'.$row, $val->CABANG_INDUK);
        $sheet1->setCellValue('C'.$row, $val->NAMA_CABANG);
        $sheet1->setCellValue('D'.$row, $val->KODE_CABANG);
        $sheet1->setCellValue('E'.$row, $val->NOMOR_CIF);
        $sheet1->setCellValue('F'.$row, $val->TANGGAL_BUKA);
        $sheet1->setCellValue('G'.$row, $val->NAMA_SESUAI_IDENTITAS);
        $sheet1->setCellValue('H'.$row, $val->NAMA_TANPA_SINGKATAN);
        $sheet1->setCellValue('I'.$row, $val->TEMPAT_LAHIR);
        $sheet1->setCellValue('J'.$row, $val->TANGGAL_LAHIR);
        $sheet1->setCellValue('K'.$row, $val->JENIS_KELAMIN);
        $sheet1->setCellValue('L'.$row, $val->AGAMA);
        $sheet1->setCellValue('M'.$row, $val->STATUS_PERKAWINAN);
        $sheet1->setCellValue('N'.$row, $val->TANGGAL_IDENTITAS);
        $sheet1->setCellValue('O'.$row, $val->TANGGAL_JT_IDENTITAS);
        $sheet1->setCellValue('P'.$row, $val->NEGARA_ASAL);
        $sheet1->setCellValue('Q'.$row, $val->USER_INPUT);
        $sheet1->setCellValue('R'.$row, $val->USER_OTOR);
        $sheet1->setCellValue('S'.$row, $val->TGL_OTOR);
        $sheet1->setCellValue('T'.$row, $val->TGL_PERUBAHAN);
        $sheet1->setCellValue('U'.$row, $val->JAM_PERUBAHAN);
        $sheet1->setCellValue('V'.$row, $val->JENIS_NASABAH);
        $sheet1->setCellValue('W'.$row, $val->STATUS);
        $sheet1->setCellValue('X'.$row, $val->PERIODE);
        $row++;
    }

    $spreadsheet->getActiveSheet()->setTitle('Anomali Data Umum');
    $spreadsheet->setActiveSheetIndex(0);
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Laporan Anomali Data Umum '.$periode.'.xlsx"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
  }
}
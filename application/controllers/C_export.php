<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class C_export extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model(['M_continous']);
    }

    public function Anomali_Nik()
    {
        error_reporting(~E_NOTICE);
        $post           = $this->input->post();
        $cabang         = $this->session->cabang;
        $posko          = $post['posko'];
        $tanggal_dari   = $post['tanggal_dari'] ?: '1972-01-01';
        $tanggal_sampai = $post['tanggal_sampai'] ?: date('Y-m-d');
        
        // getcabang
        $posko_laporan  = $this->session->posko;
        $getcabang      = $this->M_posko->getcabang($posko_laporan);
        // var_dump($cabang);die();

        // getdata
        $saldo_stok           = $this->M_export->saldoStok($cabang,$posko,$tanggal_dari,$tanggal_sampai);
        $unduedate            = $this->M_export->unduedate($cabang,$posko,$tanggal_dari,$tanggal_sampai);
        $duedate              = $this->M_export->status_data($cabang,$posko,$tanggal_dari,$tanggal_sampai,$status = "duedate");
        $satu_minggu          = $this->M_export->status_data($cabang,$posko,$tanggal_dari,$tanggal_sampai,$status = "1minggu");
        $dua_minggu           = $this->M_export->status_data($cabang,$posko,$tanggal_dari,$tanggal_sampai,$status = "2minggu");
        $lebih_duaminggu      = $this->M_export->status_data($cabang,$posko,$tanggal_dari,$tanggal_sampai,$status = "Lebih_2minggu");
        $data_tidak_fisik_ada = $this->M_export->data_tidak_fisik_ada($cabang,$posko,$tanggal_dari,$tanggal_sampai);
        $data_ada_fisik_tidak = $this->M_export->data_ada_fisik_tidak($cabang,$posko,$tanggal_dari,$tanggal_sampai);
        $rekap_data           = $this->M_export->rekap_data($cabang,$posko,$tanggal_dari,$tanggal_sampai);
        // print("<pre>".print_r($data_ada_fisik_tidak,true)."</pre>");die();

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getProperties()->setCreator('Stok Tarikan Barang Gadai')
                    ->setLastModifiedBy('Stok Tarikan Barang Gadai')
                    ->setTitle('Stok Tarikan Barang Gadai')
                    ->setSubject('Stok Tarikan Barang Gadai')
                    ->setDescription('Stok Tarikan Barang Gadai')
                    ->setKeywords('Stok Tarikan Barang Gadai')
                    ->setCategory('Gadai AUDIT');

        $tgl_audit_lap      = "Tanggal Audit : ";
        $cabang_laporan     = "Cabang : ";
        $nama_laporan       = "Laporan Persediaan Barang Gadai";
        $saldo_stok_laporan = "Saldo Stok";
        $nama_laporan_1     = "Undue Date";
        $nama_laporan_2     = "Due Date";
        $nama_laporan_3     = "1 (Satu) Minggu";
        $nama_laporan_4     = "2 (Dua) Minggu";
        $nama_laporan_5     = "Lebih Dr 2 Minggu";
        $nama_laporan_6     = "Data Tidak Ada, Fisik Ada";
        $nama_laporan_7     = "Data Ada, Fisik Tidak ada";
        
        $periode_tanggal = '';
        if($post['tanggal_dari']){
            $periode_tanggal = date('d/m/Y',strtotime($tanggal_dari))." s/d ";
            $periode_tanggal .= date('d/m/Y',strtotime($tanggal_sampai));
        }else{
            $periode_tanggal = "Semua";
        }

        // Tab 1
            $sheet = $spreadsheet->setActiveSheetIndex(0);
            $sheet->setCellValue('A1', $nama_laporan.' '.$saldo_stok_laporan.'(By Lokasi)');
            $sheet->setCellValue('A2', $tgl_audit_lap.$periode_tanggal);
            $sheet->setCellValue('A3', $cabang_laporan.$getcabang->nama_cabang);

            $sheet->mergeCells('A1:E1');
            $sheet->mergeCells('A2:D2');
            $sheet->mergeCells('A3:D3');

            $row=6;
            $sheet->setCellValue('A'.$row, 'No.');
            $sheet->setCellValue('B'.$row, 'Tgl Trans');
            $sheet->setCellValue('C'.$row, 'Tgl Due Date');
            $sheet->setCellValue('D'.$row, 'Lama Hari');
            $sheet->setCellValue('E'.$row, 'No. Faktur');
            $sheet->setCellValue('F'.$row, 'Nama Konsumen');
            $sheet->setCellValue('G'.$row, 'Nama Barang');
            $sheet->setCellValue('H'.$row, 'No. Seri');
            $sheet->setCellValue('I'.$row, 'No. Imei');
            $sheet->setCellValue('J'.$row, 'Cair Pokok');
            $sheet->setCellValue('K'.$row, 'Pokok');
            $sheet->setCellValue('L'.$row, 'Posko Asal');
            // $sheet->setCellValue('M'.$row, 'Data');
            // $sheet->setCellValue('N'.$row, 'Fisik');

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);
            // $sheet->getColumnDimension('M')->setAutoSize(true);
            // $sheet->getColumnDimension('N')->setAutoSize(true);

            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => [
                        'argb' => '00ffffff',
                    ]
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => '003498db',
                    ],
                ],
            ];
            
            $spreadsheet->getActiveSheet()->getStyle('A'.$row.':L'.$row)->applyFromArray($styleArray);
            $spreadsheet->getActiveSheet()->getStyle('J7:K9999')->getNumberFormat()->setFormatCode('#,##0');
            
            $rowG       = $row+1;
            $startRow   = $rowG;
            $lastRow    = $startRow+1;
            $total      = 0;
            foreach ($saldo_stok as $posko=>$data) {
                $no=1;
                // $row = $rowG;

                // $styleArrayHeader['font']['bold'] = true;
                // $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayHeader);
                // $sheet->setCellValue('A'.$rowG, "$posko - {$data[0]->nama_posko}");
                // $sheet->mergeCells('A'.$rowG.':L'.$rowG);

                $row +=1;
                foreach ($data as $stokTB) {
                    $sheet->setCellValue('A'.$row, $no);
                    $sheet->setCellValue('B'.$row, $stokTB->tgl_trans);
                    $sheet->setCellValue('C'.$row, $stokTB->tgl_Due_Date);
                    $sheet->setCellValue('D'.$row, $stokTB->lama_hari);
                    $sheet->setCellValue('E'.$row, $stokTB->no_faktur);
                    $sheet->setCellValue('F'.$row, $stokTB->nama);
                    $sheet->setCellValue('G'.$row, $stokTB->nama_barang);
                    $sheet->setCellValue('H'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('I'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('J'.$row, $stokTB->nilai_cair);
                    $sheet->setCellValue('K'.$row, $stokTB->bunga);
                    $sheet->setCellValue('L'.$row, "$stokTB->posko - $stokTB->nama_posko");
                    // $sheet->setCellValue('M'.$row, $stokTB->data);
                    // $sheet->setCellValue('N'.$row, $stokTB->fisik);

                    $rowG = $row;
                    $row++;
                    $no++;
                }
                $rowG+=1;
                $sub_total = count($data);
                $total += $sub_total;
                $sheet->setCellValue('B'.$rowG, "$stokTB->type_barang");
                $sheet->setCellValue('C'.$rowG, "$sub_total Unit");
                // $sum = [$data->nilai_cair]; 
                // $sum_nilai += $rowG['$stokTB->nilai_cair'];
                // print("<pre>".print_r($data,true)."</pre>");die();
                // $sheet->setCellValue('J'.$rowG, $sum_nilai.$rowG);
                // $sheet->setCellValue('K'.$rowG, $sum_pokok.$rowG);
                $styleArrayGroup['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayGroup);
                $rowG+=1;
                $lastRow = $rowG;
            }

            $styleArray = [
                'font' => [
                    'bold' => true,
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => 'ffff00',
                    ],
                ],
            ];
            $sheet->setCellValue('B'.$lastRow, "Grand Total");
            $sheet->setCellValue('C'.$lastRow, "$total Unit");
            // Format Rupiah
            $spreadsheet->getActiveSheet()->getStyle('J7:K999')->getNumberFormat()->setFormatCode('#,##0');
            $spreadsheet->getActiveSheet()->getStyle('A'.$lastRow.':L'.$lastRow)->applyFromArray($styleArray);
            $sum_nilai  = "=SUM(J5:J";
            $sum_pokok  = "=SUM(K5:K";
            $sum_close  = ")";
            $sheet->setCellValue('J'.$lastRow, $sum_nilai.$lastRow.$sum_close);
            $sheet->setCellValue('K'.$lastRow, $sum_pokok.$lastRow.$sum_close);

            $spreadsheet->getActiveSheet()->setTitle($saldo_stok_laporan);
        // End Tab 1

        // Tab 2
            $spreadsheet->createSheet();
            $sheet = $spreadsheet->setActiveSheetIndex(1);
            $sheet->setCellValue('A1', $nama_laporan.' '.$nama_laporan_1.'(By Lokasi)');
            $sheet->setCellValue('A2', $tgl_audit_lap.$periode_tanggal);
            $sheet->setCellValue('A3', $cabang_laporan.$getcabang->nama_cabang);

            $sheet->mergeCells('A1:E1');
            $sheet->mergeCells('A2:D2');
            $sheet->mergeCells('A3:D3');

            $row=6;
            $sheet->setCellValue('A'.$row, 'No.');
            $sheet->setCellValue('B'.$row, 'Tgl Trans');
            $sheet->setCellValue('C'.$row, 'Tgl Due Date');
            $sheet->setCellValue('D'.$row, 'Lama Hari');
            $sheet->setCellValue('E'.$row, 'No. Faktur');
            $sheet->setCellValue('F'.$row, 'Nama Konsumen');
            $sheet->setCellValue('G'.$row, 'Nama Barang');
            $sheet->setCellValue('H'.$row, 'No. Seri');
            $sheet->setCellValue('I'.$row, 'No. Imei');
            $sheet->setCellValue('J'.$row, 'Cair Pokok');
            $sheet->setCellValue('K'.$row, 'Pokok');
            $sheet->setCellValue('L'.$row, 'Posko Asal');

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);

            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => [
                        'argb' => '00ffffff',
                    ]
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => '003498db',
                    ],
                ],
            ];

            $spreadsheet->getActiveSheet()->getStyle('A'.$row.':L'.$row)->applyFromArray($styleArray);
            $spreadsheet->getActiveSheet()->getStyle('J7:K9999')->getNumberFormat()->setFormatCode('#,##0');

            $rowG       = $row+1;
            $startRow   = $rowG;
            $lastRow    = $startRow+1;
            $total      = 0;
            foreach ($unduedate as $lokasi=>$data) {
                $no=1;
                $row = $rowG;

                $styleArrayHeader['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayHeader);
                $sheet->setCellValue('A'.$rowG, "$lokasi - {$data[0]->nama_lokasi}");
                $sheet->mergeCells('A'.$rowG.':L'.$rowG);

                $row +=1;
                foreach ($data as $stokTB) {
                    $sheet->setCellValue('A'.$row, $no);
                    $sheet->setCellValue('B'.$row, $stokTB->tgl_trans);
                    $sheet->setCellValue('C'.$row, $stokTB->tgl_Due_Date);
                    $sheet->setCellValue('D'.$row, $stokTB->lama_hari);
                    $sheet->setCellValue('E'.$row, $stokTB->no_faktur);
                    $sheet->setCellValue('F'.$row, $stokTB->nama);
                    $sheet->setCellValue('G'.$row, $stokTB->nama_barang);
                    $sheet->setCellValue('H'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('I'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('J'.$row, $stokTB->nilai_cair);
                    $sheet->setCellValue('K'.$row, $stokTB->bunga);
                    $sheet->setCellValue('L'.$row, "$stokTB->posko - $stokTB->nama_posko");

                    $rowG = $row;
                    $row++;
                    $no++;
                }
                $rowG+=1;
                $sub_total = count($data);
                $total += $sub_total;
                $sheet->setCellValue('B'.$rowG, "Total");
                $sheet->setCellValue('C'.$rowG, "$sub_total Unit");
                // print("<pre>".print_r($stokTB,true)."</pre>");die();
                $styleArrayGroup['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayGroup);
                $rowG+=1;
                $lastRow = $rowG;
            }
            $sheet->setCellValue('B'.$lastRow, "Grand Total");
            $sheet->setCellValue('C'.$lastRow, "$total Unit");

            $styleArrayGroup['font']['bold'] = true;
            $sheet->getStyle('A'.$lastRow.':L'.$lastRow)->applyFromArray($styleArrayGroup);

            $spreadsheet->getActiveSheet()->setTitle($nama_laporan_1);
        // End Tab 2

        // Tab 3
            $spreadsheet->createSheet();
            $sheet = $spreadsheet->setActiveSheetIndex(2);
            $sheet->setCellValue('A1', $nama_laporan.' '.$nama_laporan_2.'(By Lokasi)');
            $sheet->setCellValue('A2', $tgl_audit_lap.$periode_tanggal);
            $sheet->setCellValue('A3', $cabang_laporan.$getcabang->nama_cabang);

            $sheet->mergeCells('A1:E1');
            $sheet->mergeCells('A2:D2');
            $sheet->mergeCells('A3:D3');

            $row=6;
            $sheet->setCellValue('A'.$row, 'No.');
            $sheet->setCellValue('B'.$row, 'Tgl Trans');
            $sheet->setCellValue('C'.$row, 'Tgl Due Date');
            $sheet->setCellValue('D'.$row, 'Lama Hari');
            $sheet->setCellValue('E'.$row, 'No. Faktur');
            $sheet->setCellValue('F'.$row, 'Nama Konsumen');
            $sheet->setCellValue('G'.$row, 'Nama Barang');
            $sheet->setCellValue('H'.$row, 'No. Seri');
            $sheet->setCellValue('I'.$row, 'No. Imei');
            $sheet->setCellValue('J'.$row, 'Cair Pokok');
            $sheet->setCellValue('K'.$row, 'Pokok');
            $sheet->setCellValue('L'.$row, 'Posko Asal');

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);

            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => [
                        'argb' => '00ffffff',
                    ]
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => '003498db',
                    ],
                ],
            ];

            $spreadsheet->getActiveSheet()->getStyle('A'.$row.':L'.$row)->applyFromArray($styleArray);
            $spreadsheet->getActiveSheet()->getStyle('J7:K9999')->getNumberFormat()->setFormatCode('#,##0');

            $rowG       = $row+1;
            $startRow   = $rowG;
            $lastRow    = $startRow+1;
            $total      = 0;
            foreach ($duedate as $lokasi=>$data) {
                $no=1;
                $row = $rowG;

                $styleArrayHeader['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayHeader);
                $sheet->setCellValue('A'.$rowG, "$lokasi - {$data[0]->nama_lokasi}");
                $sheet->mergeCells('A'.$rowG.':L'.$rowG);

                $row +=1;
                foreach ($data as $stokTB) {
                    $sheet->setCellValue('A'.$row, $no);
                    $sheet->setCellValue('B'.$row, $stokTB->tgl_trans);
                    $sheet->setCellValue('C'.$row, $stokTB->tgl_Due_Date);
                    $sheet->setCellValue('D'.$row, $stokTB->lama_hari);
                    $sheet->setCellValue('E'.$row, $stokTB->no_faktur);
                    $sheet->setCellValue('F'.$row, $stokTB->nama);
                    $sheet->setCellValue('G'.$row, $stokTB->nama_barang);
                    $sheet->setCellValue('H'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('I'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('J'.$row, $stokTB->nilai_cair);
                    $sheet->setCellValue('K'.$row, $stokTB->bunga);
                    $sheet->setCellValue('L'.$row, "$stokTB->posko - $stokTB->nama_posko");

                    $rowG = $row;
                    $row++;
                    $no++;
                }
                $rowG+=1;
                $sub_total = count($data);
                $total += $sub_total;
                $sheet->setCellValue('B'.$rowG, "Total");
                $sheet->setCellValue('C'.$rowG, "$sub_total Unit");

                $styleArrayGroup['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayGroup);
                $rowG+=1;
                $lastRow = $rowG;
            }
            $sheet->setCellValue('B'.$lastRow, "Grand Total");
            $sheet->setCellValue('C'.$lastRow, "$total Unit");

            $styleArrayGroup['font']['bold'] = true;
            $sheet->getStyle('A'.$lastRow.':L'.$lastRow)->applyFromArray($styleArrayGroup);

            $spreadsheet->getActiveSheet()->setTitle($nama_laporan_2);
        // End Tab 3

        // Tab 4
            $spreadsheet->createSheet();
            $sheet = $spreadsheet->setActiveSheetIndex(3);
            $sheet->setCellValue('A1', $nama_laporan.' '.$nama_laporan_3.'(By Lokasi)');
            $sheet->setCellValue('A2', $tgl_audit_lap.$periode_tanggal);
            $sheet->setCellValue('A3', $cabang_laporan.$getcabang->nama_cabang);

            $sheet->mergeCells('A1:E1');
            $sheet->mergeCells('A2:D2');
            $sheet->mergeCells('A3:D3');

            $row=6;
            $sheet->setCellValue('A'.$row, 'No.');
            $sheet->setCellValue('B'.$row, 'Tgl Trans');
            $sheet->setCellValue('C'.$row, 'Tgl Due Date');
            $sheet->setCellValue('D'.$row, 'Lama Hari');
            $sheet->setCellValue('E'.$row, 'No. Faktur');
            $sheet->setCellValue('F'.$row, 'Nama Konsumen');
            $sheet->setCellValue('G'.$row, 'Nama Barang');
            $sheet->setCellValue('H'.$row, 'No. Seri');
            $sheet->setCellValue('I'.$row, 'No. Imei');
            $sheet->setCellValue('J'.$row, 'Cair Pokok');
            $sheet->setCellValue('K'.$row, 'Pokok');
            $sheet->setCellValue('L'.$row, 'Posko Asal');

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);

            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => [
                        'argb' => '00ffffff',
                    ]
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => '003498db',
                    ],
                ],
            ];

            $spreadsheet->getActiveSheet()->getStyle('A'.$row.':L'.$row)->applyFromArray($styleArray);
            $spreadsheet->getActiveSheet()->getStyle('J7:K9999')->getNumberFormat()->setFormatCode('#,##0');

            $rowG       = $row+1;
            $startRow   = $rowG;
            $lastRow    = $startRow+1;
            $total      = 0;
            foreach ($satu_minggu as $lokasi=>$data) {
                $no=1;
                $row = $rowG;

                $styleArrayHeader['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayHeader);
                $sheet->setCellValue('A'.$rowG, "$lokasi - {$data[0]->nama_lokasi}");
                $sheet->mergeCells('A'.$rowG.':L'.$rowG);

                $row +=1;
                foreach ($data as $stokTB) {
                    $sheet->setCellValue('A'.$row, $no);
                    $sheet->setCellValue('B'.$row, $stokTB->tgl_trans);
                    $sheet->setCellValue('C'.$row, $stokTB->tgl_Due_Date);
                    $sheet->setCellValue('D'.$row, $stokTB->lama_hari);
                    $sheet->setCellValue('E'.$row, $stokTB->no_faktur);
                    $sheet->setCellValue('F'.$row, $stokTB->nama);
                    $sheet->setCellValue('G'.$row, $stokTB->nama_barang);
                    $sheet->setCellValue('H'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('I'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('J'.$row, $stokTB->nilai_cair);
                    $sheet->setCellValue('K'.$row, $stokTB->bunga);
                    $sheet->setCellValue('L'.$row, "$stokTB->posko - $stokTB->nama_posko");

                    $rowG = $row;
                    $row++;
                    $no++;
                }
                $rowG+=1;
                $sub_total = count($data);
                $total += $sub_total;
                $sheet->setCellValue('B'.$rowG, "Total");
                $sheet->setCellValue('C'.$rowG, "$sub_total Unit");

                $styleArrayGroup['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayGroup);
                $rowG+=1;
                $lastRow = $rowG;
            }
            $sheet->setCellValue('B'.$lastRow, "Grand Total");
            $sheet->setCellValue('C'.$lastRow, "$total Unit");

            $styleArrayGroup['font']['bold'] = true;
            $sheet->getStyle('A'.$lastRow.':L'.$lastRow)->applyFromArray($styleArrayGroup);

            $spreadsheet->getActiveSheet()->setTitle($nama_laporan_3);
        // End Tab 4

        // Tab 5
            $spreadsheet->createSheet();
            $sheet = $spreadsheet->setActiveSheetIndex(4);
            $sheet->setCellValue('A1', $nama_laporan.' '.$nama_laporan_4.'(By Lokasi)');
            $sheet->setCellValue('A2', $tgl_audit_lap.$periode_tanggal);
            $sheet->setCellValue('A3', $cabang_laporan.$getcabang->nama_cabang);

            $sheet->mergeCells('A1:E1');
            $sheet->mergeCells('A2:D2');
            $sheet->mergeCells('A3:D3');

            $row=6;
            $sheet->setCellValue('A'.$row, 'No.');
            $sheet->setCellValue('B'.$row, 'Tgl Trans');
            $sheet->setCellValue('C'.$row, 'Tgl Due Date');
            $sheet->setCellValue('D'.$row, 'Lama Hari');
            $sheet->setCellValue('E'.$row, 'No. Faktur');
            $sheet->setCellValue('F'.$row, 'Nama Konsumen');
            $sheet->setCellValue('G'.$row, 'Nama Barang');
            $sheet->setCellValue('H'.$row, 'No. Seri');
            $sheet->setCellValue('I'.$row, 'No. Imei');
            $sheet->setCellValue('J'.$row, 'Cair Pokok');
            $sheet->setCellValue('K'.$row, 'Pokok');
            $sheet->setCellValue('L'.$row, 'Posko Asal');

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);

            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => [
                        'argb' => '00ffffff',
                    ]
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => '003498db',
                    ],
                ],
            ];

            $spreadsheet->getActiveSheet()->getStyle('A'.$row.':L'.$row)->applyFromArray($styleArray);
            $spreadsheet->getActiveSheet()->getStyle('J7:K9999')->getNumberFormat()->setFormatCode('#,##0');

            $rowG       = $row+1;
            $startRow   = $rowG;
            $lastRow    = $startRow+1;
            $total      = 0;
            foreach ($dua_minggu as $lokasi=>$data) {
                $no=1;
                $row = $rowG;

                $styleArrayHeader['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayHeader);
                $sheet->setCellValue('A'.$rowG, "$lokasi - {$data[0]->nama_lokasi}");
                $sheet->mergeCells('A'.$rowG.':L'.$rowG);

                $row +=1;
                foreach ($data as $stokTB) {
                    $sheet->setCellValue('A'.$row, $no);
                    $sheet->setCellValue('B'.$row, $stokTB->tgl_trans);
                    $sheet->setCellValue('C'.$row, $stokTB->tgl_Due_Date);
                    $sheet->setCellValue('D'.$row, $stokTB->lama_hari);
                    $sheet->setCellValue('E'.$row, $stokTB->no_faktur);
                    $sheet->setCellValue('F'.$row, $stokTB->nama);
                    $sheet->setCellValue('G'.$row, $stokTB->nama_barang);
                    $sheet->setCellValue('H'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('I'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('J'.$row, $stokTB->nilai_cair);
                    $sheet->setCellValue('K'.$row, $stokTB->bunga);
                    $sheet->setCellValue('L'.$row, "$stokTB->posko - $stokTB->nama_posko");

                    $rowG = $row;
                    $row++;
                    $no++;
                }
                $rowG+=1;
                $sub_total = count($data);
                $total += $sub_total;
                $sheet->setCellValue('B'.$rowG, "Total");
                $sheet->setCellValue('C'.$rowG, "$sub_total Unit");

                $styleArrayGroup['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayGroup);
                $rowG+=1;
                $lastRow = $rowG;
            }
            $sheet->setCellValue('B'.$lastRow, "Grand Total");
            $sheet->setCellValue('C'.$lastRow, "$total Unit");

            $styleArrayGroup['font']['bold'] = true;
            $sheet->getStyle('A'.$lastRow.':L'.$lastRow)->applyFromArray($styleArrayGroup);

            $spreadsheet->getActiveSheet()->setTitle($nama_laporan_4);
        // End Tab 5

        // Tab 6
            $spreadsheet->createSheet();
            $sheet = $spreadsheet->setActiveSheetIndex(5);
            $sheet->setCellValue('A1', $nama_laporan.' '.'Lebih Dr 2 (Dua) Minggu(By Lokasi)');
            $sheet->setCellValue('A2', $tgl_audit_lap.$periode_tanggal);
            $sheet->setCellValue('A3', $cabang_laporan.$getcabang->nama_cabang);

            $sheet->mergeCells('A1:E1');
            $sheet->mergeCells('A2:D2');
            $sheet->mergeCells('A3:D3');

            $row=6;
            $sheet->setCellValue('A'.$row, 'No.');
            $sheet->setCellValue('B'.$row, 'Tgl Trans');
            $sheet->setCellValue('C'.$row, 'Tgl Due Date');
            $sheet->setCellValue('D'.$row, 'Lama Hari');
            $sheet->setCellValue('E'.$row, 'No. Faktur');
            $sheet->setCellValue('F'.$row, 'Nama Konsumen');
            $sheet->setCellValue('G'.$row, 'Nama Barang');
            $sheet->setCellValue('H'.$row, 'No. Seri');
            $sheet->setCellValue('I'.$row, 'No. Imei');
            $sheet->setCellValue('J'.$row, 'Cair Pokok');
            $sheet->setCellValue('K'.$row, 'Pokok');
            $sheet->setCellValue('L'.$row, 'Posko Asal');

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);

            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => [
                        'argb' => '00ffffff',
                    ]
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => '003498db',
                    ],
                ],
            ];

            $spreadsheet->getActiveSheet()->getStyle('A'.$row.':L'.$row)->applyFromArray($styleArray);
            $spreadsheet->getActiveSheet()->getStyle('J7:K9999')->getNumberFormat()->setFormatCode('#,##0');

            $rowG       = $row+1;
            $startRow   = $rowG;
            $lastRow    = $startRow+1;
            $total      = 0;
            foreach ($lebih_duaminggu as $lokasi=>$data) {
                $no=1;
                $row = $rowG;

                $styleArrayHeader['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayHeader);
                $sheet->setCellValue('A'.$rowG, "$lokasi - {$data[0]->nama_lokasi}");
                $sheet->mergeCells('A'.$rowG.':L'.$rowG);

                $row +=1;
                foreach ($data as $stokTB) {
                    $sheet->setCellValue('A'.$row, $no);
                    $sheet->setCellValue('B'.$row, $stokTB->tgl_trans);
                    $sheet->setCellValue('C'.$row, $stokTB->tgl_Due_Date);
                    $sheet->setCellValue('D'.$row, $stokTB->lama_hari);
                    $sheet->setCellValue('E'.$row, $stokTB->no_faktur);
                    $sheet->setCellValue('F'.$row, $stokTB->nama);
                    $sheet->setCellValue('G'.$row, $stokTB->nama_barang);
                    $sheet->setCellValue('H'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('I'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('J'.$row, $stokTB->nilai_cair);
                    $sheet->setCellValue('K'.$row, $stokTB->bunga);
                    $sheet->setCellValue('L'.$row, "$stokTB->posko - $stokTB->nama_posko");

                    $rowG = $row;
                    $row++;
                    $no++;
                }
                $rowG+=1;
                $sub_total = count($data);
                $total += $sub_total;
                $sheet->setCellValue('B'.$rowG, "Total");
                $sheet->setCellValue('C'.$rowG, "$sub_total Unit");

                $styleArrayGroup['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':L'.$rowG)->applyFromArray($styleArrayGroup);
                $rowG+=1;
                $lastRow = $rowG;
            }
            $sheet->setCellValue('B'.$lastRow, "Grand Total");
            $sheet->setCellValue('C'.$lastRow, "$total Unit");

            $styleArrayGroup['font']['bold'] = true;
            $sheet->getStyle('A'.$lastRow.':L'.$lastRow)->applyFromArray($styleArrayGroup);

            $spreadsheet->getActiveSheet()->setTitle($nama_laporan_5);
        // End Tab 6
        
        // Tab 7
            $spreadsheet->createSheet();
            $sheet = $spreadsheet->setActiveSheetIndex(6);
            $sheet->setCellValue('A1', $nama_laporan.' '.$nama_laporan_6.'(By Lokasi)');
            $sheet->setCellValue('A2', $tgl_audit_lap.$periode_tanggal);
            $sheet->setCellValue('A3', $cabang_laporan.$getcabang->nama_cabang);

            $sheet->mergeCells('A1:E1');
            $sheet->mergeCells('A2:D2');
            $sheet->mergeCells('A3:D3');

            $row=6;
            $sheet->setCellValue('A'.$row, 'No.');
            $sheet->setCellValue('B'.$row, 'No Faktur');
            $sheet->setCellValue('C'.$row, 'Nama Barang');
            $sheet->setCellValue('D'.$row, 'Nomor Seri');
            $sheet->setCellValue('E'.$row, 'Lokasi');

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            // $sheet->getColumnDimension('F')->setAutoSize(true);

            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => [
                        'argb' => '00ffffff',
                    ]
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => '003498db',
                    ],
                ],
            ];

            $spreadsheet->getActiveSheet()->getStyle('A'.$row.':E'.$row)->applyFromArray($styleArray);
            $rowG = $row+1;
            $startRow = $rowG;
            $lastRow = $startRow+1;
            $total = 0;
            foreach ($data_tidak_fisik_ada as $lokasi=>$data) {
                $no=1;
                $row = $rowG;

                $styleArrayHeader['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':E'.$rowG)->applyFromArray($styleArrayHeader);
                $sheet->setCellValue('A'.$rowG, "$lokasi - {$data[0]->nama_lokasi}");
                $sheet->mergeCells('A'.$rowG.':E'.$rowG);

                $row +=1;
                foreach ($data as $stokTB) {
                    $sheet->setCellValue('A'.$row, $no);
                    $sheet->setCellValue('B'.$row, $stokTB->no_faktur);
                    $sheet->setCellValue('C'.$row, $stokTB->nama_barang);
                    $sheet->setCellValue('D'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('E'.$row, "$stokTB->lokasi - $stokTB->nama_lokasi");

                    $rowG = $row;
                    $row++;
                    $no++;
                }
                $rowG+=1;
                $sub_total = count($data);
                $total += $sub_total;
                $sheet->setCellValue('B'.$rowG, "Sub Total");
                $sheet->setCellValue('C'.$rowG, "$sub_total Unit");

                $styleArrayGroup['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':E'.$rowG)->applyFromArray($styleArrayGroup);
                $rowG+=1;
                $lastRow = $rowG;
            }
            $sheet->setCellValue('B'.$lastRow, "Total");
            $sheet->setCellValue('C'.$lastRow, "$total Unit");

            $styleArrayGroup['font']['bold'] = true;
            $sheet->getStyle('A'.$lastRow.':E'.$lastRow)->applyFromArray($styleArrayGroup);

            $spreadsheet->getActiveSheet()->setTitle($nama_laporan_6);
        // end Tab 7

        // Tab 8
            $spreadsheet->createSheet();
            $sheet = $spreadsheet->setActiveSheetIndex(7);
            $sheet->setCellValue('A1', $nama_laporan.' '.$nama_laporan_7.'(By Lokasi)');
            $sheet->setCellValue('A2', $tgl_audit_lap.$periode_tanggal);
            $sheet->setCellValue('A3', $cabang_laporan.$getcabang->nama_cabang);

            $sheet->mergeCells('A1:E1');
            $sheet->mergeCells('A2:D2');
            $sheet->mergeCells('A3:D3');

            $row=6;
            $sheet->setCellValue('A'.$row, 'No.');
            $sheet->setCellValue('B'.$row, 'Tgl Trans');
            $sheet->setCellValue('C'.$row, 'Tgl Due Date');
            $sheet->setCellValue('D'.$row, 'Lama Hari');
            $sheet->setCellValue('E'.$row, 'No. Faktur');
            $sheet->setCellValue('F'.$row, 'Nama Konsumen');
            $sheet->setCellValue('G'.$row, 'Nama Barang');
            $sheet->setCellValue('H'.$row, 'No. Seri');
            $sheet->setCellValue('I'.$row, 'No. Imei');
            $sheet->setCellValue('J'.$row, 'Cair Pokok');
            $sheet->setCellValue('K'.$row, 'Pokok');
            $sheet->setCellValue('L'.$row, 'Posko Asal');
            $sheet->setCellValue('M'.$row, 'Data');
            $sheet->setCellValue('N'.$row, 'Fisik');

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);
            $sheet->getColumnDimension('M')->setAutoSize(true);
            $sheet->getColumnDimension('N')->setAutoSize(true);

            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => [
                        'argb' => '00ffffff',
                    ]
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => '003498db',
                    ],
                ],
            ];

            $spreadsheet->getActiveSheet()->getStyle('A'.$row.':N'.$row)->applyFromArray($styleArray);
            $spreadsheet->getActiveSheet()->getStyle('J7:K9999')->getNumberFormat()->setFormatCode('#,##0');

            $rowG       = $row+1;
            $startRow   = $rowG;
            $lastRow    = $startRow+1;
            $total      = 0;
            foreach ($data_ada_fisik_tidak as $lokasi=>$data) {
                $no=1;
                $row = $rowG;
                $styleArrayHeader['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':N'.$rowG)->applyFromArray($styleArrayHeader);
                $sheet->setCellValue('A'.$rowG, "$lokasi - {$data[0]->nama_lokasi}");
                $sheet->mergeCells('A'.$rowG.':N'.$rowG);

                $row +=1;
                foreach ($data as $stokTB) {
                    $sheet->setCellValue('A'.$row, $no);
                    $sheet->setCellValue('B'.$row, $stokTB->tgl_trans);
                    $sheet->setCellValue('C'.$row, $stokTB->tgl_Due_Date);
                    $sheet->setCellValue('D'.$row, $stokTB->lama_hari);
                    $sheet->setCellValue('E'.$row, $stokTB->no_faktur);
                    $sheet->setCellValue('F'.$row, $stokTB->nama);
                    $sheet->setCellValue('G'.$row, $stokTB->nama_barang);
                    $sheet->setCellValue('H'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('I'.$row, $stokTB->nomor_seri);
                    $sheet->setCellValue('J'.$row, $stokTB->nilai_cair);
                    $sheet->setCellValue('K'.$row, $stokTB->bunga);
                    $sheet->setCellValue('L'.$row, "$stokTB->posko - $stokTB->nama_posko");
                    $sheet->setCellValue('M'.$row, $stokTB->data);
                    $sheet->setCellValue('N'.$row, $stokTB->fisik);

                    $rowG = $row;
                    $row++;
                    $no++;
                }
                $rowG+=1;
                $sub_total = count($data);
                $total += $sub_total;
                $sheet->setCellValue('B'.$rowG, "Total");
                $sheet->setCellValue('C'.$rowG, "$sub_total Unit");
                $styleArrayGroup['font']['bold'] = true;
                $sheet->getStyle('A'.$rowG.':N'.$rowG)->applyFromArray($styleArrayGroup);
                $rowG+=1;
                $lastRow = $rowG;
            }
            $sheet->setCellValue('B'.$lastRow, "Grand Total");
            $sheet->setCellValue('C'.$lastRow, "$total Unit");

            $styleArrayGroup['font']['bold'] = true;
            $sheet->getStyle('A'.$lastRow.':N'.$lastRow)->applyFromArray($styleArrayGroup);

            $spreadsheet->getActiveSheet()->setTitle($nama_laporan_7);
        // End Tab 8

        // Tab 9
            $spreadsheet->createSheet();
            $sheet = $spreadsheet->setActiveSheetIndex(8);
            $sheet->setCellValue('A1', $nama_laporan.' '.'Rekap'.'(By Lokasi)');
            $sheet->setCellValue('A2', $tgl_audit_lap.$periode_tanggal);
            $sheet->setCellValue('A3', $cabang_laporan.$getcabang->nama_cabang);

            $sheet->mergeCells('A1:E1');
            $sheet->mergeCells('A2:D2');
            $sheet->mergeCells('A3:D3'); 

            $sheet->setCellValue('A5', 'Lokasi Penyimpanan');
            $sheet->setCellValue('B5', 'Saldo Stock');
            $sheet->setCellValue('C5', 'Data Ada, Fisik Ada');
            $sheet->setCellValue('C6', $nama_laporan_1);
            $sheet->setCellValue('D6', $nama_laporan_2);
            $sheet->setCellValue('E6', $nama_laporan_3);
            $sheet->setCellValue('F6', $nama_laporan_4);
            $sheet->setCellValue('G6', $nama_laporan_5);
            $sheet->setCellValue('H5', $nama_laporan_6);
            $sheet->setCellValue('I5', 'Total Fisik');
            $sheet->setCellValue('J5', $nama_laporan_7);
            
            $sheet->mergeCells('A5:A6');
            $sheet->mergeCells('B5:B6');
            $sheet->mergeCells('C5:G5');
            $sheet->mergeCells('H5:H6');
            $sheet->mergeCells('I5:I6');
            $sheet->mergeCells('J5:J6');

            $sheet->getStyle('A5:A6')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('B5:B6')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('C5:G5')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('H5:H6')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('I5:I6')->getAlignment()->setHorizontal('center');
            $sheet->getStyle('J5:J6')->getAlignment()->setHorizontal('center');
            
            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => [
                        'argb' => '00ffffff',
                    ]
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => [
                        'argb' => '003498db',
                    ],
                ],
                'borders' => [
                    'outline' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                        'color' => ['argb' => '00CED1'],
                        // 'color' => ['argb' => '000000'],
                    ],
                    'inside' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                        'color' => ['argb' => '00CED1'],
                    ],
                ],
                'alignment' => [
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
            ];
            
            $spreadsheet->getActiveSheet()->getStyle('A5:J6')->applyFromArray($styleArray);
            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            
            $row=6;
            $i=0;
            foreach ($rekap_data as $lokasi => $dataPerPosko) {
                $rekap_saldostok                = 0;
                $rekap_unduedate                = 0;
                $rekap_duedate                  = 0;
                $rekap_satu_minggu              = 0;
                $rekap_dua_minggu               = 0;
                $rekap_lebih_dua_minggu         = 0;
                $rekap_data_tidak_fisik_ada     = 0;
                // $rekap_data_ada_fisik_tidak     = 0;
                $rekap_total_fisik              = 0;
                foreach ($dataPerPosko as $key => $data) {
                    $rekap_saldostok            += $data->Nomor_Faktur != null && $data->nama != null ? 1 : 0 ;
                    $rekap_unduedate            += $data->data == 'ADA' && $data->fisik == 'ADA' && $data->lama_hari < 0    && $data->tgl_audit >= $tanggal_dari && $data->tgl_audit <= $tanggal_sampai ? 1 : 0;
                    $rekap_duedate              += $data->data == 'ADA' && $data->fisik == 'ADA' && $data->lama_hari == '0' && $data->tgl_audit >= $tanggal_dari && $data->tgl_audit <= $tanggal_sampai ? 1 : 0;
                    $rekap_satu_minggu          += $data->data == 'ADA' && $data->fisik == 'ADA' && $data->lama_hari > 0    && $data->lama_hari < 7             && $data->tgl_audit >= $tanggal_dari && $data->tgl_audit <= $tanggal_sampai ? 1 : 0;
                    $rekap_dua_minggu           += $data->data == 'ADA' && $data->fisik == 'ADA' && $data->lama_hari > 7    && $data->lama_hari < 15            && $data->tgl_audit >= $tanggal_dari && $data->tgl_audit <= $tanggal_sampai ? 1 : 0;
                    $rekap_lebih_dua_minggu     += $data->data == 'ADA' && $data->fisik == 'ADA' && $data->lama_hari > 15   && $data->lama_hari < 999           && $data->tgl_audit >= $tanggal_dari && $data->tgl_audit <= $tanggal_sampai ? 1 : 0;
                    $rekap_data_tidak_fisik_ada += $data->lama_hari == null    && $data->tgl_trans == null          && $data->tgl_audit >= $tanggal_dari && $data->tgl_audit <= $tanggal_sampai ? 1 : 0;
                    // $rekap_data_ada_fisik_tidak += $data->data == 'ADA'        && $data->fisik == 'TIDAK_ADA' || $data->fisik == 'TIDAK_ADA'       && $data->tgl_audit >= $tanggal_dari && $data->tgl_audit <= $tanggal_sampai ? 1 : 0;
                    // print("<pre>".print_r($rekap_data,true)."</pre>");die();
                    
                    $rekap_all[$data->lokasi] = [
                        'kode_lokasi'=>$data->lokasi,
                        'nama_lokasi'=>$data->nama_lokasi,
                        'jumlah'=>[
                            'rekap_total_fisik'          =>$rekap_unduedate+$rekap_duedate+$rekap_satu_minggu+$rekap_dua_minggu+$rekap_lebih_dua_minggu+$rekap_data_tidak_fisik_ada ?: 0,
                            'rekap_saldostok'            =>$rekap_saldostok ?: 0,
                            'rekap_unduedate'            =>$rekap_unduedate ?: 0,
                            'rekap_duedate'              =>$rekap_duedate ?: 0,
                            'rekap_satu_minggu'          =>$rekap_satu_minggu ?: 0,
                            'rekap_dua_minggu'           =>$rekap_dua_minggu ?: 0,
                            'rekap_lebih_dua_minggu'     =>$rekap_lebih_dua_minggu ?: 0,
                            'rekap_data_tidak_fisik_ada' =>$rekap_data_tidak_fisik_ada ?: 0,
                            'rekap_data_ada_fisik_tidak' =>$rekap_saldostok-$rekap_unduedate-$rekap_duedate-$rekap_satu_minggu-$rekap_dua_minggu-$rekap_lebih_dua_minggu ?: 0,
                        ]
                    ];
                }
                $i++;
            }
            // print("<pre>".print_r($rekap_all,true)."</pre>");die();

            $row = $row+1;

            $jml_saldostok              = 0;
            $jml_unduedate              = 0;
            $jml_duedate                = 0;
            $jml_satu_minggu            = 0;
            $jml_dua_minggu             = 0;
            $jml_lebih_dua_minggu       = 0;
            $jml_data_tidak_fisik_ada   = 0;
            $jml_data_ada_fisik_tidak   = 0;
            $jml_total_fisik            = 0;
            // print("<pre>".print_r($rekap_all,true)."</pre>");die();
            
            foreach ($rekap_all as $key => $data) {
                $jumlah = $data['jumlah'];
                $sheet->setCellValue('A'.$row, "{$data[kode_lokasi]} - {$data[nama_lokasi]}");
                $sheet->setCellValue('B'.$row, "$jumlah[rekap_saldostok]");
                $sheet->setCellValue('C'.$row, "$jumlah[rekap_unduedate]");
                $sheet->setCellValue('D'.$row, "$jumlah[rekap_duedate]");
                $sheet->setCellValue('E'.$row, "$jumlah[rekap_satu_minggu]");
                $sheet->setCellValue('F'.$row, "$jumlah[rekap_dua_minggu]");
                $sheet->setCellValue('G'.$row, "$jumlah[rekap_lebih_dua_minggu]");
                $sheet->setCellValue('H'.$row, "$jumlah[rekap_data_tidak_fisik_ada]");
                $sheet->setCellValue('I'.$row, "$jumlah[rekap_total_fisik]");
                $sheet->setCellValue('J'.$row, "$jumlah[rekap_data_ada_fisik_tidak]");
                
                $jml_saldostok              += $jumlah['rekap_saldostok'];
                $jml_unduedate              += $jumlah['rekap_unduedate'];
                $jml_duedate                += $jumlah['rekap_duedate'];
                $jml_satu_minggu            += $jumlah['rekap_satu_minggu'];
                $jml_dua_minggu             += $jumlah['rekap_dua_minggu'];
                $jml_lebih_dua_minggu       += $jumlah['rekap_lebih_dua_minggu'];
                $jml_data_tidak_fisik_ada   += $jumlah['rekap_data_tidak_fisik_ada'];
                $jml_total_fisik            += $jumlah['rekap_total_fisik'];
                $jml_data_ada_fisik_tidak   += $jumlah['rekap_data_ada_fisik_tidak'];
                $row+=1;
            }
            $styleArray = [
                        'font' => [
                            'bold' => true,
                        ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'color' => [
                                'argb' => 'ffff00',
                            ],
                        ],
                    ];
            $spreadsheet->getActiveSheet()->getStyle('A'.$row.':J'.$row)->applyFromArray($styleArray);
            $sheet->setCellValue('A'.$row, 'Total');
            $sheet->setCellValue('B'.$row, $jml_saldostok);
            $sheet->setCellValue('C'.$row, $jml_unduedate);
            $sheet->setCellValue('D'.$row, $jml_duedate);
            $sheet->setCellValue('E'.$row, $jml_satu_minggu);
            $sheet->setCellValue('F'.$row, $jml_dua_minggu);
            $sheet->setCellValue('G'.$row, $jml_lebih_dua_minggu);
            $sheet->setCellValue('H'.$row, $jml_data_tidak_fisik_ada);
            $sheet->setCellValue('I'.$row, $jml_total_fisik);
            $sheet->setCellValue('J'.$row, $jml_data_ada_fisik_tidak);

            $spreadsheet->getActiveSheet()->setTitle("Rekap");
        // end Tab 9

        // $spreadsheet->setActiveSheetIndex(0);
        // $bulan = date('M');
        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Laporan Audit Persediaan Barang Gadai.xlsx"');
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
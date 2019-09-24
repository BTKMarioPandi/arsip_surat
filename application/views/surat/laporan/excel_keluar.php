<?php 
	/** Error reporting */
	error_reporting(E_ALL);
	ini_set('display_errors', TRUE); 
	ini_set('display_startup_errors', TRUE); 
	// date_default_timezone_set('Europe/London');
	if (PHP_SAPI == 'cli')
		die('This example should only be run from a Web Browser');

	define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	// Set document properties
	$objPHPExcel->getProperties()->setCreator("Pindi")
								 ->setLastModifiedBy("Pindi")
								 ->setTitle("Laporan Bulanan Surat Keluar")
								 ->setSubject("Laporan Bulanan Surat Keluar Creator App By Pindi")
								 ->setDescription("Hasil dari aplikasi sim surat")
								 ->setKeywords("Laporan Surat Keluar by Pindi")
								 ->setCategory("Office 2007");

	$objReader = PHPExcel_IOFactory::createReader('Excel5');
	$objPHPExcel = $objReader->load("application/views/surat/laporan/t_keluar.xls");

	// Add some data
	$objPHPExcel->setActiveSheetIndex(0)
	            ->setCellValue('B1', $ket);
	$n = 4;
	$a= 1;
	foreach ($hasil as $k) {
		$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('B'.$n, $a)
		            ->setCellValue('C'.$n, $k->kode_sulur.'/'.$k->nomer_sulur)
		            ->setCellValue('D'.$n, $k->kepada_sulur)
		            ->setCellValue('E'.$n, $k->perihal_sulur)
		            ->setCellValue('F'.$n, $k->tanggal_sulur)
		            ->setCellValue('G'.$n, $k->nama_bidang);
		$n++;
		$a++;
	}

	// Rename worksheet
	$objPHPExcel->getActiveSheet()->setTitle('Laporan');


	// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	$objPHPExcel->setActiveSheetIndex(0);


	// Redirect output to a client’s web browser (Excel2007)
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="'.$ket.'.xlsx"');
	header('Cache-Control: max-age=0');
	// If you're serving to IE 9, then the following may be needed
	header('Cache-Control: max-age=1');

	// If you're serving to IE over SSL, then the following may be needed
	header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
	header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	header ('Pragma: public'); // HTTP/1.0

	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('php://output');
	exit;
 ?>
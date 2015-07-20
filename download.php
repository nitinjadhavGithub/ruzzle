<?php
session_start();
ini_set('memory_limit','512M');

if(isset($_POST['action']))
{
	extract($_POST);
	switch($action){
		case 'text': 
			$newfile="ruzzle_output-".date('Y-m-d H:i:s');
			$fh = fopen("download/".$newfile, 'w') or die("Can't create file");
			foreach ($_SESSION['final_output'] as $key => $value) {
				fwrite($fh, $value."\n");	
			}
		break;

		case 'csv': 


			date_default_timezone_set('Asia/Calcutta');
			define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

			/** Include PHPExcel */
			require_once dirname(__FILE__) . '/PHPExcel/PHPExcel.php';
			//require_once 'PHPExcel/PHPExcel.php';

			$objPHPExcel = new PHPExcel();

			PHPExcel_Shared_Font::setAutoSizeMethod(PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT);
			PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder() );

			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
			$objPHPExcel->setActiveSheetIndex(0);

			$styleArray = array(
			    'font'  => array(
			     'size'  => 10,
			     //~ 'color' => array('rgb' => '666666'),
			      'name'  => 'Arial'
			    ));

			$styleArray2 = array(
			    'font'  => array(
			     'size'  => 10,
			     //~ 'color' => array('rgb' => '666666'),
			      'name'  => 'Arial',
			       'bold'  => true
			    ));    
    
			$objPHPExcel->getActiveSheet()->setCellValue('A1','Words');
			$i=2;
			foreach ($_SESSION['final_output'] as $key => $value) {
				$objPHPExcel->getActiveSheet()->setCellValue('A'.$i,$value);
				$i++;
			}


		$objPHPExcel->getProperties()
	    ->setCreator("Pinstorm Technologies")
	    ->setLastModifiedBy("Pinstorm Technologies")
	    ->setLastModifiedBy("Find Ruzzle words");
	    


		$config['object']='ruzzle';
		$callStartTime = microtime(true);

		// Redirect output to a client's web browser (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $config['object'] . time() . '.xlsx"');
		header('Cache-Control: max-age=0');

		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');

		header('Content-type: application/vnd.ms-excel');
			

		//~ $objWriter->save('/var/www/projects/HRMS/test/PHPExcel/Examples/'.str_replace('.php', '.xls', __FILE__));
		$callEndTime = microtime(true);
		$callTime = $callEndTime - $callStartTime;
			
		break;
	}	
}

?>
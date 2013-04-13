<?php
class Bbs_model extends CI_Model {

	const FILE_PATH = 'bbs.csv';
	const NO = 0;
	const PARENT_NO = 1;
	const NAME = 2;
	const TITLE = 3;
	const MESSAGE = 4;

	public function  __construct() {
		parent:: __construct();
	}

	public function getBbs()
	{
		$data = array();
		if (true == file_exists(self::FILE_PATH)){
			$fp = fopen(self::FILE_PATH, 'r');
			while($row = fgetcsv($fp)){
				$data[] = $row;
			}
			fclose($fp);
		}
		$data = array_reverse($data);
		return $data;
	}

	public function writeBbs($data)
	{
		$this->sanitize($data);
		$newLine = implode(',', $data) . "\r\n";
		$fp = fopen(self::FILE_PATH, 'a');
		fputs($fp, $newLine);
		fclose($fp);
	}

	public function  getNo()
	{
		$data = $this->getBbs();
		$no = 1;
		if(0 < count($data)){
			$no = $data[0][self::NO];
			$no++;
		}
		return $no;
	}

	public function  sanitize(&$data)
	{
		foreach ($data as $index => $val) {
			$tmpData = $val;
			$tmpData = trim($tmpData);
			$tmpData = str_replace(',', '', $tmpData);
			if (self::MESSAGE == $index){
				$tmpData = nl2br($tmpData);
			}
			$tmpData = str_replace('\r', '', $tmpData);
			$tmpData = str_replace('\r', '', $tmpData);
			$data[$index] = $tmpData;
		}

	}

}
<?php
class Counter_lib
{
	const COUNT_FILE = 'count.txt';
	public function getCount()
	{
		$cnt = 0;
		$num = 0;

		if (true == file_exists(self::COUNT_FILE)){
			$fp = fopen(self::COUNT_FILE, 'r');
			$num = trim(fgets($fp));
			fclose($fp);
		}
		if(true == is_numeric($num)){
			$cnt = $num;
		}
		return $cnt;
	}

	public function incCount()
	{
		$cnt = $this->getCount();
		$cnt += 1;
		$fp = fopen(self::COUNT_FILE, 'w');
		fputs($fp, $cnt);
		fclose($fp);
	}
}
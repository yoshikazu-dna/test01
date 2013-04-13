<?php
class TimeMeasurer
{
	public function process()
	{
		$str = "";
		for ($i = 0; $i < 1000000; $i++) {
			$str .= '1';
		}
	}

	public function exec()
	{
		$startTime = $this->getMicrotime();
		$this->process();
		$endTime = $this->getMicrotime();
		$procSecs = $endTime - $startTime;
		return sprintf('処理所要時間は%s秒でした。', $procSecs);
	}

	private function getMicrotime()
	{
		$splitedMt = explode(' ', microtime());
		return $splitedMt[0] + $splitedMt[1];
	}
}
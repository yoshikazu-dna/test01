<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('Counter_lib');
	}

	public function index()
	{
		try {
#			$this->counter_lib->incCount();
#			$data['count'] = $this->counter_lib->getCount();

			$data['name'] = "test";
			$data['list'] = "リスト";

			$this->load->view('test_message', $data);

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
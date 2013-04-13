<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bbs extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Bbs_model');
	}

	public function index()
	{
		try {
			$request_data = $this->input->post();
			if(true == isset($request_data['name'])){
				$this->Bbs_model->writeBbs($request_data['name']);
			}
			$data['list'] = $this->Bbs_model->getBbs();
			echo "<pre>";
			print_r($data);
			echo "</pre>";

			$this->load->view('bbs_view', $data);

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
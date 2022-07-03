<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ambulan extends CI_Controller
{

	public function index()
	{
		$konten = $this->load->view('ambulan/list_ambulan', null, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'Panggil Ambulans',
		);

		echo json_encode($data_json);
	}
}

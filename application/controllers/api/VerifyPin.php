<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';
require 'application/libraries/REST_Controller.php';

class VerifyPin extends REST_Controller
{
	public function index_get()
	{
		// Parameter
		$nik = $this->get('nik');
		$pin = $this->get('pin');

		// Query Database
		$this->db->where('nik', $nik);
		$this->db->where('pin', $pin);
		$query = $this->db->get('mpegawai');
		$data = $query->row();

		// Response
		if ($query->num_rows() > 0) {
			$this->response([
				'status' => true,
				'message' => 'no message',
				'data' => $data
			]);
		} else {
			$this->response([
				'status' => false,
				'message' => 'error',
				'data' => array()
			]);
		}
	}
}

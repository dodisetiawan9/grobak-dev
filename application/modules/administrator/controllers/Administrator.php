<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		$data['nama'] = '';
		$this->template->load('backend/admin_template','index', $data);	
	}

}

/* End of file Administrator.php */
/* Location: ./application/modules/administrator/controllers/Administrator.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('lang');
		$this->load->library('session');

		  $lang = $this->session->userdata("lang") == null ? "english" : $this->session->userdata("lang");

        $this->lang->load($lang, $lang);

	}

	public function index()
	{
		$this->load->view('page');
	}

	public function langguages($get_lang)
	{
		$this->session->set_userdata('lang',$get_lang);
		redirect('page');
		
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	protected $user;
	function __construct()
	{
		parent::__construct();
		$this->user = $this->session->user;
		if($this->user == '') redirect('login','refresh');
		$this->user = json_decode($this->user);
	}
	/**
	 * Index Page for this controller.
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$data['mails'] = api_get(base_url()."api/mails/inbox/".$this->user->id);
		$this->load->view('inbox',$data);
	}

	public function compose()
	{
		$this->load->view('compose');
	}

	public function read()
	{
		$this->load->view('single');
	}
}

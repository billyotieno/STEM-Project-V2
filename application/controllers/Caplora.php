<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caplora extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index(){
		$this->load->view('structure/header');
		$this->load->view('index');
		$this->load->view('structure/footer');
	}

	public function aboutus(){
		$this->load->view('structure/header');
		$this->load->view('about');
		$this->load->view('structure/footer');
	}

	public function techmakers(){
		$this->load->view('structure/header');
		$this->load->view('techmakers');
		$this->load->view('structure/footer');
	}

	public function speechcontest(){
		$this->load->view('structure/header');
		$this->load->view('speechcontests');
		$this->load->view('structure/footer');
	}

    public function contactus(){
    	$this->load->view('structure/header');
		$this->load->view('contact');
		$this->load->view('structure/footer');
    }

    public function events(){
    	$this->load->view('structure/header');
    	$this->load->view('events');
    	$this->load->view('structure/footer');
    }

    public function ourblogs(){
    	$this->load->view('structure/header');
    	$this->load->view('blogs');
    	$this->load->view('structure/footer');
    }

    public function join(){
    	$this->load->view('structure/header');
    	$this->load->view('joinus');
    	$this->load->view('structure/footer');
    }

}

/* End of file Caplora.php */
/* Location: ./application/controllers/Caplora.php */
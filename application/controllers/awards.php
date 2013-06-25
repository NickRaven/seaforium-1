<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Awards extends Controller
{
	function __construct()
  	{
    	parent::__construct();
		$this->load->model(array('statistics_dal'));
		$this->load->helper(array('url'));
	}

	function index() { 

		$data['most_titlebar_edits'] 	= $this->statistics_dal->fetch_titlebar_edits();
		$data['most_posts'] 			= $this->statistics_dal->fetch_most_posts();
		$data['most_popular_threads'] 	= $this->statistics_dal->fetch_most_popular_threads();
		$data['most_buddies']			= $this->statistics_dal->fetch_most_loved();
		$data['most_enemies']			= $this->statistics_dal->fetch_most_ignored();
		$data['most_threads']			= $this->statistics_dal->fetch_most_posted_threads();
		$data['most_hidden_threads']	= $this->statistics_dal->fetch_most_hidden_threads();;
		$data['most_cunts']				= $this->statistics_dal->most_cunts();


		$this->load->view('shared/header');
		$this->load->view('awards', $data);
		$this->load->view('shared/footer');
	}
	

}
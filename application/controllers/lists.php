<?php

class Lists extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('list_model');
		$this->load->helper('url');
		$this->load->library('session');
		
		$this->output->enable_profiler(TRUE);
		
		$this->data = array();
	}
	
	function index()
	{
		redirect('lists/all');
	}
	
	function all()
	{
		$this->data['lists'] = $this->list_model->get_all_lists();
		$this->load->view('lists/all', $this->data);
	}
	
	function view($id)
	{
		$this->data['list'] = $this->list_model->get_list($id);
		$this->load->view('lists/view', $this->data);
	}
	
	function add()
	{
		if($this->input->is_post())
		{
			// validate the inputs
			$this->load->library('form_validation');
			$this->form_validation->set_rules('list_name', 'List Name', 'required');
			if($this->form_validation->run() !== FALSE)
			{
				$id = $this->list_model->add_new_list($this->input->post('list_name'));
				$this->list_model->add_list_items($id, $this->input->post('item'));
				$this->session->set_flashdata('notices', 'Successfully added');
				redirect(site_url('lists/view/'.$id));
			}
			else
			{
				$this->data['errors'] = validation_errors();
			}
		}
		$this->load->view('lists/add', $this->data);
	}
}
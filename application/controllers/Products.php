<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        //$this->output->enable_profiler();
		//$this->output->enable_profiler();
    }
	public function index()
	{
		$data['products'] = $this->product_model->get_all_products();
		$this->load->view('index',$data);
	}
	public function show($product_id){
		$data['product'] = $this->product_model->get_product_by_id($product_id);
		$this->load->view('show',$data);
	}
	public function new(){
		$this->load->view('new');
	}
	public function edit($product_id){
		$data['product'] = $this->product_model->get_product_by_id($product_id);
		$this->load->view('edit',$data);
	}
	public function update($product_id){

		$this->form_validation->set_rules('name', '<strong><em>Name</em></strong>', 'required|trim|min_length[5]|is_unique[products.name]');
		$this->form_validation->set_rules('description', '<strong><em>Description</em></strong>', 'required|trim|min_length[5]');
		$this->form_validation->set_rules('price', '<strong><em>Price</em></strong>', 'required|trim');

		if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('update_product_errors', validation_errors());
            redirect(base_url() . 'products/edit/' . $product_id);
        }
        else
        {

            $this->session->set_flashdata("update_product_success", "<p class='success'><strong> Product has been updated!</strong></p>");

			$this->product_model->update_product($this->input->post(NULL, TRUE), $product_id);
			
            redirect(base_url() . 'products/edit/' . $product_id);
        }

        // $update_success = '<p><strong>The profile of ' . $this->input->post('first_name', TRUE) . ' ' . $this->input->post('last_name', TRUE) . ' has been successfully updated.</strong></p>';

        // $this->session->set_flashdata('update_success', $update_success);

        // $this->product_model->update_product($this->input->post(NULL, TRUE), $product_id);

        // redirect(base_url() . 'products/edit/' . $product_id);
        // }
	}
	public function create(){
		$this->form_validation->set_rules('name', '<strong><em>Name</em></strong>', 'required|trim|min_length[5]|is_unique[products.name]');
		$this->form_validation->set_rules('description', '<strong><em>Description</em></strong>', 'required|trim|min_length[5]');
		$this->form_validation->set_rules('price', '<strong><em>Price</em></strong>', 'required|trim');
		if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('add_product_errors', validation_errors());
            redirect('products/add');
        }
        else
        {

            $this->session->set_flashdata("add_product_success", "<p class='success'><strong> Product has been added!</strong></p>");

            $this->product_model->add_product($this->input->post(NULL, TRUE));
			
            redirect('products/new');
        }
    }

	public function destroy($product_id)
	{
		$this->product_model->delete_product($product_id);
		$this->session->set_flashdata("delete_success", "<p class='error'>Deleted successfully!</p>");
        redirect(base_url());
	}
	
}

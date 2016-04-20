<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->output->enable_profiler(TRUE); //enables the profiler
        $this->load->model('Product'); //loads the model
	}
	public function index()
	{
		$products = $this->Product->get_all_products();
		$product_data = array('data' => $products);
		$this->load->view('index' , $product_data );
	}
	public function newfun()
	{
		$this->load->view('form');
	
	}
	public function create()
	{
		if(empty($this->input->post('name')) )
		{
			$this->session->set_flashdata('error', 'Name field cant be empty and has to be morethan 15 characters');
		}
		else
		{
		    $this->session->set_flashdata('added', 'course add sucessfully');
		}
		// $pattern = '/^\d+(?:\.\d{2})?$/';
		// if ($preg_match($pattern,$this->input->post('price')) == 0) 
		// {
		// 	$this->session->set_flashdata('patt', 'Price is not valid and cant be empty');
		// }
		$info = $this->input->post();
		$this->Product->add_product($info);
		redirect('/products');
	}
	public function show($id)
	{
		$pro_show = $this->Product->show_product($id);
		$data1 = array('pro_data' => $pro_show );
		$this->load->view('show', $data1);
	}
	public function edit($id)
	{
		$pro_edit = $this->Product->show_product($id);
		$data1 = array('pr_data' => $pro_edit );
		$this->load->view('edit', $data1);
	}
	public function updatefun($id)
	{
		// echo "Made it to updatefun";
		$info = $this->input->post();
		$this->Product->update_product($id,$info);
		// $data1 = array('pro_data_update' => $pro_update );
		redirect('/products');
	}
	public function destroy($id)
	{
		$del = $this->Product->delete($id);
		$data_delete = array('dest_data' => $del);
		redirect('/products');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
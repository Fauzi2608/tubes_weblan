<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function tampil()
    {
        $data["products"] = $this->product_model->getAll();
        $this->load->view('admin/header_admin');
        $this->load->view("admin/product/tampil", $data);
    }

    public function tambah()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view('admin/header_admin');
        $this->load->view("admin/product/tambah");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/tampil');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view('admin/header_admin');
        $this->load->view("admin/product/edit", $data);
    }

    function delete($id){

        $where = array('product_id' => $id);
        $this->product_model->delete($where,'products');

        redirect('products/tampil');

    }
}

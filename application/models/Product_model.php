<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products";

  
    public $name;
    public $harga;
    public $foto = 'default.jpg';


    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->harga = $post["harga"];
        $this->foto = $this->uploadfoto();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->harga = $post["harga"];

        if (!empty($_FILES["foto"]["name"])) {
        $this->foto = $this->uploadfoto();
    } else {
        $this->foto = $post["old_image"];
    }
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($where,$table){

        $this->db->where($where);

        $this->db->delete($table);

    }
    private function uploadfoto()
    {
    $config['upload_path']          = './assets/img/shop/';
    $config['allowed_types']        = 'gif|jpg|png|jfif';
    $config['file_name']            = $this->name;
    $config['overwrite']            = true;
    $config['max_size']             = 2000;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }
}

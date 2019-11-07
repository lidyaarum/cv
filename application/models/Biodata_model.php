<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'place',
            'label' => 'Place',
            'rules' => 'required'],

            ['field' => 'date',
            'label' => 'Date',
            'rules' => 'required'],

            ['field' => 'address',
            'label' => 'Address',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'resume',
            'label' => 'Resume',
            'rules' => 'required'],

            ['field' => 'gender',
            'label' => 'Gender',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get('biodata')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('biodata', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->name     = $post["name"];
        $this->place    = $post["place"];
        $this->date     = $post["date"];
        $this->address  = $post["address"];
        $this->email    = $post["email"];
        $this->gender    = $post["gender"];
        $this->resume   = $post["resume"];
        $this->foto   = $post["foto"];

       
        $this->db->insert('biodata', $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->name     = $post["name"];
        $this->place    = $post["place"];
        $this->date     = $post["date"];
        $this->address  = $post["address"];
        $this->email    = $post["email"];
        $this->gender   = $post["gender"];
        $this->resume   = $post["resume"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update('biodata', $this, array('id' => $post['id']));
        
    }

    public function delete($id)
    {
        return $this->db->delete('biodata', array("id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->id;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }
}
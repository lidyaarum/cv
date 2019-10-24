<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Skill_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

          

            ['field' => 'persen',
            'label' => 'Persen',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->get('skill');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('skill', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->name         = $post["name"];
    
        $this->persen   = $post["persen"];
        $this->db->insert('skill', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->name         = $post["name"];
        $this->persen       = $post["persen"];
        $this->db->update('skill', $this, array('id' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('skill', array("id" => $id));
    }

}
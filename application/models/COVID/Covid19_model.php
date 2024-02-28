<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid19_model extends CI_Model
{
    var $table = 'data_covid';

    public function get_entries()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function insert_entry($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete_entry($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }

    public function single_entry($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        if (count($query->result()) > 0) {
            return $query->row();
        }
    }

    public function update_entry($id, $data)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }
}

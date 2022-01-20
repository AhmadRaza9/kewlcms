<?php

class Settings_model extends CI_Model
{
    // Get Global Settings
    public function get_global_settings()
    {
        $query = $this->db->get('settings');
        $result = $query->result();
        return $result;
    }

    public function get_setting_value($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('settings');
        return $query->row();
    }

    public function update_setting($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('settings', $data);
        return true;
    }

}

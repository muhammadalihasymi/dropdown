<?php

class M_data extends CI_Model
{
    function fetch_mie()
    {
        $this->db->order_by("mie", "ASC");
        $query = $this->db->get("tb_mie");
        return $query->result();
    }

    function fetch_rasa($id_mie)
    {
        $this->db->where('id_mie', $id_mie);
        $this->db->order_by('rasa', 'ASC');
        $query = $this->db->get('tb_rasa');
        $output = '<option value="">Select State</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id_rasa . '">' . $row->rasa . '</option>';
        }
        return $output;
    }
}

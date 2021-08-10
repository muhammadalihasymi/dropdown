<?php

class MieModel extends CI_Model {
    protected $table = "tb_mie";

    public function all()
    {
        return $this->db->get($this->table)->result();
    }
}
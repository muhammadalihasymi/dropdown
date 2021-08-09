<?php

class RasaModel extends CI_Model {

    protected $table = "tb_rasa";

    public function all()
    {
        return $this->db->get($this->table)->result();
    }
}
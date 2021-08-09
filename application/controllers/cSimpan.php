<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSimpan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    function index()
    {
        $data['mie'] = $this->m_data->fetch_mie();
        $this->load->view('v_index', $data);
    }

    function fetch_rasa()
    {
        if ($this->input->post('id_mie')) {
            echo $this->m_data->fetch_rasa($this->input->post('id_mie'));
        }
    }
}

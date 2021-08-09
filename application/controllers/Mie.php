
<?php

class Mie extends CI_Controller {

    public function index()
    {
        $this->load->model('MieModel');

        $data['data_mie'] = $this->MieModel->all();
        $this->load->view('index', $data);
    }

    public function fetch_rasa($jenis)
    {
        $this->load->model('RasaModel');

        
        $mie_id = $this->input->get('mie_id');
        if ($mie_id != '') {
            $this->db->where('mie_id', $mie_id);
        }

        $data_rasa = $this->RasaModel->all();
        
        if ($jenis == 'option') {
            foreach ($data_rasa as $rasa) {
                echo "<option value='" . $rasa->id . "'>" . $rasa->rasa . "</option>";
            }
        }
    }
    
}

?>
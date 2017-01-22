<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        date_default_timezone_set("Asia/Jakarta");
        $data['datetime'] = date("d F Y H:i:s");
        $data['tabelinduk']=  $this->db->get("tut_main")->result();
        $this->load->view('welcome_message', $data);
    }

}

<?php

class View extends CI_Controller {

    public function index() {
        $koreksi = [
            "[list|]", "[/list|]",
            "[li|]", "[/li|]",
            "[b|]", "[/b|]",
            "[i|]", "[/i|]",
            "[u|]", "[/u|]",
            "[s|]", "[/s|]",
            "[right|]", "[/right|]",
            "[glow|]", "[/glow|]",
            "[btc|]",
            "\n",
            "[list|decimal|]",
            " :)",
            " ;D"
            ];
        $betul   = [
            "<ul style=\"margin-top: 0; margin-bottom: 0;\">", "</ul>",
            "<li>", "</li>",
            "<b>", "</b>",
            "<i>", "</i>",
            "<u>", "</u>",
            "<s>", "</s>",
            "<div style=\"text-align: right;\">", "</div>",
            "<span style=\"background-color: red;\">", "</span>",
            "<span class=\"BTC\">BTC</span>",
            "<br/>",
            "<ul style=\"margin-top: 0; margin-bottom: 0; list-style-type: decimal;\">",
            " <img src=\"/aset/utama/image/smiley.gif\" alt=\":)\" border=\"0\">",
            " <img src=\"/aset/utama/image/grin.gif\" alt=\":)\" border=\"0\">"
            ];
        if (isset($_GET['id']) ) {
            $id = $this->input->get('id');
            $judulhtml = "";
            $kategori = "";
            $uraian = "";
            $dateinput = "";
            foreach ($this->db->get_where("tut_main",["id"=>$id])->result() as $v) {
                $judulhtml = $v->judul;
                $kategori = $v->kategori;
                $uraian = str_replace($koreksi, $betul, $v->uraian);
                $dateinput = $v->dateinput;
            }
            $data['judulhtml']=$judulhtml;
            $data['kategori']=$kategori;
            $data['uraian']=$uraian;
            $data['dateinput']=$dateinput;
            $this->load->view('piew',$data);
        } else {
            redirect("/");
        }
    }

}

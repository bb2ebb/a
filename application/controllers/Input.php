<?php

class Input extends CI_Controller {

    public function index() {
        date_default_timezone_set("Asia/Jakarta");
        $koreksi = [
            "[b|]", "[/b|]",
            "[i|]", "[/i|]",
            "[u|]", "[/u|]",
            "[s|]", "[/s|]",
            "[right|]", "[/right|]",
            "[glow|]", "[/glow|]",
            "[btc|]",
            "\n",
            " :)"
            ];
        $betul   = [
            "<b>", "</b>",
            "<i>", "</i>",
            "<u>", "</u>",
            "<s>", "</s>",
            "<div style=\"text-align: right;\">", "</div>",
            "<span style=\"background-color: red;\">", "</span>",
            "<span class=\"BTC\">BTC</span>",
            "<br/>",
            " <img src=\"/aset/utama/image/smiley.gif\" alt=\":)\" border=\"0\">"
            ];
        $data['datetime'] = date("d F Y H:i:s");
        $data['kategori'] = $this->db->get('kategori')->result();
        if (isset($_POST['post'])) {
            $judul = trim($this->input->post("subject"), " \t\n\r\0\x0B");
            $isi = trim($this->input->post("message"), " \t\n\r\0\x0B");
            $kat = $this->input->post("icon");
            $this->db->insert("tut_main",["judul"=>$judul,"kategori"=>$kat,"uraian"=>$isi]);
            redirect("/");
        } elseif (isset($_POST['preview'])) {
            $judul = trim($this->input->post("subject"), " \t\n\r\0\x0B");
            $isi = trim($this->input->post("message"), " \t\n\r\0\x0B");
            $kat = $this->input->post("icon");
            $judulhtml = $judul;
            $isihtml = str_replace($koreksi, $betul, $isi);
            $data['judul'] = $judul;
            $data['isi'] = $isi;
            $data['kat'] = $kat;
            $data['datapreview'] = '<table class="bordercolor" width="100%" cellspacing="1" cellpadding="3" border="0" align="center"><tbody><tr class="titlebg"><td>' . ((is_null($judulhtml) || $judulhtml === "") ? "(No subject)" : $judulhtml) . '</td></tr><tr><td class="windowbg">' . ((is_null($isihtml) || $isihtml === "") ? "" : $isihtml) . '</td></tr></tbody></table><br/>';
            $this->load->view('inp', $data);
        } else {
            $this->load->view('inp', $data);
        }
    }

    public function test() {

        $phrase = "You should eat fruits, vegetables, and fiber every day.";
        $healthy = array("fruits", "vegetables", "fiber");
        $yummy = array("pizza", "beer", "ice cream");

        $newphrase = str_replace($healthy, $yummy, $phrase);
        echo $newphrase;
    }

}

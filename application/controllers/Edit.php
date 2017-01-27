<?php

class Edit extends CI_Controller {
    public function index() {
        if (isset($_GET['id']) && ($this->db->get_where('tut_main',['id'=>  $this->input->get('id')])->num_rows()>0)) {
            $data['dataaction'] = "edit?id=".$this->input->get('id');
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
            $data['datetime'] = date("d F Y H:i:s");
            $data['kategori'] = $this->db->get('kategori')->result();
            $data['judul'] = $this->db->get_where("tut_main",["id"=>$this->input->get('id')])->result()[0]->judul;
            $data['isi'] = $this->db->get_where("tut_main",["id"=>$this->input->get('id')])->result()[0]->uraian;
            $data['kat'] = $this->db->get_where("tut_main",["id"=>$this->input->get('id')])->result()[0]->kategori;
            $data['id'] = $this->input->get('id');
            if (isset($_POST['post'])) {
                $judul = trim($this->input->post("subject"), " \t\n\r\0\x0B");
                $isi = trim($this->input->post("message"), " \t\n\r\0\x0B");
                $kat = $this->input->post("icon");
                $this->db->update("tut_main",["judul"=>$judul,"kategori"=>$kat,"uraian"=>$isi],["id"=>  $this->input->post("iddd")]);
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
        } else {
            redirect('/');
        }
            
    }
}

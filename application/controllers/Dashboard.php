<?php

class Dashboard extends CI_Controller {

    public function index() {
        $this->load->view('dashbor');
    }
    
    public function view() {
        if (isset($_POST['viewsiswa'])) {
            $idsiswa = $this->input->post('id');
            $sql = "SELECT id, namalengkap, namapanggilan, 
                        IF(jeniskelamin=1,'Laki-Laki','Perempuan') AS jeniskelamin, 
                        tempatlahir,
                        CONCAT(DATE_FORMAT(tanggallahir, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggallahir, '%M')),' ',DATE_FORMAT(tanggallahir, '%Y')) AS tanggallahir,
                        nik,nis,nisn,tinggibadan,
                        beratbadan,jumlahsaudarakandung,
                        CONCAT(DATE_FORMAT(tanggalmasuksekolah, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggalmasuksekolah, '%M')),' ',DATE_FORMAT(tanggalmasuksekolah, '%Y')) AS tanggalmasuksekolah,
                        asalsekolah,noijazah,noskhun,nopesujianun,
                        CONCAT((SELECT uraian FROM kelas WHERE id=kelas),' ',(SELECT uraian FROM subkelas WHERE id=subkelas)) AS ckelas,
                        kelas,subkelas,
                        (SELECT uraian FROM siswastatus WHERE id=status) AS status,
                        smt,
                        namaayah,tempatlahirayah, 
                        CONCAT(DATE_FORMAT(tanggallahirayah, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggallahirayah, '%M')),' ',DATE_FORMAT(tanggallahirayah, '%Y')) AS tanggallahirayah,
                        pekerjaanayah, 
                        (SELECT uraian FROM kategoripekerjaan WHERE id=kategoripekerjaanayah) AS kategoripekerjaanayah, 
                        (SELECT uraian FROM pendidikan WHERE id=pendidikanayah) AS pendidikanayah,
                        (SELECT uraian FROM penghasilan WHERE id=penghasilanayah) AS penghasilanayah,
                        namaibu,
                        tempatlahiribu, 
                        CONCAT(DATE_FORMAT(tanggallahiribu, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggallahiribu, '%M')),' ',DATE_FORMAT(tanggallahiribu, '%Y')) AS tanggallahiribu,
                        pekerjaanibu,  
                        (SELECT uraian FROM kategoripekerjaan WHERE id=kategoripekerjaanibu) AS kategoripekerjaanibu, 
                        (SELECT uraian FROM pendidikan WHERE id=pendidikanibu) AS pendidikanibu,
                        (SELECT uraian FROM penghasilan WHERE id=penghasilanibu) AS penghasilanibu, 
                        namawali,tempatlahirwali, 
                        CONCAT(DATE_FORMAT(tanggallahirwali, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggallahirwali, '%M')),' ',DATE_FORMAT(tanggallahirwali, '%Y')) AS tanggallahirwali,
                        pekerjaanwali,
                        (SELECT uraian FROM kategoripekerjaan WHERE id=kategoripekerjaanwali) AS kategoripekerjaanwali, 
                        (SELECT uraian FROM pendidikan WHERE id=pendidikanwali) AS pendidikanwali, 
                        (SELECT uraian FROM penghasilan WHERE id=penghasilanwali) AS penghasilanwali, 
                        (SELECT GROUP_CONCAT(
                           CONCAT(
                              notelp,IF(ext IS NULL,'',CONCAT(' (ext: ',ext,')'))
                           ) SEPARATOR ', '
                        ) FROM siswanotelp WHERE siswanotelp.fkid=siswadatainduk.id) AS notelp,
                        (SELECT GROUP_CONCAT(nomor SEPARATOR ', ') FROM siswanohpayah WHERE fkid=siswadatainduk.id) AS nohpayah,
                        (SELECT GROUP_CONCAT(nomor SEPARATOR ', ') FROM siswanohpibu WHERE fkid=siswadatainduk.id) AS nohpibu,
                        dateinput
                        FROM siswadatainduk WHERE id='".$idsiswa."'";
            $data['querysiswa'] = $this->db->query($sql)->result();
            $this->load->view('input_siswa/complete_1', $data);
        }  else {
            redirect('dashboard');
        }
    }
}

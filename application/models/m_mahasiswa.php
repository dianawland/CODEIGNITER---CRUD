<?php 

class m_mahasiswa extends CI_Model {

    function tampil_data() {
        return $this->db->get('mahasiswa');
    }

    }
        
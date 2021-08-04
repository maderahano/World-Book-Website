<?php
    class Model_kategori extends CI_Model
    {
        public function data_fantasi()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Fantasi'));
        }
        
        public function data_science_fiction()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Science-Fiction'));
        }

        public function data_horor()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Horor'));
        }

        public function data_romansa()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Romansa'));
        }

        public function data_humor()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Humor'));
        }

        public function data_misteri()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Misteri'));
        }

        public function data_petualangan()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Petualangan'));
        }

        public function data_biografi()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Biografi'));
        }

        public function data_ensiklopedia()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Ensiklopedia'));
        }

        public function data_jurnal()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Jurnal'));
        }

        public function data_kamus()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Kamus'));
        }

        public function data_filsafat()
        {
           return $this->db->get_where('tb_barang',array('kategori_brg' => 'Filsafat'));
        }
    }
?>
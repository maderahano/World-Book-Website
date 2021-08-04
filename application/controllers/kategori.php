<?php
    class Kategori extends CI_Controller
    {
        public function fantasi()
        {
            $data['fantasi'] = $this->model_kategori->data_fantasi()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/fantasi',$data);
            $this->load->view('templates/footer');
        }

        public function science_fiction()
        {
            $data['science_fiction'] = $this->model_kategori->data_science_fiction()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/science_fiction',$data);
            $this->load->view('templates/footer');
        }

        public function horor()
        {
            $data['horor'] = $this->model_kategori->data_horor()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/horor',$data);
            $this->load->view('templates/footer');
        }

        public function romansa()
        {
            $data['romansa'] = $this->model_kategori->data_romansa()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/romansa',$data);
            $this->load->view('templates/footer');
        }

        public function humor()
        {
            $data['humor'] = $this->model_kategori->data_humor()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/humor',$data);
            $this->load->view('templates/footer');
        }

        public function misteri()
        {
            $data['misteri'] = $this->model_kategori->data_misteri()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/misteri',$data);
            $this->load->view('templates/footer');
        }

        public function petualangan()
        {
            $data['petualangan'] = $this->model_kategori->data_petualangan()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/petualangan',$data);
            $this->load->view('templates/footer');
        }

        public function biografi()
        {
            $data['biografi'] = $this->model_kategori->data_biografi()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/biografi',$data);
            $this->load->view('templates/footer');
        }

        public function ensiklopedia()
        {
            $data['ensiklopedia'] = $this->model_kategori->data_ensiklopedia()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/ensiklopedia',$data);
            $this->load->view('templates/footer');
        }

        public function jurnal()
        {
            $data['jurnal'] = $this->model_kategori->data_jurnal()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/jurnal',$data);
            $this->load->view('templates/footer');
        }

        public function kamus()
        {
            $data['kamus'] = $this->model_kategori->data_kamus()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/kamus',$data);
            $this->load->view('templates/footer');
        }

        public function filsafat()
        {
            $data['filsafat'] = $this->model_kategori->data_filsafat()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/filsafat',$data);
            $this->load->view('templates/footer');
        }
    }
?>
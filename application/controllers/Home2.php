<?php
class Home2 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_masa_khidmat');

        if (!$this->session->userdata('id_user')) {
            redirect('Auth/index2');
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman Data Masa_khidmat';
        $data['masa_khidmat'] = $this->M_masa_khidmat->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index2', $data);
        $this->load->view('templates/footer');
    }
    public function masa_khidmat()
    {
        $data['title'] = 'Halaman Data Masa_khidmat';
        $data['masa_khidmat'] = $this->M_masa_khidmat->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index2', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] = 'Halaman Tambah Masa_khidmat';
        $data['masa_khidmat'] = $this->M_masa_khidmat->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home2/tambah_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_tambah_data()
    {
        $this->M_masa_khidmat->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Baru Berhasil Ditambahkan!
      </div>');
        redirect('Home2');
    }
    public function hapus_data($id_masa_khidmat)
    {
        $this->load->model('M_masa_khidmat');
        $this->M_masa_khidmat->hapus_data($id_masa_khidmat);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('Home2');
    }
    public function edit_data($id_masa_khidmat)
    {
        $data['title'] = 'Halaman Edit Masa_khidmat';
        $data['tbl_masa_khidmat'] = $this->M_masa_khidmat->ambil_id_masa_khidmat($id_masa_khidmat);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home2/edit_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data()
    {
        $this->M_masa_khidmat->proses_edit_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('Home2');
    }
    
    public function editdata($id_masa_khidmat)
    {
        $this->load->model('M_masa_khidmat');
        $this->M_masa_khidmat->edit_data($id_masa_khidmat);
        redirect('Home2');
    }
    function lihat_data()
        {
             $this->load->view('templates/header');
          //    $this->tbl_masa_khidmat->lihat_data($id_masa_khidmat);
             $this->load->view('home3/struktur');
          //    redirect('Auth/Home3');
        }
}
?>
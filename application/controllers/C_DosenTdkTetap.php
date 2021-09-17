<?php

class C_DosenTdkTetap extends CI_Controller
{
  public function dosenTdkTetap()
  {
    $this->load->view('default/headerKoor');
    $data['dosenTdkTetap'] = $this->m_DosenTdkTetap->getDosenTdkTetap();
    $this->load->view('Dosen/dosenTdkTetap', $data);
    $this->load->view('default/footer');
  }
  public function tambahDosenTidakTetap()
  {
    $this->load->view('default/headerKoor');
    $this->load->view('Dosen/tambahDosenTidakTetap');
    $this->load->view('default/footer');
  }
  public function editDosenTdkTetap()
  {
    $this->load->view('default/headerKoor');
    $data['dosenTdkTetap'] = $this->m_DosenTdkTetap->pilih_data()->row();
    $this->load->view('Dosen/editDosenTdkTetap', $data);
    $this->load->view('default/footer');
  }
  public function tambahDosenTdkTetap_aksi()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
    $this->form_validation->set_rules('nidn', 'NIDN', 'trim|required');
    $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
    $this->form_validation->set_rules('gelarbelakang', 'Gelar', 'trim|required');
    $this->form_validation->set_rules('pendidikan1', 'Pendidikan 1', 'trim|required');
    $this->form_validation->set_rules('pendidikan2', 'Pendidikan 2', 'trim|required');
    $this->form_validation->set_rules('bidang1', 'Bidang 1', 'trim|required');
    $this->form_validation->set_rules('bidang2', 'Bidang 2', 'trim|required');

    if ($this->form_validation->run() == false) {
      $this->load->view('default/headerKoor');
      $this->load->view('Dosen/tambahDosenTetap');
      $this->load->view('default/footer');
    } else {
      $this->m_DosenTdkTetap->aktivitas_tambah();
      $this->m_DosenTdkTetap->tambah_data();
      $this->session->set_flashdata('message', ' Data Berhasil Disimpan');
      redirect('C_DosenTdkTetap/dosenTdkTetap');
    }
  }
  public function editDosenTdkTetap_aksi()
  {
    $this->m_DosenTdkTetap->aktivitas_edit();
    $this->m_DosenTdkTetap->update_dosen();
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    redirect('C_DosenTdkTetap/dosenTdkTetap');
  }
  public function hapus_dosentdktetap()
  {
    $this->m_DosenTdkTetap->delete_dosen();
    $this->session->set_flashdata('message', 'Hapus Data Berhasil');
    redirect('C_DosenTdkTetap/dosenTdkTetap');
  }
  public function unduhDTT()
  {
    $data['dosentdkTetap'] = $this->m_DosenTdkTetap->getDosenTdkTetap();
    $this->load->view('unduh/unduhDTT', $data);
  }
}

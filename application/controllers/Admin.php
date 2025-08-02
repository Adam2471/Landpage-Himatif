<?php
#[\AllowDynamicProperties]
class admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		$this->load->model('m_login');
		$this->load->helper('url');
	}

	function index()
	{
		$data['user'] = $this->m_login->tampil_data()->result();
		$this->load->view('admin', $data);
	}
	function edit_password()
	{
		$data['user'] = $this->m_login->tampil_data_ubah_password()->result();
		$this->load->view('ubah_password', $data);
	}
	public function hapus($id)
	{
		$where = array('id_pendaftar' => $id);
		$this->m_login->hapus_data($where, 'pendaftaran');
		redirect('admin');
	}
	public function hapus_semnas($id)
	{
		$where = array('id' => $id);
		$this->m_login->hapus_data($where, 'semnas');
		redirect('admin/lihat_semnas');
	}
	public function hapus_esport($id)
	{
		$where = array('id' => $id);
		$this->m_login->hapus_data($where, 'lomba_esport');
		redirect('admin/lihat_esport');
	}
	public function hapus_sport($id)
	{
		$where = array('id' => $id);
		$this->m_login->hapus_data($where, 'lomba_sport');
		redirect('admin/lihat_sport');
	}
	public function hapus_iot($id)
	{
		$where = array('id' => $id);
		$this->m_login->hapus_data($where, 'iot');
		redirect('admin/lihat_iot');
	}
	public function hapus_uiux($id)
	{
		$where = array('id' => $id);
		$this->m_login->hapus_data($where, 'uiux');
		redirect('admin/lihat_uiux');
	}
	public function hapus_poster($id)
	{
		$where = array('id' => $id);
		$this->m_login->hapus_data($where, 'poster');
		redirect('admin/lihat_poster');
	}
	public function hapus_film($id)
	{
		$where = array('id' => $id);
		$this->m_login->hapus_data($where, 'film');
		redirect('admin/lihat_film');
	}
	public function hapus_workshop($id)
	{
		$where = array('id' => $id);
		$this->m_login->hapus_data($where, 'workshop');
		redirect('admin/lihat_workshop');
	}
	public function edit($id)
	{
		$where = array('id_pendaftar' => $id);
		$data['user'] = $this->m_login->edit_data($where, 'pendaftaran')->result();
		$this->load->view('update_view', $data);
	}
	public function edit_esport($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_login->edit_data($where, 'lomba_esport')->result();
		$this->load->view('update_esport', $data);
	}
	public function edit_sport($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_login->edit_data($where, 'lomba_sport')->result();
		$this->load->view('update_sport', $data);
	}
	public function edit_iot($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_login->edit_data($where, 'iot')->result();
		$this->load->view('update_iot', $data);
	}
	public function edit_uiux($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_login->edit_data($where, 'uiux')->result();
		$this->load->view('update_uiux', $data);
	}
	public function edit_poster($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_login->edit_data($where, 'poster')->result();
		$this->load->view('update_poster', $data);
	}
	public function edit_film($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_login->edit_data($where, 'film')->result();
		$this->load->view('update_film', $data);
	}
	public function edit_workshop($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_login->edit_data($where, 'workshop')->result();
		$this->load->view('update_workshop', $data);
	}
	public function edit_semnas($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_login->edit_data($where, 'semnas')->result();
		$this->load->view('update_semnas', $data);
	}
	function admin_pdf()
	{
		#$this->load->view('template/header');
		$data['user'] = $this->m_login->tampil_data()->result();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-siswa.pdf";
		$this->pdf->load_view('admin_pdf', $data);
		#$this->load->view('template/footer');
	}
	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$email = $this->input->post('email');
		$kelas = $this->input->post('kelas');
		$angkatan = $this->input->post('angkatan');
		$lomba = $this->input->post('lomba');
		$pembayaran = $this->input->post('pembayaran');



		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'email' => $email,
			'kelas' => $kelas,
			'angkatan' => $angkatan,
			'lomba' => $lomba,
			'pembayaran' => $pembayaran
		);
		$where = array(
			'id_pendaftar' => $id
		);
		$this->m_login->update_data($where, $data, 'pendaftaran');
		echo "<script>alert('Data berhasil disimpan');
				location.href = 'index';</script>";
	}
	public function update_esport()
	{
		$id = $this->input->post('id');
		$no_telp = $this->input->post('no_telp');
		$lomba = $this->input->post('lomba');
		$nama = $this->input->post('nama');



		$data = array(
			'nama_tim' => $nama,
			'no_hp' => $no_telp,
			'lomba' => $lomba
		);
		$where = array(
			'id' => $id
		);
		$this->m_login->update_data($where, $data, 'lomba_esport');
		echo "<script>alert('Data berhasil disimpan');
				location.href = 'lihat_sport';</script>";
	}
	public function update_admin()
	{
		$id = $this->input->post('id');
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');

		if ($password != $password2) {
			echo "<script>alert('Konfirmasi Password Tidak Sama!');
				location.href = 'edit_password';</script>";
		} else {
			$final_password = md5($password);
			$data = array(
				'password' => $final_password
			);
			$where = array(
				'id' => $id
			);
			$this->m_login->update_data($where, $data, 'admin');
			echo "<script>alert('Password berhasil diubah');
				location.href = 'index';</script>";
		}
	}
	public function update_sport()
	{
		$id = $this->input->post('id');
		$kelas = $this->input->post('kelas');
		$no_telp = $this->input->post('no_telp');
		$lomba = $this->input->post('lomba');
		$angkatan = $this->input->post('angkatan');
		$nama = $this->input->post('nama');



		$data = array(
			'nama_pj' => $nama,
			'no_hp' => $no_telp,
			'lomba' => $lomba,
			'kelas' => $kelas,
			'angkatan' => $angkatan
		);
		$where = array(
			'id' => $id
		);
		$this->m_login->update_data($where, $data, 'lomba_sport');
		echo "<script>alert('Data berhasil disimpan');
				location.href = 'lihat_esport';</script>";
	}
	public function update_iot()
	{
		$id = $this->input->post('id');
		$nama_ketua = $this->input->post('nama_ketua');
		$nama_tim = $this->input->post('nama_tim');
		$asal = $this->input->post('asal');
		$no_tlp = $this->input->post('no_tlp');
		$lomba = $this->input->post('lomba');
		$dokumen = $this->input->post('dokumen');

		$data = array(
			'nama_ketua' => $nama_ketua,
			'nama_tim' => $nama_tim,
			'asal' => $asal,
			'no_hp' => $no_tlp,
			'lomba' => $lomba,
			'dokumen_pendukung' => $dokumen,
		);
		$where = array(
			'id' => $id
		);
		$this->m_login->update_data($where, $data, 'iot');
		echo "<script>alert('Data berhasil disimpan');
				location.href = 'lihat_iot';</script>";
	}
	function update_uiux()
	{
		$nama_ketua = $this->input->post('nama_ketua');
		$nama_tim = $this->input->post('nama_tim');
		$asal = $this->input->post('asal');
		$no_tlp = $this->input->post('no_tlp');
		$lomba = $this->input->post('lomba');
		$dokumen = $this->input->post('dokumen');
		$id = $this->input->post('id');

		$data = array(
			'nama_ketua' => $nama_ketua,
			'nama_tim' => $nama_tim,
			'asal' => $asal,
			'no_hp' => $no_tlp,
			'lomba' => $lomba,
			'dokumen_pendukung' => $dokumen
		);
		$where = array(
			'id' => $id
		);
		$this->m_login->update_data($where, $data, 'uiux');
		echo "<script>alert('Data berhasil disimpan');
				location.href = 'lihat_uiux';</script>";
	}
	function update_poster()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$asal = $this->input->post('asal');
		$no_tlp = $this->input->post('no_tlp');
		$lomba = $this->input->post('lomba');
		$dokumen = $this->input->post('dokumen');

		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'asal' => $asal,
			'no_hp' => $no_tlp,
			'lomba' => $lomba,
			'dokumen_pendukung' => $dokumen
		);
		$where = array(
			'id' => $id
		);
		$this->m_login->update_data($where, $data, 'poster');
		echo "<script>alert('Data berhasil disimpan');
				location.href = 'lihat_poster';</script>";
	}
	function update_film()
	{
		$id = $this->input->post('id');
		$nama_ketua = $this->input->post('nama_ketua');
		$nama_tim = $this->input->post('nama_tim');
		$asal = $this->input->post('asal');
		$no_tlp = $this->input->post('no_tlp');
		$lomba = $this->input->post('lomba');
		$dokumen = $this->input->post('dokumen');

		$data = array(
			'nama_ketua' => $nama_ketua,
			'nama_tim' => $nama_tim,
			'asal' => $asal,
			'no_hp' => $no_tlp,
			'lomba' => $lomba,
			'dokumen_pendukung' => $dokumen
		);
		$where = array(
			'id' => $id
		);
		$this->m_login->update_data($where, $data, 'film');
		echo "<script>alert('Data berhasil disimpan');
				location.href = 'lihat_film';</script>";
	}
	function update_workshop()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$no_tlp = $this->input->post('no_tlp');
		$lomba = $this->input->post('lomba');
		$kelas = $this->input->post('kelas');
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'no_hp' => $no_tlp,
			'materi' => $lomba,
			'dokumen_pendukung' => $kelas
		);
		$where = array(
			'id' => $id
		);
		$this->m_login->update_data($where, $data, 'workshop');
		echo "<script>alert('Data berhasil disimpan');
				location.href = 'lihat_workshop';</script>";
	}
	function update_semnas()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$no_tlp = $this->input->post('no_tlp');
		$asal = $this->input->post('asal');
		$lomba = $this->input->post('lomba');



		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'no_hp' => $no_tlp,
			'asal' => $asal,
			'kegiatan' => $lomba
		);
		$where = array(
			'id' => $id
		);
		$this->m_login->update_data($where, $data, 'semnas');
		echo "<script>alert('Data berhasil disimpan');
				location.href = 'lihat_semnas';</script>";
	}
	function lihat_esport()
	{
		$data['user'] = $this->m_login->tampil_data_esport()->result();
		$this->load->view('lihat_esport', $data);
	}
	function lihat_sport()
	{
		$data['user'] = $this->m_login->tampil_data_sport()->result();
		$this->load->view('lihat_sport', $data);
	}
	function lihat_iot()
	{
		$data['user'] = $this->m_login->tampil_data_iot()->result();
		$this->load->view('lihat_iot', $data);
	}
	function lihat_uiux()
	{
		$data['user'] = $this->m_login->tampil_data_uiux()->result();
		$this->load->view('lihat_uiux', $data);
	}
	function lihat_poster()
	{
		$data['user'] = $this->m_login->tampil_data_poster()->result();
		$this->load->view('lihat_poster', $data);
	}
	function lihat_film()
	{
		$data['user'] = $this->m_login->tampil_data_film()->result();
		$this->load->view('lihat_film', $data);
	}
	function lihat_workshop()
	{
		$data['user'] = $this->m_login->tampil_data_workshop()->result();
		$this->load->view('lihat_workshop', $data);
	}
	function lihat_semnas()
	{
		$data['user'] = $this->m_login->tampil_data_semnas()->result();
		$this->load->view('lihat_semnas', $data);
	}
}
